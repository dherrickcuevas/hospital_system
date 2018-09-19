<?php

session_start();

if (!empty($_SESSION)) {
	if ($_SESSION['role_id'] == "4") {
		echo '<script>window.location.href="doctor_dashboard.php"</script>';
	}

	if ($_SESSION['role_id'] == "5") {
		echo '<script>window.location.href="patient_dashboard.php"</script>';
	}
}

else{

}
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ALPAX Hospital & Medical Center</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/color.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/smart_wizard.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/smart_wizard_theme_arrows.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/smart_wizard_theme_circles.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/smart_wizard_theme_dots.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/jasny-bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<style>
	@import url('https://fonts.googleapis.com/css?family=Raleway');
	@import url('https://fonts.googleapis.com/css?family=Poppins');

	h1, h2, h3, h4, h5, h6{
		font-family: 'Poppins'
	}

	body{
		font-family: 'Raleway';
		font-size: 13px;
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

	.billing-patient-details{
		margin-bottom: 0;
	}

	p{
		margin-bottom: 0.5rem;
	}
	
</style>
</head>

<body>

	<link rel="stylesheet" type="text/css" href="assets/css/login_style.css">

	<style type="text/css">
	.form-control{
		height: calc(2.75rem + 2px);
	}
</style>

<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-4 mb-4">
	<div class="form-signin mt-4 bg-white">
		<div class="text-center mb-4">
			<img class="mb-4" src="assets/img/icons/pharmacy.svg" alt="" width="72" height="72">
			<h1 class="h3 mb-1 font-weight-bold">ALPAX</h1>
			<h6>Hospital & Medical Center</h6>
			<hr>
			<p id="login_text" class="text-warning font-weight-bold">
				
				<?php

				if (isset($_GET['err'])) {
					$err = $_GET['err'];
					switch ($err) {
						case '0':
						echo "Incorrect parameters passed.";
						break;

						case '1':
						echo "Incorrect credentials. Please try again.";
						break;
						
						default:
						echo "Unknown error. Please try again.";
						break;
					}
				}

				?>
			</p>
			<div id="loader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
		</div>

		<form id="login_form" method="POST" action="assets/includes/users_handler.php">
			<div class="form-label-group">
				<input type="email" id="email" class="form-control" placeholder="Email address" required autofocus name="email">
				<label for="email" class="font-weight-bold" autofocus>Email Address</label>
			</div>

			<div class="form-label-group">
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
				<label for="inputPassword" class="font-weight-bold">Password</label>
			</div>

			<button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
		</form>

		<hr>
		<p class="mt-5 mb-3 text-muted text-center">&copy; 2018 - ALPAX Software Solutions</p>
	</div>
</div>

<?php include('assets/parts/scripts.php'); ?>

<script type="text/javascript">
	$("#loader").hide();

	$("#login_form").on("submit", function(e){

		$("#login_text").html();
		var form_data = $(this).serializeArray();

		setTimeout(function(){
			/*$("input[name='email_address']").prop("disabled", true);
			$("input[name='password']").prop("disabled", true);*/
			$("#login_form").animateCss("fadeOut", function(){
				$("#login_form").hide();
				$("#loader").show();
				$("#login_text").html("Please wait...");
			});
		},200);
	});
</script>