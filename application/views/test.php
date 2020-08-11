<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title ?></title>
	<!-- Style -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- Js -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>

	<table id="example" class="table table-stripped table-bordered" style="width: 100%;">
		<thead>
			<tr>
				<td>Id Petugas</td>
				<td>Nama Petugas</td>
				<td>Username</td>
				<td>Password</td>
				<td>Id Level</td>
			</tr>
		</thead>
		<tbody>
			<?php
			if ($c_user > 0) {
				foreach ($user as $users) {
			?>
					<tr>
						<td><?php echo $users->id_petugas ?></td>
						<td><?php echo $users->nama_petugas ?></td>
						<td><?php echo $users->username ?></td>
						<td><?php echo $users->password ?></td>
						<td><?php echo $users->id_level ?></td>
					</tr>
			<?php }
			} else {
				echo "Data Tidak Ada";
			}
			?>
		</tbody>
	</table>

	<div>
		<form action="<?php echo site_url('homecontroller/logoutUser') ?>" method="post">
			<button type="submit" class="btn btn-danger">Logout</button>
		</form>
	</div>

</body>

</html>
