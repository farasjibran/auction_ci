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

	<?php
	if ($c_barang > 0) {
		foreach ($barang as $data) {
	?>
			<div class="col-md-3 mt-3 mb-3" id="catalog">
				<div class="card" style="width: 18rem;" style="box-shadow: 0 1px 6px 1px rgba(69,65,78,.1);">
					<img src="<?= base_url('assets/fotobarang/' . $data->foto_barang) ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-gray-900"><?= $data->nama_barang ?></h5>
						<div class="row">
							<div class="col-md-7">
								<label style="color: grey; font-size: 15px;"><i><?php echo $data->kategori_barang ?></i></label>
							</div>
							<div class="col">
								<label style="color: black; font-weight: bold;  font-size: 14px;"><i>Rp. <?php echo $data->harga_awal ?></i></label>
							</div>
						</div>

						<p class="card-text"><?php echo substr($data->deskripsi_barang, 0, 90) ?>...</p>
						<div class="row">
							<div class="col-md-4">
								<a href="#" class="btn btn-danger delete" id="<?= $data->id_barang ?>">delete</a>
							</div>
							<div class="col">
								<a href="#" class="btn btn-primary" id="edit" style="width: 70px;">edit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	<?php }
	} else {
		echo "Data Tidak Ditemukan";
	}
	?>

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
		$('.delete').on('click', function() {
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
							$("#card").load("cardView");
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
