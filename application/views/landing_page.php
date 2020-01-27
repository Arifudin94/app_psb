<!DOCTYPE html>
<html>
<head>
	<title>PSB SMK BIM </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.jumbotron {
		padding: 40px;
	}
	.footer-info {
		padding: 30px;
	}
</style>
<body>
	<div class="jumbotron header-content">
		<div class="container text-center">
			<p>PENDAFTARAN SISWA BARU</p>
		</div>
	</div>

	<!-- Kotent Informasi -->
	<div class="container">
		<div class="col-sm-8 informasi">
			<div class="row">
				<div class="col-xs-12">
					<h4><u>Informasi</u></h4>
					<ul>
						<?php foreach ($data->result() as $key) { ?>
						<li>Pendaftaran siswa baru dimulai pada tanggal : <?php echo date('d-m-Y', strtotime($key->tgl_pendaftaran)) ; ?></li>
						<li>Bantuan Hub: <span class="glyphicon glyphicon-phone-alt"></span> <?php echo $key->tlp_operator; ?> </li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-12">
					<h4><u>Cara Mendaftar</u></h4>
					<ol>
						<li>Isikan data pada form pendaftaran <a href="<?php echo base_url() ?>index.php/pendaftaran" class="btn btn-xs btn-success" target="_blank">Daftar Disini</a></li>
						<li>Login pada PSB dengan email dan password yang telah diisikan pada lama pendaftaran</li>
						<li>Cetak bukti pendaftaran</li>
						<li>Datang ke SMK Bina Insan Mandiri Srengseng untuk melakukan Registrasi PSB</li>
						<li>Dapatkan Akses Login ke SIA BIM untuk melihat Kelas,Walikelas,Guru,Matapelajaran dan Nilai</li>
					</ol>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-12">
					<h4><u>Bantuan</u></h4>
					<ul>
						<li>Untuk Login silahkan masukkan <strong>email & password</strong> yang diinput pada <strong>form pendaftaran</strong></li>
						<li>Jika kamu lupa password silahkan klik <a href="<?php echo base_url() ?>index.php/user/lupa_password">disini</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Form Login -->
		<div class="col-sm-4 login">
			<?php echo $this->session->flashdata('periksa'); ?>
			<?php echo $this->session->flashdata('status_login'); ?>
			<div class="text-center logo">
				<img src="<?php echo base_url()?>assets/images/psb-bim.png" style="max-width: 250px;"><br><br/>
			</div>
			<form action="<?php echo base_url() ?>index.php/user/login" method="post" accept-charset="utf-8">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">@</div>
						<input type="text" class="form-control" name="email" placeholder="email terdaftar" required>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></div>
						<input type="password" class="form-control" name="password" placeholder="password" required> 
					</div>
				</div>
				<div class="form-group">
					<a href="#" data-toggle="tooltip" data-placement="right" title="Silahkan isikan data pada form pendaftaran">Belum Daftar?</a><br>
				</div>
				<button type="submit" class="btn btn-block btn-default" name="submit"><span class="glyphicon"></span> Login</button>
			</form>
		</div>

	</div>
	<footer class="container-fluid footer-info">
		<p class="text-center">&copy 2018 - <a href="#" tooltip="">ganiwebs</a></p>
		<p class="text-center kecil">Seleksi Pendaftaran Siswa Baru SMK BIM ganiwebs</p>
	</footer>

	<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
	});
	</script>

</body>
</html>