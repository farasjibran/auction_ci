<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">

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
				<h2>Current <b> Auction</b></h2>
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
					<div class="col-md-4 mt-5">
						<div class="card" style="width: 18rem;">
							<div class="card-img">
								<img style="height: %;" src="<?php echo base_url('assets/fotobarang/' . $barangs->foto_barang) ?>" class="card-img-top">
							</div>
							<div class="card-body" style="padding-bottom: px;">
								<h5 class="card-title"><?php echo $barangs->nama_barang ?></h5>
								<label style="color: grey;"><i><?php echo $barangs->kategori_barang ?></i></label>
								<p class="card-text"><?php echo substr($barangs->deskripsi_barang, 0, 94) ?>...</p>
								<a href="<?php echo site_url('homecontroller/getId/') . $barangs->id_barang ?>" class="btn btn-primary">Read More...</a>
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

	<footer id="colorlib-footer" style="margin-top: 10%;">
		<div class="container">
			<div class="row row-pb-md" style="margin-bottom: 6%;">
				<div class="col-md-3 colorlib-widget" style="margin-left: 13%;">
					<h4>About <?php echo $title ?></h4>
					<p>
						An auction is the process of buying and selling goods or services by offering to the bidder, offering a higher price bid, and then selling the item to the highest bidder.
					</p>
				</div>
				<div class="col-md-3 colorlib-widget" style="margin-left: 7%;">
					<h4>Page</h4>
					<p>
						<ul class="colorlib-footer-links">
							<li><a href="#"><i class="fas fa-fw fa-check"></i> Home</a></li>
							<li><a href="#"><i class="fas fa-fw fa-check"></i> History</a></li>
							<li><a href="#"><i class="fas fa-fw fa-check"></i> Catalogue</a></li>
						</ul>
					</p>
				</div>

				<div class="col-md-3 colorlib-widget">
					<h4>Contact Info</h4>
					<ul class="colorlib-footer-links">
						<li>Depok Jawa Barat, <br> Perum Griya Kalibaru Blok B2 NO4</li>
						<li><a href="tel://08815639749"><i class="fas fa-fw fa-phone"></i> + 08815639749</a></li>
						<li><a href="mailto:farasjibran@gmail.com"><i class="fas fa-fw fa-envelope"></i> farasjibran@gmail.com</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copy">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This website is made with <i class="fas fa-fw fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Toughput</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>
