<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datepicker3.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
</head>
<body>
	<SCRIPT TYPE="text/javascript">
	$(document).ready(function() {
		$('.datepicker').datepicker({
			autoclose: true,
			format: 'yyyy-mm-dd',
		});
	});
	</SCRIPT>
	<style type="text/css">
	body {
		background-color: black;
	}
	.container {
		margin-top: 20px;
	}
	.input {
		background-color: white;
		padding: 14px;
	}
	</style>
	<div class="container col-sm-6 col-md-offset-3">
		<div class="input">
			<form class="form-horizontal" action="<?php echo base_url() ?>index.php/admin/do_setting" method="post">
				<div class="form-group form-group-sm row text-center">
					<button class="pull-right btn btn-danger btn-xs" style="margin-right: 15px; border-radius: 10px;"><span class="glyphicon glyphicon-remove"></span></button>
					<h4>Ubah Jadwal PSB SMK BIM</h4>
				</div>
				<div class="form-group form-group-sm row">
					<label class="col-sm-4 control-label">Tanggal Pendaftaran :</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="tgl_pendaftaran" placeholder="" class="datepicker" data-provide="datepicker" data-date-format="yyyy-mm-dd" placeholder="contoh : 21/01/2017" required>
					</div>
				</div>
				<div class="form-group form-group-sm row">
					<label class="col-sm-4 control-label">Telpon Sekolah/Operator :</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="tlp_pendaftaran" placeholder="No. Telpon Sekolah / Operator" required>
					</div>
				</div><br>
				<div class="form-group form-group-sm row">
					<div class="col-sm-6 col-sm-offset-4">
						<button type="submit" class="btn btn-default btn-sm">Simpan Pengaturan <span class="glyphicon glyphicon-floppy-disk"> </span></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>