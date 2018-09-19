<?php
include 'db_connect.php';
$db = new Database;
if(isset($_POST['id'])){
	$id = $_POST['id'];
	if($id == 1){
		if(isset($_POST['symptom_id'])){
			$symptom_id = $_POST['symptom_id'];
			$title ='';
			foreach ($db->getSymptom($symptom_id) as $symptom) {
				$title = $symptom->name;
			}
			$response ="<div id='$symptom_id' class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>";
			$response .= "<h6>$title</h6><hr>";
			foreach ($db->getQuestions($symptom_id) as $question) {
				$response.="<div class='form-group'>";
				$type = $question->type;
				if($type =='rate'){
					$response.="<div class='d-flex'>";
					$response.="<div><label>$question->question</label></div>";
					$response.="<div class='ml-auto'><span id='$question->_id' class='text-warning' style='font-size: 15px;'>1</span></div>";
					$response.="</div>";
					$response.="<input type='range' class='slider' name='$question->_id' onchange='rateChange(\"$question->_id\",this.value)' style='width: 100%' min='1' max='10' value='1'>";
					$response.="<div class='d-flex'><div>1</div><div class='ml-auto'>10</div></div>";
				}
				else if($type =='text'){
					$response.="<label>$question->question</label>";
					$response.="<textarea name='$question->_id' class='form-control'></textarea>";
				}
				else if($type =='y/n'){
					$response.="<label>$question->question</label>";
					$response.="<div class='row'>";
					$response.="<div class='col-lg-2 col-md-2 col-sm-2 col-xs-2'>";
					$response.="<div class='form-check'>";
					$response.="<input class='form-check-input' type='radio' name='".$question->_id."' id='".$question->_id."' value='yes'>";
					$response.="<label class='form-check-label' for='".$question->_id."_y'>Yes</label>";
					$response.="</div>";
					$response.="</div>";
					$response.="<div class='col-lg-2 col-md-2 col-sm-2 col-xs-2'>";
					$response.="<div class='form-check'>";
					$response.="<input class='form-check-input' type='radio' name='".$question->_id."' id='".$question->_id."' value='no' checked>";
					$response.="<label class='form-check-label' for='".$question->_id."_n'>No</label>";
					$response.="</div>";
					$response.="</div>";
					$response.="</div>";
				}
				$response.="</div>";
			}
			$response.="</div>";
			echo $response;
		}
	}
	else if($id == 2){
		if(isset($_POST['test_id'])){
			$test_id = $_POST['test_id'];
			foreach ($db->getTest($test_id) as $test) {
				$name = $test->name;
				$description = $test->description;

			}
			echo json_encode(array($name,$description));
		}
	}
	else if($id == 3){
		$response=[];
		foreach ($db->getBeds() as $bed) {
			$response[]=array($bed->bed_no,$bed->ward_no,$bed->floor,$bed->status);
		}
		echo json_encode($response);
	}
	else if($id == 4){ //part 1 submit
		echo json_encode($db->insert_one($_POST));
	}
	else if($id == 5){
		$response=[];
		$patient_oid = (string) $_POST['test_id'];
		foreach ($db->getPatientTest($patient_oid) as $test) {
			foreach ($db->getTest($test->test_id) as $test1) {
				$t_id =  (string) $test->_id;
				$response[]=array($t_id,$test1->name,$test->date_completed,$test->status,$test1->name,$test->test_id);
			}
		}
		echo json_encode($response);
	}
	else if($id == 6){
		$type = $_POST['type'];
		$labtest_id = (string)$_POST['test_id'];
		$response =[];
		if($type == "Fecalysis"){//fecalysis
			foreach ($db->getFecalysis($labtest_id) as $test) {
				$response[0]="<div class='col-lg-12 col-md-12 col-xs-12 col-sm-12'>
								<div class='form-group row'>
									<label class='col-sm-4 col-form-label'>Color</label>
									<div class='col-sm-8'>
										<input type='text' name='test_value[]' class='form-control'>
									</div>
								</div>
							</div>
							<div class='col-lg-12 col-md-12 col-xs-12 col-sm-12'>
								<div class='form-group row'>
									<label class='col-sm-4 col-form-label'>Consistency</label>
									<div class='col-sm-8'>
										<input type='text' name='test_value[]' class='form-control'>
									</div>
								</div>
							</div>
							<div class='col-lg-12 col-md-12 col-xs-12 col-sm-12'>
								<div class='form-group row'>
									<label for='staticEmail' class='col-sm-4 col-form-label'>Pus</label>
									<div class='col-sm-8'>
										<input type='text' name='test_value[]' class='form-control'>
									</div>
								</div>
							</div>
							<div class='col-lg-12 col-md-12 col-xs-12 col-sm-12'>
								<div class='form-group row'>
									<label class='col-sm-4 col-form-label'>Red Blood Cells</label>
									<div class='col-sm-8'>
										<input type='text' name='test_value[]' class='form-control'>
									</div>
								</div>
							</div>
							<div class='col-lg-12 col-md-12 col-xs-12 col-sm-12'>
								<div class='form-group row'>
									<label class='col-sm-4 col-form-label'>Others</label>
									<div class='col-sm-8'>
										<input type='text' name='test_value[]' class='form-control'>
									</div>
								</div>
							</div>
								";
				
				$response[1] = $test->interpretation;
			}
		}
		else if($type == 2){//urinalysis

		}
		echo json_encode($response);
	}
	else if($id == 7){
		echo json_encode($db->insert_two($_POST['test_value']));
	}
}

?>

