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
		/* Login Style */
		body {
			font-family: Roboto;
		}

		.loginacc {
			margin-right: -30%;
			margin-top: -2%;
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

		.drpdw {
			margin-left: -13%;
			width: 20%;
		}
	</style>
</head>

<body style="overflow-x: hidden; overflow-y: hidden;">

	<div class="container">
		<div class="row">
			<div class="col loginacc">
				<!-- Logo -->
				<a href="<?php echo site_url('homecontroller/index') ?>"><img class="imgback" width="150" src="<?php echo base_url('assets/image/logohitam.png') ?>"></a>

				<!-- Form Input Register -->
				<form action="<?php echo site_url('homecontroller/registerUser') ?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
					<!-- Input User -->
					<p class="user">Username</p>
					<div class="input-group mb-3 inputuser">
						<input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
						<div class="invalid-feedback">Please enter a valid username.</div>
					</div>

					<!-- Input Password -->
					<p class="passwd">Password</p>
					<div class="input-group mb-3 inputuser">
						<input name="password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
						<div class="invalid-feedback">Please enter a valid password.</div>
					</div>

					<!-- Input Confirm Password -->
					<p class="passwd">Role</p>
					<select class="custom-select drpdw" name="role">
						<option selected>Select Role</option>
						<option value="1">Administrator</option>
						<option value="3">User</option>
					</select>

					<!-- Button -->
					<div class="btngrup">
						<button type="submit" class="btn btn-primary btnsign"><b>Register</b></button>
					</div>

				</form>

				<!-- Some Text -->
				<div class="sometext">
					<p>Have An Account ? <span style="color: #0D8FFF;"><a href="<?php echo site_url('homecontroller/login') ?>">Login Here</a></span></p>
				</div>
			</div>

			<!-- Image Background -->
			<div class="col">
				<img width="150%" height="770" src="<?php echo base_url('assets/image/imgback.png') ?>">
			</div>
		</div>
	</div>

</body>

<!-- JavaScript for disabling form submissions if there are invalid fields -->
<script>
	// Self-executing function
	(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();
</script>

</html>
