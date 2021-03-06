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
			<li class="nav-item">
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
						<a class="collapse-item" href="<?php echo site_url('homecontroller/viewGoods') ?>"><i class="fas fa-fw fa-box" style="margin-right: 10px;"></i>View Goods</a>
						<a class="collapse-item" href="<?php echo site_url('homecontroller/viewCatalog') ?>"><i class="fas fa-fw fa-th-large" style="margin-right: 10px;"></i>Catalogue View</a>
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
			<li class="nav-item active">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
					<i class="fas fa-fw fa-user"></i>
					<span>Action Officer</span>
				</a>
				<div id="collapseThree" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Action For Officer</h6>
						<a class="collapse-item active" href="<?php echo site_url('homecontroller/viewOfficer') ?>">View Officer</a>
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
				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: -20px;">
						<h1 class="h3 mb-0 text-gray-800">Users</h1>
					</div>

					<!-- Content Row -->

					<div class="row-fluid">

						<!-- Area Data -->
						<div class="card shadow mb-4">
							<!-- Card Header - Dropdown -->
							<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
								<h6 class="m-0 font-weight-bold text-primary">Data Officer & Admin</h6>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<div class="dropdown-header">Action</div>
										<a class="dropdown-item addbtn" href="#">
											<i class="fas fa-plus fa-sm fa-fw" style="color: green;">
											</i> Add Data
										</a>
										<a class="dropdown-item" href="<?php echo site_url('homecontroller/cetakData') ?>">
											<i class="fas fa-file fa-sm fa-fw" style="color: blue;">
											</i> Generate Pdf
										</a>
										<a class="dropdown-item" href="<?php echo site_url('homecontroller/cetakExcel') ?>">
											<i class="fas fa-table fa-sm fa-fw" style="color: green;">
											</i> Generate Excel
										</a>
									</div>
								</div>
							</div>
							<!-- Card Body -->
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered text-center" cellspacing="0" width="100%" id="dataTable">
										<thead class="bg-primary text-white">
											<tr>
												<th scope="col">Id Petugas</th>
												<th scope="col">Nama Petugas</th>
												<th scope="col">Username</th>
												<th scope="col">Password</th>
												<th scope="col">id_level</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											if ($c_users > 0) {
												foreach ($users as $data) {
													if ($data->id_level == 1 || $data->id_level == 2) {
											?>
														<tr>
															<td scope="row"><?php echo $data->id_petugas ?></td>
															<td><?php echo $data->nama_petugas ?></td>
															<td><?php echo $data->username ?></td>
															<td><?php echo md5($data->password) ?></td>
															<td><?php echo $data->id_level ?></td>
															<td>
																<button type="button" class="btn btn-primary btn-icon-split editbtn" style="padding-right: 6%;">
																	<span class="icon text-white">
																		<i class="fas fa-edit"></i>
																	</span>
																	<span class="text">Edit Data</span>
																</button>
																<button type="button" class="btn btn-danger btn-icon-split deletebtn" style="padding-right: 2%; margin-top: 10px;">
																	<span class="icon text-white">
																		<i class="fas fa-trash"></i>
																	</span>
																	<span class="text">Delete Data</span>
																</button>
															</td>
														</tr>
											<?php }
												}
											} else {
												echo "Data Tidak Ditemukan";
											}
											?>
										</tbody>
									</table>
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

	<!-- Add Modal -->
	<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="<?php echo base_url('index.php/homecontroller/registerPetugas') ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="namapetugas" class="form-control" placeholder="Enter name">
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" placeholder="Enter username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" placeholder="Enter password"> </input>
						</div>
						<div class="form-group">
							<label>Role</label>
							<select class="custom-select drpdw" name="role">
								<option selected>Select Role</option>
								<option value="1">Administrator</option>
								<option value="2">Officer</option>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-success">Add Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Edit Modal -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="<?php echo base_url('index.php/homecontroller/updateOfficer') ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<input type=hidden name="idpetugas" id="idpetugas" class="form-control">
						<div class="form-group">
							<label>Officer Name</label>
							<input type="text" name="namapetugas" id="namapetugas" class="form-control" placeholder="Enter Officer Name">
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
						</div>
						<div class="form-group">
							<label>Role</label>
							<select class="custom-select drpdw" name="role" id="role">
								<option selected>Select Role</option>
								<option value="1">Administrator</option>
								<option value="2">Officer</option>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Delete Modal -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Delete Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url('index.php/homecontroller/deleteOfficer') ?>" method="post">
					<div class="modal-body">
						<input type=hidden name="idpetugass" id="idpetugass" class="form-control">
						<label>Are You Sure To Delete This Data?</label>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger">Delete Data</button>
					</div>
				</form>
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

<script>
	$(document).ready(function() {
		$('.editbtn').on('click', function() {

			$('#editModal').modal('show');

			$tr = $(this).closest('tr');

			var data = $tr.children("td").map(function() {
				return $(this).text();
			});

			console.log(data);

			$('#idpetugas').val(data[0]);
			$('#namapetugas').val(data[1]);
			$('#username').val(data[2]);
			$('#password').val(data[3]);
			$('#role').val(data[4]);
		});

		$('.addbtn').on('click', function() {

			$('#addModal').modal('show');

		});

		$('.deletebtn').on('click', function() {

			$('#deleteModal').modal('show');

			$tr = $(this).closest('tr');

			var data = $tr.children("td").map(function() {
				return $(this).text();
			});

			console.log(data);

			$('#idpetugass').val(data[0]);
		});
	});
</script>

</html>
