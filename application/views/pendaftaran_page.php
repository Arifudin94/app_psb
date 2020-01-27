<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran-PSB SMK Bina Insan Mandiri Srengseng </title>
	<title>Pendaftaran-PSB SMK Bina Insan Mandiri Srengseng</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datepicker3.css">
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
</head>
<body>
	<SCRIPT TYPE="text/javascript">
	$(document).ready(function() {
		$('.datepicker').datepicker();
	});
	</SCRIPT>
	<STYLE TYPE="text/css">
	input.form-control {
		border-radius: 0px;
	}
	body {
		background-image: url('../assets/images/pattern-1.jpg');
		background-repeat: repeat;
	}
	.jumbotron {
		padding: 15px;
		background-image: url('../assets/images/bgpattern.png');
	}
	.isi-data {
		background-color: white;
		padding-top: 15px;
		margin-top: 20px;
		max-width: 75%
	}
	.navigasi {
		margin-top: 10px;
	}
	@media only screen and (max-width: 500px) {
    .isi-data {
    	max-width: 90%;
    }
	}
	</STYLE>	
	<!-- Form Isi Data -->
	<div class="container-fluid navigasi">
		<a href="<?php echo base_url() ?>"><span class="glyphicon glyphicon-chevron-left"></span> Kembali ke halaman utama</a>
	</div>
	<div class="container isi-data">
		<div class="judul text-center">Isilah Data Berikut Dengan Sebenar-benarnya</div><hr>

		<!-- Display error -->
		<?php echo $this->session->flashdata('gagal'); ?>
		<form class="form-horizontal" action="<?php echo base_url() ?>index.php/pendaftaran/simpan_pendaftaran" method="post" enctype="multipart/form-data">
			
			<!-- Data Prinadi -->
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">NIK</label>
				<div class="col-sm-6">
					<input class="form-control" type="number" name="nik" placeholder="Nomor Identias Kependudukan" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Nama</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<input type="radio" name="kelamin" value="Laki-laki" checked> Laki-laki
					<input type="radio" name="kelamin" value="Perempuan"> Perempuan
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Tempat Lahir & Tgl lahir</label>
				<div class="col-sm-3">
					<input class="form-control" type="text" name="tempat_lahir" required>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
						<input type="text" class="form-control datepicker" name="tanggal_lahir" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy"  required> 
					</div>
					</div>
					<!-- <input type="text" class="form-control datepicker" name="tanggal_lahir" data-provide="datapicker" data-date-format="yyyy-mm-dd" required> -->
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Agama</label>
				<div class="col-sm-3">
					<select name="agama" class="form-control" required>
						<option value="">-Pilih-</option>
						<option value="islam">Islam</option>
						<option value="kristen">Kristen</option>
						<option value="katolik">Katolik</option>
						<option value="hindu">Hindu</option>
						<option value="budha">Budha</option>
					</select>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Alamat</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="alamat" placeholder="Mohon isi alamat dengan lengkap" required>
				</div>
			</div>			
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Kewarganegaran</label>
				<div class="col-sm-3">
					<input type="radio" name="negara" value="WNI" checked> WNI
					<input type="radio" name="negara" value="WNA"> WNA
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">No. Telpon/ HP</label>
				<div class="col-sm-3">
					<input class="form-control" type="number" name="telpon" placeholder="Isi dengan angka" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Hobi dan Cita-cita</label>
				<div class="col-sm-3">
					<input class="form-control" type="text" name="hobi" placeholder="" required>
				</div>
				<div class="col-sm-3">
					<input class="form-control" type="text" name="cita" placeholder="" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Anak Ke Barapa</label>
				<div class="col-sm-2">
					<input class="form-control" type="number" name="akb" placeholder="" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Jumlah Saudara Kandung</label>
				<div class="col-sm-2">
					<input class="form-control" type="number" name="jsk" placeholder="" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Tempat Tinggal Dengan</label>
				<div class="col-sm-3">
					<input class="form-control" type="text" name="ttd" placeholder="" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Jarak Dari Rumah Ke Sekolah</label>
				<div class="col-sm-3">
					<select name="jarak" class="form-control">
						<option value="0-1">0-1 KM</option>
						<option value="2-3">2-3 KM</option>
						<option value="4-5">4-5 KM</option>
						<option value="6-10">6-10 KM</option>
						<option value=">10">>10 KM</option>
					</select>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Transportasi Yang Digunakan</label>
				<div class="col-sm-3">
					<select name="transportasi" class="form-control">
						<option value="jalan kaki">Jalan Kaki</option>
						<option value="motor">Motor</option>
						<option value="angkutan umum">Angkutan Umum</option>
						<option value="antar jemput">Antar Jemput</option>
						<option value=">mobil pribadi">Mobil Pribadi</option>
					</select>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Tinggi dan Berat Badan</label>
				<div class="col-sm-2">
					<input class="form-control" type="number" name="tinggi" placeholder="Tinggi Badan" required>
				</div>
				<div class="col-sm-2">
					<input class="form-control" type="number" name="berat" placeholder="Berat Badan" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Golongan Darah</label>
				<div class="col-sm-1">
					<select name="g_darah" class="form-control">
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="AB">AB</option>
						<option value="O">O</option>
					</select>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Penyakit Yang Pernah Diderita</label>
				<div class="col-sm-2">
					<input class="form-control" type="text" name="pypdd" placeholder="" required>
				</div>
			</div>
			<hr>

			<!-- Data Asal Sekolah -->
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Asal Sekolah</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="smp_asal" placeholder="Nama SMP Asal" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Alamat SMP Asal</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="alamat_smp" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Nomor Induk Siswa Nasional</label>
				<div class="col-sm-6">
					<input class="form-control" type="number" name="nisn" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Nomor Peserta Ujian Nasional</label>
				<div class="col-sm-6">
					<input class="form-control" type="number" name="npun" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Tanggal Dan Nomor STTB/Ijazah</label>
				<div class="col-sm-3">
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
						<input type="text" class="form-control datepicker" name="tanggal_ijazah" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy"  required> 
					</div>
				</div>
				<div class="col-sm-3">
					<input class="form-control" type="text" name="no_ijazah" placeholder="Nomor STTB/Ijazah" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Nilai UN (Total)</label>
				<div class="col-sm-2">
					<input class="form-control" type="text" name="un_total" placeholder="contoh : 87,54" required>
				</div>
			</div>
			<hr>

			<!-- Data Wali/Orang Tua -->
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Nama Bapak</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="nama_bpk" placeholder="Nama Bapak" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Tempat Lahir & Tgl lahir</label>
				<div class="col-sm-3">
					<input class="form-control" type="text" name="tempat_lahir_a" required>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
						<input type="text" class="form-control datepicker" name="tanggal_lahir_a" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy"  required> 
					</div>
					</div>
					<!-- <input type="text" class="form-control datepicker" name="tanggal_lahir" data-provide="datapicker" data-date-format="yyyy-mm-dd" required> -->
				</div>
			</div>			
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Kewarganegaran</label>
				<div class="col-sm-3">
					<input type="radio" name="negara_a" value="WNI" checked> WNI
					<input type="radio" name="negara_a" value="WNA"> WNA
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Pendidikan Terakhir</label>
				<div class="col-sm-3">
					<select name="pendidikan_bpk" class="form-control" required>
						<option name="pendidikan_bpk" value="">-Pilih-</option>
						<option name="pendidikan_bpk" value="SD">SD/Sederajat</option>
						<option name="pendidikan_bpk" value="SMP">SMP/Sederajat</option>
						<option name="pendidikan_bpk" value="SMA">SMA/Sederajat</option>
						<option name="pendidikan_bpk" value="Diploma">Diploma</option>
						<option name="pendidikan_bpk" value="S1">Sarjana/S1</option>
						<option name="pendidikan_bpk" value="S2">Magister/S2</option>
						<option name="pendidikan_bpk" value="S3">Doktor/S3</option>
						<option name="pendidikan_bpk" value="Lainnya">Lainnya</option>
					</select>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Pekerjaan</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="pekerjaan_bpk" placeholder="Pekerjaan Bapak" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Penghasilan/Bulan</label>
				<div class="col-sm-3">
					<select name="penghasilan_bpk" class="form-control" required>
						<option name="penghasilan_bpk" value="">-Pilih-</option>
						<option name="penghasilan_bpk" value="0">< Tidak Ada</option>
						<option name="penghasilan_bpk" value="< 1 juta">< 1 Juta Rupiah</option>
						<option name="penghasilan_bpk" value="1-3 Juta">Rp 1-3 Juta Rupiah</option>
						<option name="penghasilan_bpk" value="3-5 Juta" >Rp 3-5 Juta Rupiah</option>
						<option name="penghasilan_bpk" value="> 5 Juta">> Rp 5 Juta Rupiah</option>
					</select>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Nama Ibu</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="nama_ibu" placeholder="Nama Ibu" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Tempat Lahir & Tgl lahir</label>
				<div class="col-sm-3">
					<input class="form-control" type="text" name="tempat_lahir_i" required>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
						<input type="text" class="form-control datepicker" name="tanggal_lahir_i" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy"  required> 
					</div>
					</div>
					<!-- <input type="text" class="form-control datepicker" name="tanggal_lahir" data-provide="datapicker" data-date-format="yyyy-mm-dd" required> -->
				</div>
			</div>			
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Kewarganegaran</label>
				<div class="col-sm-3">
					<input type="radio" name="negara_i" value="WNI" checked> WNI
					<input type="radio" name="negara_i" value="WNA"> WNA
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Pendidikan Terakhir</label>
				<div class="col-sm-3">
					<select name="pendidikan_ibu" class="form-control" required>
						<option name="pendidikan_ibu" value="">-Pilih-</option>
						<option name="pendidikan_ibu" value="SD">SD/Sederajat</option>
						<option name="pendidikan_ibu" value="SMP">SMP/Sederajat</option>
						<option name="pendidikan_ibu" value="SMA">SMA/Sederajat</option>
						<option name="pendidikan_ibu" value="Diploma">Diploma</option>
						<option name="pendidikan_ibu" value="S1">Sarjana/S1</option>
						<option name="pendidikan_ibu" value="S2">Magister/S2</option>
						<option name="pendidikan_ibu" value="S3">Doktor/S3</option>
						<option name="pendidikan_ibu" value="Lainnya">Lainnya</option>
					</select>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Pekerjaan</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Penghasilan</label>
				<div class="col-sm-3">
					<select name="penghasilan_ibu" class="form-control" required>
						<option name="penghasilan_ibu" value="">-Pilih-</option>
						<option name="penghasilan_bpk" value="0">< Tidak Ada</option>
						<option name="penghasilan_ibu" value="< 1 juta">< 1 Juta Rupiah</option>
						<option name="penghasilan_ibu" value="1-3 Juta">Rp 1-3 Juta Rupiah</option>
						<option name="penghasilan_ibu" value="3-5 Juta" >Rp 3-5 Juta Rupiah</option>
						<option name="penghasilan_ibu" value="> 5 Juta">> Rp 5 Juta Rupiah</option>
					</select>
				</div>
			</div>
			<hr>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label">Passfoto (maks ukuran 100Kb)</label>
				<div class="col-sm-6">
					<input type="file" name="foto">
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label" >Jurusan</label>
				<div class="col-sm-3">
				<select name="jurusan" class="form-control" required />
					<option value="AP">Administrasi Perkantoran</option>
					<option value="AK">Akutansi</option>
					<option value="PM">Pemasaran</option>
					<option value="TKJ">Teknik Komputer Jaringan</option>
				</select>
				</div>
			</div>			
			<hr>
			
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label"><span class="text-success">Masukkan email</span></label>
				<div class="col-sm-4">
					<input class="form-control" type="email" name="email" placeholder="contoh : emailsaya@gmail.com" required>
				</div>
				
			</div>
			<div class="form-group form-group-sm row">
				<label class="col-sm-3 control-label"><span class="text-success">Masukkan Password</span></label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="password" placeholder="password digunakan untuk login" required>
				</div>
				
			</div>
			<hr>
			<div class="form-group form-group-sm row">
				<div class="col-sm-12 text-center">
					<div class="checkbox">
						<input type="checkbox" required>Dengan ini saya menyatakan bahwa data yang saya inputkan adalah benar
					</div>
				</div>
			</div>
			<div class="form-group form-group-sm row">
				<div class="col-sm-12 text-center"><button type="submit" class="btn btn-sm btn-success">Simpan Data</button> <button type="reset" class="btn btn-sm btn-default">Reset</button></div>
			</div>
		</form>

	</div>
	<!-- /Form Isi Data -->

	<footer class="container-fluid">
		<p class="text-center">&copy 2018 - <a href="#">SMK BIM</a></p>
		<p class="text-center kecil">Seleksi Pendaftaran Siswa Baru SMK BIM </p>
	</footer>

</body>
</html>