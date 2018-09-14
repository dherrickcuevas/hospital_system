<?php include('assets/parts/header.php'); ?>

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
												<h6><strong><span id="patient_no">PT-0000000001</span></strong></h6>
											</div>
										</div>

										<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
											<div class="form-group">
												<label>Emergency Code</label>
												<select name="emergency_code" class="select2" style="width: 100%;">
													<option disabled value selected>Select Emergency Code</option>
													<optgroup label="Color Codes">
														<option value="1">Amber Alert</option>
														<option value="2">Blue</option>
														<option value="4">Grey</option>
														<option value="6">Orange</option>
														<option value="7">Pink</option>
														<option value="9">Red</option>
														<option value="10">Silver</option>
													</optgroup>

													<optgroup label="Other Codes">
														<option value="11">Code Clear</option>
														<option value="3">External Triage</option>
														<option value="5">Internal Triage</option>
														<option value="8">Rapid Response Team</option>
													</optgroup>
												</select>
											</div>
										</div>

										<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
											<div class="d-flex">
												<div>Assign Ward & Bed Number</div>

												<div class="ml-auto">
													<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_select_patient_bed"><i class="fas fa-plus"></i></button>
												</div>
											</div>

											<div class="form-group">
												<p>No Bed Assignment Yet</p>
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
												<input type="text" class="form-control" name="" placeholder="Last Name">
											</div>
										</div>

										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<div class="form-group">
												<input type="text" class="form-control" name="" placeholder="First Name">
											</div>
										</div>

										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<div class="form-group">
												<input type="text" class="form-control" name="" placeholder="Middle Name">
											</div>
										</div>

									</div>

								</div>

								<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
									<div class="form-group">
										<label>Date of Birth</label>
										<input type="date" class="form-control" name="">
									</div>
								</div>

								<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
									<label>Sex</label>
									<div class="row">

										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="sex" id="sex1" value="option1" checked>
												<label class="form-check-label" for="sex1">
													Male
												</label>
											</div>
										</div>

										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="sex" id="sex2" value="option1" checked>
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
										<textarea class="form-control"></textarea>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div id="step-2" class="">

						<div class="col-lg-12 mt-4 mb-4">

							<h3 class="border-bottom border-gray pb-2">Triage Assessment</h3>

							<div class="row">

								<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
									<div class="form-group">
										<label>Patient Name</label>
										<input type="text" class="form-control" name="">
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
									<div class="form-group">
										<label>Assessment Date</label>
										<input type="date" class="form-control" name="">
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
										<input type="text" class="form-control" name="">
									</div>
								</div>

								<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
									<div class="form-group">
										<label>Breathing</label>
										<input type="text" class="form-control" name="">
									</div>
								</div>

								<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
									<div class="form-group">
										<label>Pulse</label>
										<input type="text" class="form-control" name="">
									</div>
								</div>

								<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
									<div class="form-group">
										<label>Temperature</label>
										<input type="text" class="form-control" name="">
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
												<input type="radio" class="form-check-input" name="allergies" id="a_none" checked>
												<label class="form-check-label" for="a_none">No</label>
											</div>

											<div class="form-check">
												<input type="radio" class="form-check-input" name="allergies" id="a_yes">
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
												<input type="radio" class="form-check-input" name="medication" id="m_none" checked>
												<label class="form-check-label" for="m_none">No</label>
											</div>

											<div class="form-check">
												<input type="radio" class="form-check-input" name="medication" id="m_yes">
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
					</div>

					<div id="step-3" class="">

						<div class="col-lg-12 mt-4 mb-4">
							<h3 class="border-bottom border-gray pb-2">Symptoms</h3>

							<div class="row mt-2 mb-2">
								<div class="col-lg-10 col-md-10 col-xs-10 col-sm-10">
									<div class="form-group">
										<select class="select2" style="width: 100%;">
											<option disabled selected value>Please select a symptom</option>
											<option value="1">Abdominal Pain</option>
											<option value="2">Constipation</option>
											<option value="3">Infection</option>
										</select>
									</div>
								</div>

								<div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">
									<div class="form-group">
										<button id="btn_add_symptoms" class="btn btn-primary btn-sm btn-block">Add</button>
									</div>
								</div>
							</div>

							<div class="row">

								<div id="abdominal_pain" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

									<h6>Abdominal Pain</h6><hr>

									<div class="form-group">
										<div class="d-flex">
											<div><label>Rate the pain</label></div>

											<div class="ml-auto"><span id="pain_value" class="text-warning" style="font-size: 15px;">0</span></div>
										</div>

										<input type="range" class="slider" name="pain_range" style="width: 100%" min="1" max="10" value="0">

										<div class="d-flex">
											<div>
												1
											</div>
											<div class="ml-auto">
												10
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Last Meal</label>
										<textarea class="form-control"></textarea>
									</div>

									<div class="form-group">
										<label>Vomitting / Nauseous</label>
										<div class="row">

											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="vomit" id="v_y" value="yes">
													<label class="form-check-label" for="v_y">
														Yes
													</label>
												</div>
											</div>

											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="vomit" id="v_n" value="no" checked>
													<label class="form-check-label" for="v_n">
														No
													</label>
												</div>
											</div>
										</div>

									</div>

									<div class="form-group">
										<label>Acidic</label>

										<div class="row">

											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="acidic" id="a_y" value="yes">
													<label class="form-check-label" for="a_y">
														Yes
													</label>
												</div>
											</div>

											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="acidic" id="a_n" value="no" checked>
													<label class="form-check-label" for="a_n">
														No
													</label>
												</div>
											</div>
										</div>
									</div>

									<hr>

								</div>

							</div>

						</div>
					</div>

					<div id="step-4" class="">

						<div class="col-lg-12 mt-4 mb-4">

							<h3 class="border-bottom border-gray pb-2">Diagnostic Tests</h3>

							<div class="row">
								<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

									<h6>Recommended Tests</h6>

									<table class="table hover">
										<thead>
											<tr>
												<th width="5%"></th>
												<th width="75%">Name</th>
												<th width="25%">Actions</th>
											</tr>
										</thead>

										<tbody>

											<tr>
												<td><input type="checkbox" name=""></td>
												<td>Magnetic Resonance Imaging</td>
												<td>
													<button class="btn btn-primary btn-sm">Details</button>
												</td>
											</tr>

											<tr>
												<td><input type="checkbox" name=""></td>
												<td>Fecalysis</td>
												<td>
													<button class="btn btn-primary btn-sm">Details</button>
												</td>
											</tr>

											<tr>
												<td><input type="checkbox" name=""></td>
												<td>Complete Blood Count</td>
												<td>
													<button class="btn btn-primary btn-sm">Details</button>
												</td>
											</tr>

											<tr>
												<td><input type="checkbox" name=""></td>
												<td>Ultrasound</td>
												<td>
													<button class="btn btn-primary btn-sm">Details</button>
												</td>
											</tr>

											<tr>
												<td><input type="checkbox" name=""></td>
												<td>Endoscopy</td>
												<td>
													<button class="btn btn-primary btn-sm">Details</button>
												</td>
											</tr>

											<tr>
												<td><input type="checkbox" name=""></td>
												<td>Colonoscopy</td>
												<td>
													<button class="btn btn-primary btn-sm">Details</button>
												</td>
											</tr>
										</tbody>

									</table>

								</div>
							</div>

						</div>
					</div>

					<div id="step-5" class="">

						<div class="col-lg-12 mt-4 mb-4">

							<h3 class="border-bottom border-gray pb-2">Results</h3>

							<div class="row">
								<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
									<table class="table hover responsive">
										<thead>
											<tr>
												<th width="40%">Name</th>
												<th>Status</th>
												<th>Date & Time Completed</th>
												<th>Actions</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>Fecalysis</td>
												<td>
													<span class="text-green font-weight-bold">DONE</span>
													<span class="text-blue font-weight-bold">ONGOING</span>
												</td>
												<td>September 11, 2018 - 11:49 AM</td>
												<td>
													<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_test_result"><i class="far fa-eye"></i></button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div id="step-6" class="">

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

											<div class="row">
												<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
													<label class="billing-patient-details">Admission Date</label>
													<p class="font-weight-bold">September 9, 2018 - 10:09 AM</p>
												</div>

												<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
													<label class="billing-patient-details">Discharge Date</label>
													<p class="font-weight-bold">September 12, 2018 - 04:27 PM</p>
												</div>
											</div>

											<div class="row">
												<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
													<label class="billing-patient-details">Ward No.</label>
													<p class="font-weight-bold">102</p>
												</div>

												<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
													<label class="billing-patient-details">Bed No.</label>
													<p class="font-weight-bold">23</p>
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

					</div>

				</div>
			</div>

		</div>
	</div>

	<?php include('assets/parts/scripts.php'); ?>

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
               if(stepPosition === 'first'){
               	$("#prev-btn").addClass('disabled');
               }else if(stepPosition === 'final'){
               	$("#next-btn").addClass('disabled');
               }else{
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
            	toolbarSettings: {toolbarPosition: 'both',
            	toolbarButtonPosition: 'end',
            	toolbarExtraButtons: [btnFinish, btnCancel]
            }
        });

        });

		$("select[name='emergency_code']").on("change", function(){
			var a = $(this).find("option:selected").val();
			$('#step-1').removeClass();
			$("#code_status").removeClass();

			if (a == 1) {
				$('#code_status').html('Amber Alert');
				$("#code_status").addClass('text-warning-300');
				$('#step-1').addClass('border border-warning');
			}

			if (a == 2){
				$('#code_status').html('Blue');
				$("#code_status").addClass('text-primary');
				$('#step-1').addClass('border border-primary');
			}

			if (a == 3){
				$('#code_status').html('External Triage');
			}

			if (a == 4){
				$('#code_status').html('Grey');
				$("#code_status").addClass('text-grey');
				$('#step-1').addClass('border border-grey-200');
			}

			if (a == 5){
				$('#code_status').html('Internal Triage');
			}

			if (a == 6){
				$('#code_status').html('Orange');
				$("#code_status").addClass('text-orange-700');
				$('#step-1').addClass('border border-orange-700');
			}

			if (a == 7){
				$('#code_status').html('Pink');
				$("#code_status").addClass('text-pink');
				$('#step-1').addClass('border border-pink');
			}

			if (a == 8){
				$('#code_status').html('Rapid Response Team');
			}

			if (a == 9){
				$('#code_status').html('Red');
				$("#code_status").addClass('text-danger');
				$('#step-1').addClass('border border-danger');
			}

			if (a == 10){
				$('#code_status').html('Silver');
				$("#code_status").addClass('text-slate-800');
				$('#step-1').addClass('border border-slate-800');
			}

			if (a == 11){
				$('#code_status').html('Clear');
				$("#code_status").addClass('text-green');
				$('#step-1').addClass('border border-green');
			}

		});

		$("input[name='pain_range']").on("change", function(){
			var x = $(this).val();

			$('#pain_value').html( $(this).val() );
		});
	</script>

	</html>