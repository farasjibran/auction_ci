<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>

	<!-- Bootstrap Style-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

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

<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

</html>
