<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $title ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('homecontroller/adminHome') ?>">
				<div class="sidebar-brand-text mx-3"><img width="150" src="<?php echo base_url('assets/image/logoputih.png'); ?>"></div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo site_url('homecontroller/adminHome') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Action Goods
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-fw fa-cog"></i>
					<span>Action</span>
				</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Action For Goods</h6>
						<a class="collapse-item" href="<?php echo site_url('homecontroller/viewGoods') ?>">View Goods</a>
					</div>
				</div>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				user data
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
					<i class="fas fa-fw fa-user"></i>
					<span>Action Officer</span>
				</a>
				<div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Action For Officer</h6>
						<a class="collapse-item" href="<?php echo site_url('homecontroller/viewOfficer') ?>">View Officer</a>
					</div>
				</div>
			</li>

			<!-- Nav Item - Charts -->
			<li class="nav-item">
				<a class="nav-link" href="charts.html">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>Charts</span></a>
			</li>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Header -->
					<h1 class="mt-2 text-dark" style="font-size: 30px; font-weight: bold;">Admin Home</h1>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-900 small"><b><?php echo ucfirst($this->session->userdata('nama_user')); ?></b></span>
								<div class="topbar-divider d-none d-sm-block" style="height: 25px ; margin-left: -2px;"></div>
								<span class="mr-2 d-none d-lg-inline text-gray-900 small" style="margin-left: -10px;"><b><?php echo $this->session->userdata('role'); ?></b></span>
								<img class="img-profile rounded-circle" src="https://images.unsplash.com/photo-1493752603190-08d8b5d1781d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60/60x60">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->`
				<div class="container-fluid" style="margin-top: -20px;">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
					</div>

					<!-- Content Row -->

					<div class="row">

						<!-- Admin -->
						<div class="col-xl-3 col-md-6 mb-4">
							<a href="<?php echo site_url('homecontroller/viewOfficer') ?>">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Admin</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totaladmn ?></div>
											</div>
											<div class="col-auto">
												<i class="fas fa-user-cog fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<!-- Officer -->
						<div class="col-xl-3 col-md-6 mb-4">
							<a href="<?php echo site_url('homecontroller/viewOfficer') ?>">
								<div class="card border-left-success shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Officer</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totaluser ?></div>
											</div>
											<div class="col-auto">
												<i class="fas fa-user fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<!-- Barang -->
						<div class="col-xl-3 col-md-6 mb-4">
							<a href="<?php echo site_url('homecontroller/viewGoods') ?>">
								<div class="card border-left-danger shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Items</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalbarang ?></div>
											</div>
											<div class="col-auto">
												<i class="fas fa-boxes fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<!-- History Auction -->
						<div class="col-xl-5 col-lg-6 mb-4">
							<div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">History Auction</h6>
								</div>
							</div>
						</div>

						<!-- History Auction -->
						<div class="col-xl-7 col-lg-6 mb-4">
							<div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">History Auction</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Auction 2020</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?php echo site_url('homecontroller/logoutUser') ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>

	<!-- Page level plugins -->
	<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>
	<!-- Page level custom scripts -->
	<script src="<?php echo base_url('assets/js/datatables-demo.js') ?>"></script>

</body>

</html>
