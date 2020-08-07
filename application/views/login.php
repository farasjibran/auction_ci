<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Auction</title>

	<!-- Bootstrap Style-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<!-- Font Style -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

	<!-- Style -->
	<style>
		/* Login Style */
		body {
			font-family: Roboto;
		}

		.loginacc {
			margin-right: -30%;
		}

		.imgback {
			margin-top: 27%;
			margin-left: 2%;
		}

		.inputuser {
			margin-left: -13%;
			width: 55%;
		}

		.user {
			margin-top: 30px;
			margin-bottom: 5px;
			margin-left: -13%;
		}

		.passwd {
			margin-top: 5px;
			margin-bottom: 5px;
			margin-left: -13%;
		}

		.btnsign {
			width: 55%;
			margin-left: -13%;
			margin-top: 15px;
			box-shadow: 0px 0px 3px #929292;
		}

		.cekbox {
			margin-left: -13%;
			margin-top: 20px;
		}

		.sometext {
			margin-top: 21%;
			margin-left: -3%;
		}
	</style>
</head>

<body style="overflow-x: hidden; overflow-y: hidden;">

	<div class="container">
		<div class="row">
			<div class="col loginacc">
				<!-- Logo -->
				<a href="index.php"><img class="imgback" width="150" src="<?php echo base_url('assets/image/logohitam.png') ?>"></a>

				<!-- Input User -->
				<p class="user">Username</p>
				<div class="input-group mb-3 inputuser">
					<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
				</div>

				<!-- Input Password -->
				<p class="passwd">Password</p>
				<div class="input-group mb-3 inputuser">
					<input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
				</div>

				<!-- Button -->
				<div class="btngrup">
					<button type="button" class="btn btn-primary btnsign"><b>Sign In</b></button>
				</div>

				<!-- Chechbox -->
				<div class="cekbox">
					<div class="row">
						<div class="col-sm" style="margin-right: -37%;">
							<input type="checkbox" aria-label="Checkbox for following text input"> Remember Me
						</div>
						<div class="col-sm">
							<a href="#">
								<p style="color: #0D8FFF;">Forgot Password?</p>
							</a>
						</div>
					</div>
				</div>

				<!-- Some Text -->
				<div class="sometext">
					<p>Don't Have An Account ? <span style="color: #0D8FFF;"><a href="">Join Here</a></span></p>
				</div>
			</div>

			<!-- Image Background -->
			<div class="col">
				<img width="150%" height="722" src="<?php echo base_url('assets/image/imgback.png') ?>">
			</div>
		</div>
	</div>

</body>

<!-- Bootstrap Js -->
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

</html>
