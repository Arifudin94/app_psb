<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
	<style type="text/css">
	.sambutan {
		margin-bottom: 40px;
		font-weight: bolder;
	}
	.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
		padding: 5px;
		font-size: 11px;
	}
	</style>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#">Dashboard Admin PSB SMK BIM</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url() ?>index.php/admin/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="sambutan text-center">
			<div class="alert alert-success">
				<p>SELAMAT DATANG DI HALAMAN ADMIN</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-cogs fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div>Jadwal PSB</div>
							</div>
						</div>
					</div>
					<a href="<?php echo base_url() ?>index.php/admin/setting" target="_blank">
						<div class="panel-footer">
							<span class="pull-left">Ubah Jadwal Pendaftaran</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4">

				<!-- Menampilkan Info Hari ini -->
				<?php echo $hari_ini ?>

			</div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-calendar fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo $data->num_rows() ?></div>
								<div>Total Pendaftar</div>
							</div>
						</div>
					</div>
					<a href="<?php echo base_url() ?>index.php/admin/total_pendaftar" target="_blank">
						<div class="panel-footer">
							<span class="pull-left">Lihat Detail</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row container">

			<!-- Menampilkan Data Hari Ini -->
			<?php echo $tabel; ?>

		</div>
	</div>
</body>
</html>