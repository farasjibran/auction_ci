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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.css">

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
						<a class="collapse-item active" href="<?php echo site_url('homecontroller/viewGoods') ?>"><i class="fas fa-fw fa-box" style="margin-right: 10px;"></i>View Goods</a>
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

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">View Goods</h1>
					</div <!-- Area Data -->
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
									<a class="dropdown-item addbtn">
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
								<table class="table table-bordered text-center" cellspacing="0" width="100%" id="dataLelang">
									<thead class="bg-primary text-white">
										<tr>
											<th>Id Barang</th>
											<th>Nama Barang</th>
											<th>Tanggal Upload</th>
											<th>Harga Awal</th>
											<th>Deskripsi Barang</th>
											<th>Kategori Barang</th>
											<th>Foto Barang</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
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
					<form id="formtambah" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label>Name Goods</label>
								<input type="text" name="namabarang" id="nmabarang" class="form-control" placeholder="Enter Name Goods">
							</div>
							<div class="form-group">
								<label>Price Goods</label>
								<input type="text" name="hargabarang" id="hrgbarang" class="form-control" placeholder="Enter Price Goods">
							</div>
							<div class="form-group">
								<label>Description Item</label>
								<textarea type="text" name="deskripsiitem" id="deskitem" class="form-control" placeholder="Enter Description"></textarea>
							</div>
							<div class="form-group">
								<label>Category Item</label>
								<select class="custom-select drpdw" name="kategoriitem" id="ktgritem">
									<option selected>Select Category</option>
									<option value="Basketball Shoe">Basketball Shoe</option>
									<option value="T-Shirt">T-Shirt</option>
									<option value="Jersey">Jersey</option>
									<option value="Hoodie">Hoodie</option>
									<option value="Shorts">Shorts</option>
								</select>
							</div>
							<div class="form-group">
								<label>Picture</label>
								<input type="file" name="user_image" id="user_image" class="form-control">
							</div>
							<input value="open" type="hidden" id="statusbarang" name="status" class="form-control">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<input type="hidden" name="action" class="btn btn-success" value="Add" />
							<input type="submit" value="Add" name="action" class="btn btn-success" />
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
					<form id="formedit" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label>Thumbnail</label>
								<span id="foto_barang"></span>
							</div>
							<div class="form-group">
								<label>Name Goods</label>
								<input type="text" name="namabarang" id="namabarang" class="form-control" placeholder="Enter Name Goods">
							</div>
							<div class="form-group">
								<label>Price Goods</label>
								<input type="text" name="hargabarang" id="hargabarang" class="form-control" placeholder="Enter Price Goods">
							</div>
							<div class="form-group">
								<label>Description Item</label>
								<textarea type="text" name="deskripsiitem" id="deskripsiitem" class="form-control" placeholder="Enter Description"></textarea>
							</div>
							<div class="form-group">
								<label>Category Item</label>
								<select class="custom-select drpdw" name="kategoriitem" id="kategoriitem">
									<option selected>Select Category</option>
									<option value="Basketball Shoe">Basketball Shoe</option>
									<option value="T-Shirt">T-Shirt</option>
									<option value="Jersey">Jersey</option>
									<option value="Hoodie">Hoodie</option>
									<option value="Shorts">Shorts</option>
								</select>
							</div>
							<div class="form-group">
								<label>Picture</label>
								<input type="file" name="user_image" id="image" class="form-control">
							</div>
							<div class="form-group">
								<label>Status</label>
								<select class="custom-select drpdw" name="status" id="status">
									<option selected>Status</option>
									<option value="open">Open</option>
									<option value="close">Close</option>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<input type="hidden" name="id_barang" id="id_barang" class="btn btn-success" value="" />
							<input type="hidden" name="action" class="btn btn-success" value="Edit" />
							<input type="submit" value="Edit" name="action" class="btn btn-success" />
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

		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.all.min.js"></script>

</body>


