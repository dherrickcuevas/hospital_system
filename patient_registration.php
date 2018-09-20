<?php include('assets/parts/header.php'); 
$db = new Database;
?>
<div class="col-lg-12">
	<div class="row">

		<div class="col-lg-12">

			<!-- SmartWizard html -->
			<div id="smartwizard" class="fluid mt-4 mb-4">
				<ul>
					<li><a href="#step-1">Step 1<br /><small>Patient Registration</small></a></li>
					<li><a href="#step-2">Step 2<br /><small>Triage Assessment</small></a></li>
					<li><a href="#step-3">Step 3<br /><small>Symptoms</small></a></li>
					<li><a href="#step-4">Step 4<br /><small>Lab Tests</small></a></li>
					<li><a href="#step-5">Step 5<br /><small>Laboratory Results and Interpretations</small></a></li>
					<li><a href="#step-6">Step 6<br /><small>Hospital Bill</small></a></li>
				</ul>

				<div style="padding: 10px;">
					<div id="step-1" class="">
						<form id="form_one">
							<div class="col-lg-12 mt-4 mb-4">

								<div class="d-flex">
									<div>
										<h3>Patient Registration</h3>
									</div>

									<div class="ml-auto" style="text-align: right">
										<h3 id="code_status" class="" style="width: 200px; height: 30px;"></h3>
									</div>
								</div>

								<hr>

								<div class="row">

									<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
										<h6><strong></strong></h6>

										<div class="row">

											<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
												<div class="form-group" style="text-align: left">
													<label>Patient No.</label>
													<h6><strong><span id="patient_no"><?php echo $db->getPatientNumber()?></span></strong></h6>
												</div>
											</div>

											<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
												<div class="form-group">
													<label>Emergency Code</label>
													<select name="emergency_code" class="select2" style="width: 100%;">
														<option disabled value selected>Select Emergency Code</option>
														<optgroup label="Color Codes">
															<option value="amber">Amber Alert</option>
															<option value="blue">Blue</option>
															<option value="grey">Grey</option>
															<option value="orange">Orange</option>
															<option value="pink">Pink</option>
															<option value="red">Red</option>
															<option value="silver">Silver</option>
														</optgroup>

														<optgroup label="Other Codes">
															<option value="clear">Code Clear</option>
															<option value="external">External Triage</option>
															<option value="internal">Internal Triage</option>
															<option value="rapid">Rapid Response Team</option>
														</optgroup>
													</select>
												</div>
											</div>

											<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
												<div class="d-flex">
													<div>Assign Ward & Bed Number</div>

													<div class="ml-auto">
														<button class="btn btn-primary btn-sm" data-toggle="modal" onclick="getBed()" data-target="#m_select_patient_bed" type="button"><i class="fas fa-plus"></i></button>
														<button class="btn btn-danger btn-sm d-none" data-toggle="modal" id="removeBed" onclick="removeBed()" type="button"><i class="fas fa-times"></i></button>
													</div>

													<input type="hidden" name="bed_no" value="n/a">
												</div>

												<div class="form-group">
													<p id="bed_desc">No Bed Assignment</p>
												</div>
											</div>

										</div>
									</div>

									<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

										<hr>

										<h6><strong>Personal Information</strong></h6>

										<div class="row">

											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
												<div class="form-group">
													<input type="text" class="form-control" name="lname" placeholder="Last Name">
												</div>
											</div>

											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
												<div class="form-group">
													<input type="text" class="form-control" name="fname" placeholder="First Name">
												</div>
											</div>

											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
												<div class="form-group">
													<input type="text" class="form-control" name="mname" placeholder="Middle Name">
												</div>
											</div>

										</div>

									</div>

									<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
										<div class="form-group">
											<label>Date of Birth</label>
											<input type="date" class="form-control" name="bdate">
										</div>
									</div>

									<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
										<label>Sex</label>
										<div class="row">

											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="sex" id="sex1" value="male" checked>
													<label class="form-check-label" for="sex1">
														Male
													</label>
												</div>
											</div>

											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="sex" id="sex2" value="female" checked>
													<label class="form-check-label" for="sex2">
														Female
													</label>
												</div>
											</div>

										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<label>Address</label>
											<textarea class="form-control" name="address"></textarea>
										</div>
									</div>

								</div>
							</div>

						</form>
					</div>

					<div id="step-2" class="">
						<form id="form_two">
							<div class="col-lg-12 mt-4 mb-4">

								<h3 class="border-bottom border-gray pb-2">Triage Assessment</h3>

								<div class="row">

									<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
										<div class="form-group">
											<label>Patient Name</label>
											<input type="text" class="form-control" name="pname" readonly>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
										<div class="form-group">
											<label>Assessment Date</label>
											<input type="text" class="form-control" name="adate" value="<?php echo date("F d, Y h:i A")?>" readonly>
										</div>
									</div>

								</div>

								<hr>

								<div class="row">

									<div class="col-lg-12">
										<h6><strong>Vital Signs</strong></h6>
									</div>

									<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
										<div class="form-group">
											<label>Blood Pressure</label>
											<input type="text" class="form-control" name="bpressure">
										</div>
									</div>

									<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
										<div class="form-group">
											<label>Breathing</label>
											<input type="text" class="form-control" name="breathing">
										</div>
									</div>

									<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
										<div class="form-group">
											<label>Pulse</label>
											<input type="text" class="form-control" name="pulse">
										</div>
									</div>

									<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
										<div class="form-group">
											<label>Temperature</label>
											<input type="text" class="form-control" name="temperature">
										</div>
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
										<div class="row">

											<div class="col-lg-12">
												<h6><strong>Allergies</strong></h6>
											</div>

											<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
												<div class="form-check">
													<input type="radio" class="form-check-input" name="allergies" id="a_none" value="no" checked>
													<label class="form-check-label" for="a_none">No</label>
												</div>

												<div class="form-check">
													<input type="radio" class="form-check-input" name="allergies" value="yes" id="a_yes">
													<label class="form-check-label" for="a_yes">Yes</label>
												</div>
											</div>

											<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
												<div class="form-group">
													<label class="form-check-label" for="a_content">Name</label>
													<textarea class="form-control" name="a_name"></textarea>
												</div>
											</div>

										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
										<div class="row">

											<div class="col-lg-12">
												<h6><strong>Medication</strong></h6>
											</div>

											<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
												<div class="form-check">
													<input type="radio" class="form-check-input" name="medication" value="no" id="m_none" checked>
													<label class="form-check-label" for="m_none">No</label>
												</div>

												<div class="form-check">
													<input type="radio" class="form-check-input" name="medication" value="yes" id="m_yes">
													<label class="form-check-label" for="m_yes">Yes</label>
												</div>
											</div>

											<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
												<div class="form-group">
													<label class="form-check-label" for="m_content">Name</label>
													<textarea class="form-control" name="m_name"></textarea>
												</div>
											</div>

										</div>
									</div>
								</div>

							</div>
						</form>
					</div>

					<div id="step-3" class="">
						<form id="form_three">

							<div class="col-lg-12 mt-4 mb-4">
								<h3 class="border-bottom border-gray pb-2">Symptoms</h3>

								<div class="row mt-2 mb-2">
									<div class="col-lg-10 col-md-10 col-xs-10 col-sm-10">
										<div class="form-group">
											<select name='symptom' class="select2" style="width: 100%;">
												<option disabled selected value>Please select a symptom</option>
												<?php
												foreach ($db->getSymptoms() as $symptom) { ?>
													<option value="<?php echo $symptom->symptom_id ?>"><?php echo $symptom->name ?></option>
												<?php }
												?>
											</select>
										</div>
									</div>

									<div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">
										<div class="form-group">
											<button id="btn_add_symptoms" class="btn btn-primary btn-sm btn-block" type="button">Add</button>
										</div>
									</div>
								</div>
								<div id="question" class="row">

								</div>
							</div>
						</form>
					</div>

					<div id="step-4" class="">

						<form id="form_four">
							<div class="col-lg-12 mt-4 mb-4">

								<h3 class="border-bottom border-gray pb-2">Diagnostic Tests</h3>

								<div class="row">
									<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

										<!-- <h6>Recommended Tests</h6> -->

										<table class="table hover">
											<thead>
												<tr>
													<th width="5%"></th>
													<th width="75%">Name</th>
													<th width="25%">Actions</th>
												</tr>
											</thead>

											<tbody>

												<?php
												foreach ($db->getTests() as $test) { ?>
													<tr>
														<td><input type="checkbox" name="test[]" value="<?php echo $test->test_id ?>"></td>
														<td><?php echo $test->name?></td>
														<td>
															<button class="btn btn-primary btn-sm" data-target='m_details' onclick="open_modal(this)" value="<?php echo $test->test_id ?>" type="button">Details</button>
														</td>
													</tr>
												<?php }
												?>
											</tbody>

										</table>

									</div>
								</div>

							</div>
						</form>
					</div>

					<div id="step-5" class="">

						<form id="form_five">
							<div class="col-lg-12 mt-4 mb-4">

								<h3 class="border-bottom border-gray pb-2">Results</h3>

								<div class="row">
									<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
										<table class="table hover responsive" id="tlab_test">
											<thead>
												<tr>
													<th width="40%">Name</th>
													<th>Status</th>
													<th>Date & Time Completed</th>
													<th>Actions</th>
												</tr>
											</thead>

											<tbody>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</form>
					</div>

					<div id="step-6" class="">
						<form id="form_six">
							<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding: 10px;">

								<div class="row mb-4">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="d-flex">
											<div><img src="assets/img/icons/pharmacy.svg" style="height: 50px;"></div>

											<div class="ml-3">
												<h6><strong><span style="font-size: 25px;">ALPAX</span><br> Hospital and Medical Center</strong></h6>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align: right;font-size: 10px;">
										Unit 2B, Sancor Building, General Malvar St.,<br>Brgy. San Vicente, Biñan, Laguna
										<br>Tel. No: (049) 854-5754
										<br>Mobile No: (+63) 925-102-1024
									</div>
								</div>

								<hr style="margin-top: -5px;">

								<!-- Patient Information -->
								<div class="row mb-4" style="font-size: 12px;">
									<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
												<label class="billing-patient-details">Patient Name</label>
												<p class="font-weight-bold">Cuevas, Mark Dherrick P.</p>

												<label class="billing-patient-details">Address</label>
												<p class="font-weight-bold">Block 2 Lot 2, BSRV-1, Brgy. Pooc, City of Santa Rosa, Laguna </p>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6" style="text-align: right">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

												<div class="row justify-content-end">
													<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
														<label class="billing-patient-details">Assessment Date</label>
														<p class="font-weight-bold">September 9, 2018 - 10:09 AM</p>
													</div>

													<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4" style="display: none;">
														<label class="billing-patient-details">Admission Date</label>
														<p class="font-weight-bold">September 9, 2018 - 10:09 AM</p>
													</div>

													<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4" style="display: none;">
														<label class="billing-patient-details">Discharge Date</label>
														<p class="font-weight-bold">September 12, 2018 - 04:27 PM</p>
													</div>
												</div>

												<div class="row">
													<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
														<label class="billing-patient-details">Ward No.</label>
														<p class="font-weight-bold" id="bill_ward_no">102</p>
													</div>

													<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
														<label class="billing-patient-details">Bed No.</label>
														<p class="font-weight-bold" id="bill_bed_no">23</p>
													</div>
												</div>
												
											</div>
										</div>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4"><hr>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
												<label class="billing-patient-details">Mode of Payment</label>
												<p class="font-weight-bold">Cash</p>
											</div>
										</div>

										<div class="row"><hr>
											<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
												<table id="billing_table" class="hover table-striped table-bordered" style="width: 100%">
													<thead>
														<tr>
															<th>Particulars</th>
															<th>Rate</th>
															<th>Discount</th>
															<th>Amount</th>
														</tr>
													</thead>
												</table>
											</div>
										</div>
									</div>

									<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-4" style="font-size: 12px;"><hr>
										<div class="row">
											<div class="col-lg-8 col-md-8 col-xs-8 col-sm-8">
											</div>

											<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
												<div class="d-flex">

													<div>
														<p class="billing-patient-details font-weight-bold">Subtotal</p>
														<p class="billing-patient-details font-weight-bold">Tax Rate</p>
														<p class="billing-patient-details font-weight-bold">Tax</p>
														<p class="billing-patient-details font-weight-bold">Med Claim</p>
														<p class="billing-patient-details font-weight-bold">Payments Made</p>
														<p class="billing-patient-details font-weight-bold">Total Bill</p>
													</div>

													<div class="ml-auto" style="text-align: right">
														<p class="billing-patient-details font-weight-bold">0.00</p>
														<p class="billing-patient-details font-weight-bold">0.00</p>
														<p class="billing-patient-details font-weight-bold">0.00</p>
														<p class="billing-patient-details font-weight-bold">0.00</p>
														<p class="billing-patient-details font-weight-bold">0.00</p>
														<p class="billing-patient-details font-weight-bold">0.00</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Patient Information -->

							</div>
						</form>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
