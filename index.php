<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Hospital</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/color.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/smart_wizard.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/smart_wizard_theme_arrows.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/smart_wizard_theme_circles.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/smart_wizard_theme_dots.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/jasny-bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css">

	<style>
	@import url('https://fonts.googleapis.com/css?family=Raleway');
	@import url('https://fonts.googleapis.com/css?family=Poppins');

	h1, h2, h3, h4, h5, h6{
		font-family: 'Poppins'
	}

	body{
		font-family: 'Raleway';
		font-size: 15px;
	}

	.slider {
		-webkit-appearance: none;
		width: 100%;
		height: 25px;
		background: #d3d3d3;
		outline: none;
		opacity: 0.7;
		-webkit-transition: .2s;
		transition: opacity .2s;
	}

	.slider:hover {
		opacity: 1;
	}

	.slider::-webkit-slider-thumb {
		-webkit-appearance: none;
		appearance: none;
		width: 25px;
		height: 25px;
		background: #4CAF50;
		cursor: pointer;
	}

	.slider::-moz-range-thumb {
		width: 25px;
		height: 25px;
		background: #4CAF50;
		cursor: pointer;
	}

	.sw-toolbar-bottom{
		display: none;
	}
	
</style>
</head>

<body>

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

					<div>
						<div id="step-1" class="">

							<div class="col-lg-12 mt-4 mb-4">

								<div class="d-flex">
									<div>
										<h3>Patient Registration</h3>
									</div>

									<div class="ml-auto">

									</div>
									<hr>
								</div>


								<div class="row">

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
													<input class="form-check-input" type="radio" name="sex" id="sex1" value="option1" checked>
													<label class="form-check-label" for="exampleRadios1">
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
														<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_test_result">View</button>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>

						</div>

						<!-- <div id="step-3" class="">

							<div class="col-lg-12">

								<h3 class="border-bottom border-gray pb-2">Diagnostic Tests</h3>

								<div class="row">

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<div class="form-group">
											<label>Lab Test</label>
											<select class="select2" style="width: 100%;"></select>
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<div class="form-group">
											<label>Price</label>
											<input type="text" class="form-control" id="price"  data-mask="999-99-999-9999-9">
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<div class="form-group">
										</div>
									</div>

								</div>
							</div>

						</div> -->

					</div>
				</div>

			</div>
		</div>

	</body>

	<?php include('assets/modals/m_test_result.php'); ?>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/validator.min.js"></script>
	<script type="text/javascript" src="assets/js/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/pdfmake.min.js"></script>
	<script type="text/javascript" src="assets/js/vfs_fonts.js"></script>
	<script type="text/javascript" src="assets/js/datatables.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			$(".table").DataTable({
				responsive: true
			});

			$(".select2").select2();

			$('#price').inputmask({
				mask: '999-99-999-9999-9'
			})

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

            $("#theme_selector").on("change", function() {
                // Change theme
                $('#smartwizard').smartWizard("theme", $(this).val());
                return true;
            });

            // Set selected theme on page refresh
            $("#theme_selector").change();
        });

		$("input[name='pain_range']").on("change", function(){
			var x = $(this).val();

			$('#pain_value').html( $(this).val() );
		});
	</script>

	</html>