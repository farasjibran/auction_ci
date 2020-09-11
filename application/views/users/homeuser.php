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
			text-shadow: 0px 10px #929292;
		}

		.kontenbarang {
			margin-right: 10%;
		}

		.judul {
			margin-top: 11%;
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
		<a href="<?php echo site_url('homecontroller/logoutUser') ?>" style="margin-left: 188%;">
			<button class="btn btn-secondary"><b>Logout</b></button>
		</a>
	</nav>

	<!-- background -->
	<div class="container">
		<img class="imgback" width="150%" src="<?php echo base_url('assets/image/imgback.png') ?>">
		<h1 class="setuser text-white text-center">Hi, <?php echo strtoupper($this->session->userdata('nama_user')); ?></h1>
	</div>

	<div class="container judul">
		<div class="row">
			<div class="col-md-3">
				<h2>Items <b>In</b> Catalog</h2>
			</div>
			<div class="col-md-3" style="margin-top: 5px;">
				<hr class="sidebar-divider" style="border-top: 2px solid black;">
			</div>
			<div class="col-md-3" style="margin-top: 5px;">
				<a href="">Show More...</a>
			</div>
		</div>
	</div>

	<!-- barang -->
	<div class="container kontenbarang justify-content-around mb-5">
		<div class="row">
			<?php
			if ($c_barang > 0) {
				foreach ($barang as $barangs) {
			?>
					<div class="col-md-4  mt-5">
						<div class="card" style="width: 18rem;">
							<div class="card-img">
								<img style="height: %;" src="<?php echo base_url('assets/fotobarang/' . $barangs->foto_barang) ?>" class="card-img-top">
							</div>
							<div class="card-body" style="padding-bottom: px;">
								<h5 class="card-title"><?php echo $barangs->nama_barang ?></h5>
								<p class="card-text"><?php echo substr($barangs->deskripsi_barang, 0, 94) ?>...</p>
								<a href="#" class="btn btn-primary">Read More...</a>
							</div>
						</div>
					</div>
			<?php
				}
			} else {
				echo "Data Tidak Ditemukan";
			}
			?>
		</div>
	</div>
</body>

</html>
