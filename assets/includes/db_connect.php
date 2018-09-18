<?php
require $_SERVER['DOCUMENT_ROOT'].'/hospital_system/vendor/autoload.php';
date_default_timezone_set('Asia/Manila');
class Database
{
	function __construct()
	{
		$this->db = ( new MongoDB\Client)->hospital;
	}
	public function getPatientNumber(){
		$number = count(iterator_to_array($this->db->patient->find()));
		return "PT-".str_pad($number + 1, 5, 0, STR_PAD_LEFT);
	}
	public function getSymptoms(){
		return $this->db->symptom->find();
	}
	public function getFecalysis($labtest_id){
		return $this->db->fecalysis->find(['labtest_id' => "$labtest_id"]);
	}
	public function getSymptom($id){
		return $this->db->symptom->find(['symptom_id' => "$id"]);
	}
	public function getTests(){
		return $this->db->test_list->find();
	}
	public function getTest($id){
		return $this->db->test_list->find(['test_id' => "$id"]);
	}
	public function getPatientTest($patient_oid){
		return $this->db->lab_test->find(['patient_oid' => "$patient_oid"]);
	}
	public function getQuestions($id){
		return $this->db->question_list->find(['symptom_id' => "$id"]);
	}
	public function getBeds(){
		return $this->db->bed_list->find();
	}
	public function getBed($id){
		return $this->db->bed_list->find(['bed_no' => $id]);
	}
	public function getLabTest($id){
		return $this->db->lab_test->find(['_id' => new MongoDB\BSON\ObjectId($id)]);
	}
	public function getER($patient_oid){
		return $this->db->er_transaction->find(['patient_oid' => $patient_oid]);
	}
	public function insert_one($data){
		try{
			//get patient id
			$number = count(iterator_to_array($this->db->patient->find()));
			$patient_id = str_pad($number + 1, 5, 0, STR_PAD_LEFT);
			//insert patient
			$patient = 
			[
				"patient_id" => $patient_id, "lname"=> $data['lname'], "fname" => $data['fname'],
				"mname" => $data['mname'], "bdate" => $data['bdate'], "sex" => $data['sex'], 
				"address" => $data['address']
			];
			$patient_oid = "";
			$result_patient = $this->db->patient->insertOne($patient);
			$patient_oid = (string) $result_patient->getInsertedId();
			//insert triage
			$triage = 
			[
				"patient_oid" => $patient_oid, "blood_pressure" => $data['bpressure'], "breathing" => $data['breathing'],
				"pulse" => $data['pulse'], "temperature" => $data['temperature'], "isallergic" => $data['allergies'], 
				"allergies" => $data['a_name'], "hasmedication" => $data['medication'], "medications" => $data['m_name'],
				"symptom_id" => $data['symptom']
			];
			$result_triage = $this->db->triage->insertOne($triage);
			//search questions based of symptom_id
			$question_list = $this->getQuestions($data['symptom']);
			$q_handler = [];
			foreach ($question_list as $question) {
				$q_handler[] = array("question_oid"=>$question->_id, "answer"=>$data["$question->_id"], "patient_oid"=> $patient_oid);
			}
			$result_squestion = $this->db->symptom_questions->insertMany($q_handler);
			//insert to laborty  test
			$lab_test = [];
			foreach ($data['test'] as $test) {
				$lab_test[] =  array("test_id"=>$test, "patient_oid"=>$patient_oid, "status"=> "ongoing", "date_completed" => "n/a");
			}
			$result_labtest = $this->db->lab_test->insertMany($lab_test);
			$labtest_ids = $result_labtest->getInsertedIds();
			$count = 0;
			$f = [];
			$u = [];
			foreach ($labtest_ids as $id) {
				if($data['test'][$count] == 1){//fecalysis
					$f[] =
					[
						"color" => "n/a", "consistency" => "n/a", "pus" => "n/a", "rbc" => "n/a", 
						"others" => "n/a", "interpretation" => "n/a", "date_completed" => "n/a", "status" => "ongoing", "labtest_id" => (string)$id
					];
				}
				else if($data['test'][$count] == 2){// urinalysis
					$u[] =
					[
						"color" => "n/a", "transparency" => "n/a", "hemoglobin" => "n/a", "hematocrit" => "n/a", 
						"wbc" => "n/a", "rbc" => "n/a", "pus" => "n/a", "platelet_count" => "n/a", "interpretation" => "n/a", "status" => "ongoing",  "date_completed" => "n/a","labtest_id" => (string)$id
					];
				}
				$count++;
			}
			if(count($f) > 0){
				$result_fecalysis = $this->db->fecalysis->insertMany($f);
			}
			if(count($u) > 0){
				$result_urinalysis = $this->db->urinalysis->insertMany($u);
			}
			//insert to er_transaction
			if(isset($data['bed_no']) && !empty($data['bed_no'])){
				$er_sdetails = array("admisson_date" => date("F d, Y h:i A"),"bed_no" => $data['bed_no']);
				//update bed status;
				$update = $this->db->bed_list->updateOne( ['bed_no' => $data['bed_no']], ['$set' => ['status' => 'Occupied']]);
			}
			else{
				$er_sdetails = [];
			}
			$er_details = 
			[
				"patient_oid" => $patient_oid,"emergency_code" => $data['emergency_code'], "patient_id" => $patient_id, "date_created" => date("F d, Y h:i A"), "status" => "ongoing"
			];
			$er_details = array_merge($er_details, $er_sdetails);
			$result_er = $this->db->er_transaction->insertOne($er_details);
			return array(true,$patient_oid);
		}
		catch(Exception $e){
			return "Error: ".$e->getMessage();
		}
	}
	public function insert_two($data){
		$c = count($data)-1;
		$date_completed = date("m/d/Y H:i:s");
		if($data[$c] == "Fecalysis"){ //fecalysis
			$update = $this->db->fecalysis->updateOne( 
				['labtest_id' => $data[$c - 1]], 
				['$set' => 
					['color' => $data[0], 'consistency' => $data[1],'pus' => $data[2],
					'rbc' => $data[3],'other' => $data[4],'interpretation' => $data[5],
					'status' => 'Done','date_completed' => $date_completed]
				]	
			);
			$update = $this->db->lab_test->updateOne( 
				['_id' => new MongoDB\BSON\ObjectId ($data[$c - 1])], 
				['$set' => 
					['status' => "Done",'date_completed' => $date_completed]
				]
			);
			//find bed no
			$lab_test =$this->getLabTest($data[$c - 1]);
			foreach ($lab_test as $lab) {
				$patient_oid = $lab->patient_oid;
				$er_transaction = $this->getER($patient_oid);
				foreach ($er_transaction as $er) {
					$update = $this->db->bed_list->updateOne( 
						['bed_no' => $er->bed_no], 
						['$set' => 
							['status' => "Vacant"]
						]
					);
				}
			}
			return true;
		}
		else if($data[$c] == "Urinalysis"){ //urinalysis

		}
	}
}
?>