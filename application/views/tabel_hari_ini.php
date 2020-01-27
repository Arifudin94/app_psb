<table class="table table-hover table-bordered">
	<caption>Pendaftar Hari Ini :</caption>
	<thead>
		<tr>
			<th>No.</th>
			<th>Foto</th>
			<th>Nama Lengkap</th>
			<th>Kelamin</th>
			<th>Agama</th>
			<th>SMP Asal</th>
			<th>Total UN</th>
			<th>Nama Bapak</th>
			<th>Nama Ibu</th>
			<th>Hp/Telpon</th>
			<th>ID</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1; 
		foreach ($isi->result() as $row) { 
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><img src="<?php echo base_url() ?>uploads/<?php echo $row->foto;?>" width="60px" height="70px"></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->kelamin; ?></td>
			<td><?php echo $row->agama; ?></td>
			<td><?php echo $row->smp_asal; ?></td>
			<td><?php echo $row->un_total;?></td>
			<td><?php echo $row->nama_bpk; ?></td>
			<td><?php echo $row->nama_ibu; ?></td>
			<td><?php echo $row->telpon; ?></td>
			<td><?php echo $row->id; ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>