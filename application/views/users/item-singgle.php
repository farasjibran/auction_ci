<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/css/aos.css') ?>">

	<!-- My Style -->
	<style>
		.navbartop {
			padding: 2%;
			position: absolute;
		}

		.imgback {
			margin-left: -20%;
			margin-top: -30%;
			object-fit: cover;
			width: 150%;
			height: 800px;
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

		.imgblur {
			width: 150%;
			height: 00px;
		}
	</style>
</head>

<body style="overflow-x: hidden;">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light navbartop">
		<a class="navbar-brand brnd" href="#">
			<img src="<?php echo base_url('assets/image/logohitam.png') ?>" width="" height="30" class="d-inline-block align-top" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="padding-left: 10%; font-size: 17px;">
			<div class="navbar-nav">
				<a class="nav-link" style="color: black;" href="<?php echo site_url('homecontroller/homeUser') ?>"><b>Home</b></a>
				<a class="nav-link ml-3" style="color: black;" ml-3" href="#">History</a>
				<a class="nav-link ml-3" style="color: black;" href="#">Catalogue</a>
			</div>
		</div>
		<a href="<?php echo site_url('homecontroller/logoutUser') ?>" style="margin-left: 188%;">
			<button class="btn btn-secondary"><b>Logout</b></button>
		</a>
	</nav>

	<!-- background -->
	<div class="container">
		<img class="imgback" src="<?php echo base_url('assets/fotobarang/' . $barang->foto_barang) ?>">
		<h1 class="setuser text-white text-center"><?php echo strtoupper($barang->nama_barang); ?></h1>
	</div>

	<!-- content -->
	<div class="container" style="margin-top: 15%; margin-left: 15%;">
		<div class="row">
			<div class="col-lg-3 order-lg-2">
				<div class="side-box mb-4">
					<p>
						Price: <strong class="text-black">Rp. <?php echo $barang->harga_awal ?></strong> <br>
						Bids Status: <strong class="text-black"><?php echo $barang->status ?></strong>
					</p>
					<form action="#">
						<div class="mb-4">
							<input type="text" class="form-control mb-2" placeholder="Rp. 0.00">
							<button class="btn btn-success btn-block">Submit a Bid</button>
							<span class="d-block text-center my-2">or</span>
							<button class="btn btn-primary btn-block">Buy Now</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-8 pr-lg-5">
				<div class="owl-carousel slide-one-item mb-5">
					<img src="<?php echo base_url('assets/fotobarang/' . $barang->foto_barang) ?>" alt="Image" class="img-fluid mb-54">
					<img src="<?php echo base_url('assets/fotobarang/' . $barang->foto_barang) ?>" alt="Image" class="img-fluid mb-54">
					<img src="<?php echo base_url('assets/fotobarang/' . $barang->foto_barang) ?>" alt="Image" class="img-fluid mb-54">
				</div>
				<p><?php echo $barang->deskripsi_barang ?></p>

				<h2 class="my-4">Bidders</h2>
				<ul class="list-unstyled bidders">
					<li class="d-flex justify-content-between align-items-center">
						<div class="d-flex align-items-center">
							<span class="mr-2">1.</span>
							<div class="d-flex align-items-center">
								<img src="images/person_1.jpg" alt="Image" class="mr-2">
								<span>Jean Smith</span>
							</div>
						</div>
						<span class="price">$40</span>
					</li>

					<li class="d-flex justify-content-between align-items-center">
						<div class="d-flex align-items-center">
							<span class="mr-2">2.</span>
							<div class="d-flex align-items-center">
								<img src="images/person_2.jpg" alt="Image" class="mr-2">
								<span>Chris Wilson</span>
							</div>
						</div>
						<span class="price">$87</span>
					</li>


					<li class="d-flex justify-content-between align-items-center">
						<div class="d-flex align-items-center">
							<span class="mr-2">3.</span>
							<div class="d-flex align-items-center">
								<img src="images/person_3.jpg" alt="Image" class="mr-2">
								<span>Kyle Anderson</span>
							</div>
						</div>
						<span class="price">$310</span>
					</li>

				</ul>
			</div>
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


<script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-migrate-3.0.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-ui.js') ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.stellar.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.countdown.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
<script src="<?= base_url('assets/js/aos.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.fancybox.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.sticky.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.mb.YTPlayer.min.js') ?>"></script>

<script src="<?= base_url('assets/js/main.js') ?>"></script>

</html>