<?php include('assets/parts/scripts.php'); ?>
<?php include('assets/modals/m_details.php'); ?>
<?php include('assets/modals/m_test_result.php'); ?>
<?php include('assets/modals/m_select_patient_bed.php'); ?>

<script type="text/javascript">

	$(document).ready(function(){

		$(".table").DataTable({
			responsive: true
		});

		$('#billing_table').DataTable({
			"paging":   false,
			"ordering": false,
			"info":     false,
			"searching":false,
			responsive: true,
			"language": {
				"emptyTable": "Empty"
			}
		});

		$(".select2").select2();

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");
               console.log(stepNumber);
               if(stepPosition === 'first'){
               	$("#prev-btn").addClass('disabled');
               }else if(stepPosition === 'final'){
               	$("#next-btn").addClass('disabled');
               }
               if(stepNumber == 4){
               		//disable all form in step 1-4
               	}
               	else{
               		$(".sw-btn-prev").removeClass('d-none');
               		$("#prev-btn").removeClass('disabled');
               		$("#next-btn").removeClass('disabled');
               	}
               });

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
            .addClass('btn btn-info')
            .on('click', function(){ alert('Finish Clicked'); });
            var btnCancel = $('<button></button>').text('Cancel')
            .addClass('btn btn-danger')
            .on('click', function(){ $('#smartwizard').smartWizard("reset"); });


            // Smart Wizard
            $('#smartwizard').smartWizard({
            	selected: 0,
            	theme: 'circles',
            	transitionEffect:'fade',
            	showStepURLhash: true,
            	toolbarSettings: 
            	{
            		toolbarPosition: 'both',
            		toolbarButtonPosition: 'end',
            		toolbarExtraButtons: [btnFinish, btnCancel]
            	}
            });
        });
	$("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
		if(stepNumber == 3 && stepDirection =='forward'){
			var r = confirm("Are you sure to proceed? \nNote: After this step you can't revert or undo the information entered.");
			if (r == true) {
				//insert
				return  insert();
			} 
			else {
				return false;
			}
		}
		else if(stepNumber == 0){
			var fname = $("input[name='fname']").val();
			var mname = $("input[name='mname']").val();
			var lname = $("input[name='lname']").val();
			$("input[name='pname']").val(lname+", "+fname+" "+mname);
		}
	});
	function insert(){
		var form_one = $('#form_one').serializeArray();
		var form_two = $('#form_two').serializeArray();
		var form_three = $('#form_three').serializeArray();
		var form_four = $('#form_four').serializeArray();
		var form_one = $.merge(form_one,form_two);
		var form_two = $.merge(form_three,form_four);
		var form_data = $.merge(form_one,form_two);
		form_data[form_data.length] = { name: "id", value: 4 };
		$.ajax({
			url:"assets/includes/class_handler.php",
			type: "POST",
			data: form_data,
			success: function(data){
				var data = JSON.parse(data);
				if(data[0] == true){
					var test_id = data[1];
					$.ajax({
						url:"assets/includes/class_handler.php",
						type:"POST",
						data:{id:5,test_id:test_id},
						success: function(data1){
							var data1 = JSON.parse(data1);
							var t = $('#tlab_test').DataTable();
							var button ='';
							t.clear().draw();
							data1.forEach(function(d){
								button = "<button class='btn btn-primary btn-sm' data-target='m_test_result' data-type ='"+d[4]+"' onclick='open_modal(this)' type='button' value='"+d[0]+"'><i class='fas fa-eye'></i></button>";
								t.row.add([d[1],d[2],d[3],button]).draw(false);
							});
							console.log(data1);
						}
					});
				}
			}
		});
	}
	$("select[name='emergency_code']").on("change", function(){
		var a = $(this).find("option:selected").val();
		$('#step-1').removeClass();
		$("#code_status").removeClass();

		if (a == "amber") {
			$('#code_status').html('Amber Alert');
			$("#code_status").addClass('text-warning-300');
			$('#step-1').addClass('border border-warning');
		}

		if (a == "blue"){
			$('#code_status').html('Blue');
			$("#code_status").addClass('text-primary');
			$('#step-1').addClass('border border-primary');
		}

		if (a == "external"){
			$('#code_status').html('External Triage');
		}

		if (a == "grey"){
			$('#code_status').html('Grey');
			$("#code_status").addClass('text-grey');
			$('#step-1').addClass('border border-grey-200');
		}

		if (a == "internal"){
			$('#code_status').html('Internal Triage');
		}

		if (a == "orange"){
			$('#code_status').html('Orange');
			$("#code_status").addClass('text-orange-700');
			$('#step-1').addClass('border border-orange-700');
		}

		if (a == "pink"){
			$('#code_status').html('Pink');
			$("#code_status").addClass('text-pink');
			$('#step-1').addClass('border border-pink');
		}

		if (a == "rapid"){
			$('#code_status').html('Rapid Response Team');
		}

		if (a == "red"){
			$('#code_status').html('Red');
			$("#code_status").addClass('text-danger');
			$('#step-1').addClass('border border-danger');
		}

		if (a == "silver"){
			$('#code_status').html('Silver');
			$("#code_status").addClass('text-slate-800');
			$('#step-1').addClass('border border-slate-800');
		}

		if (a == "clear"){
			$('#code_status').html('Clear');
			$("#code_status").addClass('text-green');
			$('#step-1').addClass('border border-green');
		}

	});
	$("input[name='pain_range']").on("change", function(){
		var x = $(this).val();

		$('#pain_value').html( $(this).val() );
	});
	$("#btn_add_symptoms").on('click',function(){
		var symptom_id = $("select[name='symptom']").val();
		$.ajax({
			url:"assets/includes/class_handler.php",
			type: "POST",
			data: {id: 1,symptom_id :symptom_id },
			success: function(data){
				$("#question").append(data);
			}
		});
	});
	function open_modal(object){
		var val = $(object).val();
		var type = null;
		var id;
		var modal = $(object).data('target');  
		if(modal == 'm_test_result'){
			id = 6;
			type = $(object).data('type');
		}
		else if(modal =='m_details'){
			id = 2;
		}
		console.log(modal);
		$.ajax({
			url:"assets/includes/class_handler.php",
			type: "POST",
			data: {id:id, test_id : val,type:type },
			success: function(data){
				var data = JSON.parse(data);
				console.log(data);
				if(modal == 'm_test_result'){
					var fname = $("input[name='fname']").val();
					var mname = $("input[name='mname']").val();
					var lname = $("input[name='lname']").val();
					$("#patient_name").text(lname+", "+fname+" "+mname);
					if(type == "Fecalysis"){
						$("#test_title").html("Fecalysis");
						$("input[name='labtest_id']").val(val);
						$("input[name='test_type']").val(type);
						$("#test_body").html(data[0]);
						$("#test_interpretation").val(data[1]);
					}
				}
				else if(modal =='m_details'){
					$("#d_name").text(data[0]);
					$("#d_description").text(data[1]);
				}
				$('#'+modal).modal('show');
			}
		});
	}

	function rateChange(id,val){
		$('#'+id).html(val);
	}
	function getBed(){
		$.ajax({
			url:"assets/includes/class_handler.php",
			type: "POST",
			data: {id:3},
			success: function(data){
				var data = JSON.parse(data);
				var t = $('#bed_table').DataTable();
				t.clear().draw();
				data.forEach(function(d){
					var status ='';
					var button ='';
					if(d[3] == 'Vacant'){
						status = '<h6 class="font-weight-bold text-success">'+d[3]+'</h6>';
						button = '<button class="btn btn-primary btn-sm" onclick="selectBed(this.value)" value="'+d+'">Select</button>';
					}
					else if(d[3]== 'Occupied'){
						status = '<h6 class="font-weight-bold text-danger">'+d[3]+'</h6>';
						button = '<button class="btn btn-secondary btn-sm" disabled>Select</button>';
					}
					t.row.add([d[0],d[1],d[2],status,button]).draw(false);
				});
			}
		});
	}
	function selectBed(data){
		var data = data.split(",");
			//data[0] = bed no, data[1] = ward no, data[2] = floor, data[3] = status
			$("input[name='bed_no'").val(data[0]);
			$("#bed_desc").html("Bed No: "+data[0]+"<br/>Ward No: "+data[1]+"<br/>Floor: "+data[2]);
			$("#bill_bed_no").text(data[0]);
			$("#bill_ward_no").text(data[1]);
			$("#m_select_patient_bed").modal('hide');
			$("#removeBed").removeClass('d-none');
		}
		function removeBed(){
			$("input[name='bed_no'").val('n/a');
			$("#removeBed").addClass('d-none');
			$("#bed_desc").html("No Bed Assignment");
			$("#bill_bed_no").text("");
			$("#bill_ward_no").text("");
		}
		$("#test_submit").on("click", function(){
			var test_value = [];
			$("input[name='test_value[]']").each(function(){
				test_value.push($(this).val());
			});
			var interpretation = $("textarea[name='interpretation']").val();
			var labtest_id = $("input[name='labtest_id']").val();
			var type = $("input[name='test_type']").val();
			test_value.push(interpretation,labtest_id,type);
			$.ajax({
				url:"assets/includes/class_handler.php",
				type: "POST",
				data: {id:7, test_value : test_value },
				success: function(data){
					console.log(data);
				}
			});
		});
	</script>

	</html>