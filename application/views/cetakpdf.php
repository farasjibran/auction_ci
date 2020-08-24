<!-- Custom styles for this template-->
<link href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

<!-- Content Row -->

<div class="container-fluid">

	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<div class="row">
			<div class="col">
				<h4 class="m-0 font-weight-bold text-primary">Data Barang</h4>
				<h6 style="margin-top: 15px;">Tanggal Barang : <?php echo date('d-m-Y') ?></h6>
				<h6>Nama Petugas : <?php echo $this->session->userdata('usernama'); ?></h6>
			</div>
		</div>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" cellspacing="0" width=100%" border="1">
				<tr>
					<th>Id Barang</th>
					<th>Nama Barang</th>
					<th>Tanggal Upload</th>
					<th>Harga Awal</th>
					<th>Deskripsi Barang</th>
				</tr>
				<?php
				if ($c_barang > 0) {
					foreach ($barang as $barangs) {
				?>
						<tr>
							<td><?php echo $barangs->id_barang ?></td>
							<td><?php echo $barangs->nama_barang ?></td>
							<td><?php echo $barangs->tanggal_upload ?></td>
							<td><?php echo $barangs->harga_awal ?></td>
							<td><?php echo $barangs->deskripsi_barang ?></td>
						</tr>
				<?php }
				} else {
					echo "Data Tidak Ditemukan";
				}
				?>
			</table>
		</div>
	</div>
</div>
