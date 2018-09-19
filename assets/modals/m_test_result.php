<!-- Modal -->
<div class="modal fade" id="m_test_result" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-fluid" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle"><span id="test_name">Laboratory Results</span></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="col-lg-12">

					<!-- Header -->
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
					<!-- Header -->

					<hr style="margin-top: -5px;">

					<!-- Patient Information -->
					<div class="row mb-4" style="font-size: 12px;">

						<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
									<h6>Name</h6>
									<span id="patient_name"></span>
								</div>

								<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
									<h6>Date of Test</h6>
									<span id="date_of_test"><?php echo date("F d, Y h:i A")?></span>
								</div>

								<!-- <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
									<h6>Requested by</h6>
									<span id="resquested_by">Dr. J. BUÑAG</span>
								</div> -->
							</div>							
						</div>
					</div>
					<!-- Patient Information -->
					<input type="hidden" name="labtest_id">
					<input type="hidden" name="test_type">
					<!-- Content -->
					<div class="row mb-4">

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

							<div class="row mb-4">

								<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">

<<<<<<< HEAD
									<h6 class="pb-2 border-bottom bottom-gray"><strong>Urinalysis</strong></h6>

									<div class="row">

										<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Color</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>

										<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Transparency</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>

										<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Hemoglobin</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>

										<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Hematocrit</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>

										<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Red Blood Cells</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>

										<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Platelet Count</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>

									</div>

								</div>

							</div>

							<div class="row mb-4">

								<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">

									<h6 class="pb-2 border-bottom bottom-gray"><strong>Fecalysis</strong></h6>

									<div class="d-flex">
										<div style="padding: 5px;">
											<h6>Color</h6>
											<h6>Consistency</h6>
											<h6>Pus</h6>
											<h6>Red Blood Cell</h6>
											<h6>Others</h6>
										</div>

										<div class="ml-auto" style="padding: 5px;">
											<h6>Yellow</h6>
											<h6>Soft</h6>
											<h6>20-25</h6>
											<h6>0-0.2</h6>
											<h6>E. Hystolitica cyst 3-5</h6>
										</div>
=======
									<h6 class="pb-2 border-bottom bottom-gray" id="test_title"><strong></strong></h6>
									<div class="row" id="test_body">
										
>>>>>>> e9900e351353faf285bb28c90a4cfecc973f8999
									</div>
								</div>

							</div>

							<div class="row mb-4">

								<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

									<h6 class="pb-2 border-bottom bottom-gray"><strong>Interpretation</strong></h6>

									<div class="form-group" id="test_interpretation">
										<textarea class="form-control" name="interpretation"></textarea>
									</div>

								</div>

							</div>

						</div>

					</div>
					<!-- Content -->

				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="test_submit">Submit</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>