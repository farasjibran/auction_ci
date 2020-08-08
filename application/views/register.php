<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Auction</title>
	<!-- Style -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- Style / My css -->
	<link rel="stylesheet" href="asset/style/style.css">

	<!-- Style -->
	<style>
		.loginacc {
			margin-right: -30%;
		}

		.imgback {
			margin-top: 23%;
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
				<a href="<?php echo site_url('homecontroller/index') ?>"><img class="imgback" width="150" src="<?php echo base_url('assets/image/logohitam.png') ?>"></a>

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

				<!-- Input Confirm Password -->
				<p class="passwd">Confirm Password</p>
				<div class="input-group mb-3 inputuser">
					<input type="password" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon1">
				</div>

				<!-- Button -->
				<div class="btngrup">
					<button type="button" class="btn btn-primary btnsign"><b>Register</b></button>
				</div>


				<!-- Some Text -->
				<div class="sometext">
					<p>Have An Account ? <span style="color: #0D8FFF;"><a href="<?php echo site_url('homecontroller/login') ?>">Login Here</a></span></p>
				</div>
			</div>

			<!-- Image Background -->
			<div class="col">
				<img width="150%" height="722" src="<?php echo base_url('assets/image/imgback.png') ?>">
			</div>
		</div>
	</div>

</body>

</html>
