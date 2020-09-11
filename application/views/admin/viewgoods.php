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
			<li class="nav-item active">
				<a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-fw fa-cog"></i>
					<span>Action</span>
				</a>
				<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Action For Goods</h6>
						<a class="collapse-item active" href="<?php echo site_url('homecontroller/viewGoods') ?>">View Goods</a>
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
								<span class="mr-2 d-none d-lg-inline text-gray-900 small"><b><?php echo $this->session->userdata('nama_user'); ?></b></span>
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

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">View Goods</h1>
					</div>


					<!-- Area Data -->
					<div class="card shadow mb-4">
						<!-- Card Header - Dropdown -->
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
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
								</div>
							</div>
						</div>
						<!-- Card Body -->
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" cellspacing="0" width="100%" id="dataTable">
									<thead class="bg-primary text-white">
										<tr>
											<th scope="col">Id Barang</th>
											<th scope="col">Nama Barang</th>
											<th scope="col">Tanggal Upload</th>
											<th scope="col">Harga Awal</th>
											<th scope="col">Deskripsi Barang</th>
											<th scope="col">Foto Barang</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if ($c_barang > 0) {
											foreach ($barang as $barangs) {
										?>
												<tr>
													<td scope="row"><?php echo $barangs->id_barang ?></td>
													<td><?php echo $barangs->nama_barang ?></td>
													<td><?php echo $barangs->tanggal_upload ?></td>
													<td><?php echo $barangs->harga_awal ?></td>
													<td><?php echo $barangs->deskripsi_barang ?></td>
													<td><img style="width: 50%;" src="<?php echo base_url('assets/fotobarang/' . $barangs->foto_barang) ?>"></td>
													<td>
														<button type="button" class="btn btn-primary btn-icon-split editbtn" style="padding-right: 6%;">
															<span class="icon text-white">
																<i class="fas fa-edit"></i>
															</span>
															<span class="text">Edit Data</span>
														</button>
														<button type="button" class="btn btn-danger btn-icon-split mt-2 deletebtn">
															<span class="icon text-white">
																<i class="fas fa-trash"></i>
															</span>
															<span class="text">Delete Data</span>
														</button>
													</td>
												</tr>
										<?php }
										} else {
											echo "Data Tidak Ditemukan";
										}
										?>
									</tbody>
								</table>
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
					<form method="post" action="<?php echo base_url('index.php/homecontroller/addData') ?>" enctype="multipart/form-data">
						<div class="modal-body">
							<div class="form-group">
								<label>Name Of Goods</label>
								<input type="text" name="namabarang" id="namabarang" class="form-control" placeholder="Enter Name Of Goods">
							</div>
							<div class="form-group">
								<label>Price Of Goods</label>
								<input type="text" name="hargabarang" id="hargabarang" class="form-control" placeholder="Enter Price Of Goods">
							</div>
							<div class="form-group">
								<label>Description Item</label>
								<textarea type="text" name="deskripsiitem" id="deskripsibarang" class="form-control"> </textarea>
							</div>
							<div class="form-group">
								<label>Picture</label>
								<input type="file" name="foto" id="foto" class="form-control">
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
					<form method="post" action="<?php echo base_url('index.php/homecontroller/updateData') ?>" enctype="multipart/form-data">
						<div class="modal-body">
							<input type=hidden name="idbarang" id="idbarang" class="form-control" placeholder="Enter Name Of Goods">
							<div class="form-group">
								<label>Name Of Goods</label>
								<input type="text" name="namabarang" id="namabarang" class="form-control" placeholder="Enter Name Of Goods">
							</div>
							<div class="form-group">
								<label>Price Of Goods</label>
								<input type="text" name="hargabarang" id="hargabarang" class="form-control" placeholder="Enter Price Of Goods">
							</div>
							<div class="form-group">
								<label>Description Item</label>
								<textarea type="text" name="deskripsiitem" id="deskripsibarang" class="form-control"> </textarea>
							</div>
							<div class="form-group">
								<label>Picture</label>
								<input type="file" name="foto" id="foto" class="form-control">
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
					<form action="<?php echo base_url('index.php/homecontroller/deleteData') ?>" method="post">
						<div class="modal-body">
							<input type=hidden name="idbarangs" id="idbarangs" class="form-control">
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

			$('#idbarang').val(data[0]);
			$('#namabarang').val(data[1]);
			$('#hargabarang').val(data[3]);
			$('#deskripsibarang').val(data[4]);
		});

		$('.deletebtn').on('click', function() {

			$('#deleteModal').modal('show');

			$tr = $(this).closest('tr');

			var data = $tr.children("td").map(function() {
				return $(this).text();
			});

			console.log(data);

			$('#idbarangs').val(data[0]);
		});

		$('.addbtn').on('click', function() {

			$('#addModal').modal('show');

		});
	});
</script>

</html>