<script>
	$(document).ready(function() {
		// ini adalah fungsi untuk memunculkan modal
		$('.addbtn').on('click', function() {

			$('#addModal').modal('show');

		});
		// ini adalah fungsi untuk memunculkan data di datatable
		var datalelang = $('#dataLelang').DataTable({
			"processing": true,
			"ajax": "<?= base_url("index.php/homecontroller/dataBarang") ?>",
			"order": [],
		});

		// Tambah barang
		$(document).on('submit', '#formtambah', function(event) {
			event.preventDefault();
			var namabarang = $('#nmabarang').val();
			var hargabarang = $('#hrgbarang').val();
			var deskripsiitem = $('#deskitem').val();
			var kategoriitem = $('#ktgritem').val();
			var extension = $('#user_image').val().split('.').pop().toLowerCase();
			if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
				alert("Invalid Image");
				$('#user_image').val('');
				return false;
			}

			if (namabarang != '' && hargabarang != '' && deskripsiitem != '' && kategoriitem != '') {
				$.ajax({
					type: "post",
					url: "<?= base_url("index.php/homecontroller/addData") ?>",
					beforeSend: function() {
						swal({
							title: 'Menunggu',
							html: 'Memproses data',
							onOpen: () => {
								swal.showLoading()
							}
						})
					},
					data: new FormData(this),
					contentType: false,
					processData: false,
					success: function() {
						swal({
							type: 'success',
							title: 'Tambah Barang',
							text: 'Anda Berhasil Menambah Barang'
						})
						$('#formtambah')[0].reset();
						$('#addModal').modal('hide');
						datalelang.ajax.reload(null, false);
					},
				});
			} else {
				Swal.fire({
					type: 'error',
					title: 'Oops...',
					text: 'Bother fields are required!',
				});
			}
		});

		// Edit barang
		$(document).on('submit', '#formedit', function(event) {
			event.preventDefault();
			var namabarang = $('#namabarang').val();
			var hargabarang = $('#hargabarang').val();
			var deskripsiitem = $('#deskripsiitem').val();
			var kategoriitem = $('#kategoriitem').val();
			var status = $('#status').val();
			var extension = $('#image').val().split('.').pop().toLowerCase();
			// if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
			// 	alert("Invalid Image");
			// 	$('#image').val('');
			// 	return false;
			// }

			if (namabarang != '' && hargabarang != '' && deskripsiitem != '' && kategoriitem != '' && status != '') {
				$.ajax({
					type: "post",
					url: "<?= base_url("index.php/homecontroller/editData") ?>",
					beforeSend: function() {
						swal({
							title: 'Menunggu',
							html: 'Memproses data',
							onOpen: () => {
								swal.showLoading()
							}
						})
					},
					data: new FormData(this),
					contentType: false,
					processData: false,
					success: function() {
						swal({
							type: 'success',
							title: 'Edit Barang',
							text: 'Anda Berhasil Mengedit Barang'
						})
						$('#formedit')[0].reset();
						$('#editModal').modal('hide');
						datalelang.ajax.reload(null, false);
					},
					error: function(xhr, ajaxOptions, thrownError) {
						console.log(xhr.responseText);
					}
				});
			} else {
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Bother fields are required!',
				});
			}
		});

		// Get Barang
		$(document).on('click', '.editbtn', function() {
			// console.log("lsadjlaskdjaskldj")
			var id_barang = $(this).attr("id");
			$.ajax({
				url: "<?= base_url("index.php/homecontroller/getIdBarang") ?>",
				type: "post",
				data: {
					id_barang: id_barang
				},
				dataType: "JSON",
				success: function(data) {
					$('#editModal').modal('show');
					$('#namabarang').val(data.nama_barang);
					$('#hargabarang').val(data.harga_awal);
					$('#deskripsiitem').val(data.deskripsi_barang);
					$('#kategoriitem').val(data.kategori_barang);
					$('#status').val(data.status);
					$('#id_barang').val(id_barang);
					$('#foto_barang').html(data.foto_barang);
				},
				error: function(xhr, ajaxOptions, thrownError) {
					console.log(xhr.responseText);
				}
			});
		});

		// Delete Barang
		$(document).on('click', '.deletebtn', function() {
			var id_barang = $(this).attr("id");
			swal({
				title: 'Konfirmasi',
				text: "Apakah anda yakin ingin menghapus ",
				type: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Hapus',
				confirmButtonColor: '#d33',
				cancelButtonColor: '#3085d6',
				cancelButtonText: 'Tidak',
				reverseButtons: true
			}).then((result) => {
				if (result.value) {
					$.ajax({
						url: "<?= base_url('index.php/homecontroller/deleteBarang') ?>",
						type: "post",
						beforeSend: function() {
							swal({
								title: 'Menunggu',
								html: 'Memproses data',
								onOpen: () => {
									swal.showLoading()
								}
							})
						},
						data: {
							id_barang: id_barang
						},
						success: function(data) {
							swal(
								'Hapus',
								'Berhasil Terhapus',
								'success'
							)
							datalelang.ajax.reload(null, false)
						}
					});
				} else if (result.dismiss === swal.DismissReason.cancel) {
					swal(
						'Batal',
						'Anda membatalkan penghapusan',
						'error'
					)
				};
			});

		});
	});
</script>

</html>
