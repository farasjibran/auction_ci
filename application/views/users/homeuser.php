<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- My Style -->
	<style>
		.navbartop {
			padding: 2%;
			position: absolute;
		}

		.imgback {
			margin-left: -20%;
			margin-top: -100%;
		}

		.setuser {
			font-size: 120px;
			margin-top: -24%;
			margin-left: 25%;
			text-shadow: 0px 10px #929292;
		}

		.kontenbarang {
			margin-top: 15%;
		}
	</style>
</head>

<body style="overflow-x: hidden;">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light navbartop">
		<a class="navbar-brand brnd" href="#">
			<img src="<?php echo base_url('assets/image/logoputih.png') ?>" width="" height="30" class="d-inline-block align-top" alt="" loading="lazy">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="padding-left: 10%; font-size: 17px;">
			<div class="navbar-nav">
				<a class="nav-link text-white" href="#"><b>Home</b></a>
				<a class="nav-link text-white ml-3" href="#">History</a>
				<a class="nav-link text-white ml-3" href="#">Catalogue</a>
			</div>
		</div>
		<a href="<?php echo site_url('homecontroller/logoutUser') ?>" style="margin-left: 197%;">
			<button class="btn btn-secondary"><b>Logout</b></button>
		</a>
	</nav>

	<!-- background -->
	<div class="container">
		<img class="imgback" width="150%" src="<?php echo base_url('assets/image/imgback.png') ?>">
		<h1 class="setuser text-white">Hi, <?php echo strtoupper($this->session->userdata('usernama')); ?></h1>
	</div>

	<!-- barang -->
	<div class="container kontenbarang d-flex justify-content-around">
		<?php
		if ($c_barang > 0) {
			foreach ($barang as $barangs) {
		?>
				<div class="card" style="width: 18rem;">
					<div class="card-img">
						<img style="height: %;" src="<?php echo base_url('assets/fotobarang/' . $barangs->foto_barang) ?>" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title"><?php echo $barangs->nama_barang ?></h5>
						<p class="card-text"><?php echo $barangs->deskripsi_barang ?></p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
		<?php
			}
		} else {
			echo "Data Tidak Ditemukan";
		}
		?>
	</div>

</body>

</html>
