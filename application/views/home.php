<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>

	<!-- Style -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- Js -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<!-- Font Style -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

	<!-- Style -->
	<style>
		/* Home Style */
		body {
			font-family: Roboto;
		}

		.loginbtn {
			border-radius: 20px;
			width: 90%;
			margin-right: 40px;
			box-shadow: 0px 0px 3px #929292;
		}

		.navbartop {
			padding: 2%;
		}

		.brnd {
			margin-left: 20px;
		}

		.slogan {
			margin-top: 2%;
			margin-left: 16%;
		}

		.kataslogan {
			margin-top: 90px;
		}

		.btnslogan {
			width: 22%;
			border-radius: 20px;
			box-shadow: 0px 0px 3px #929292;
		}
	</style>
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbartop">
		<a class="navbar-brand brnd" href="#">
			<img src="<?php echo base_url('assets/image/logohitam.png') ?>" width="" height="30" class="d-inline-block align-top" alt="" loading="lazy">
		</a>
		<a href="<?php echo site_url('homecontroller/login') ?>"><button type="button" class="btn btn-primary loginbtn"><b>Login</b><span><img src="<?php echo base_url('assets/image/arrowright.png') ?>" width="15" height="15" style="margin-left: 10px;"></span></button></a>
	</nav>

	<!-- Container -->
	<div class="container slogan">
		<div class="row">
			<div class="col" style="margin-right: -10%;">
				<img src="<?php echo base_url('assets/image/dronefix.gif') ?>">
			</div>
			<div class="col kataslogan">
				<h1><b>Every election is a <br>
						sort of advance auction <br>
						of stolen goods.</b></h1>
				<p>We help people to sell or auction <br>
					their goods safely to many countries</p>
				<a href="<?php echo site_url('homecontroller/login') ?>"><button type="button" class="btn btn-primary btnslogan"><b>Login</b><span><img src="<?php echo base_url('assets/image/arrowright.png') ?>" width="15" height="15" style="margin-left: 10px;"></span></button></a>
			</div>
		</div>
	</div>

</body>

</html>
