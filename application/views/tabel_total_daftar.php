		<table border="1">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama Lengkap</th>
					<th>Kelamin</th>
					<th>Agama</th>
					<th>SMP Asal</th>
					<th>Alamat SMP</th>
					<th>Total UN</th>
					<th>Hp/Telpon</th>
					<th>ID Terdaftar</th>
					<th>Tanggal Daftar</th>
					<th>Nama Bapak</th>
					<th>Pendidikan Bapak</th>
					<th>Pekerjaan Bapak</th>
					<th>Penghasilan</th>
					<th>Nama Ibu</th>
					<th>Pendidikan Ibu</th>
					<th>Pekerjaan Ibu</th>
					<th>Penghasilan</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=1;
				foreach ($data->result() as $row) { 
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $row->nama; ?></td>
						<td><?php echo $row->kelamin; ?></td>
						<td><?php echo $row->agama; ?></td>
						<td><?php echo $row->smp_asal; ?></td>
						<td><?php echo $row->alamat_smp; ?></td>
						<td><?php echo $row->un_total; ?></td>
						<td><?php echo $row->telpon; ?></td>
						<td><?php echo $row->id; ?></td>
						<td><?php echo $row->tanggal;?></td>
						<td><?php echo $row->nama_bpk;?></td>
						<td><?php echo $row->pendidikan_bpk;?></td>
						<td><?php echo $row->pekerjaan_bpk;?></td>
						<td><?php echo $row->penghasilan_bpk;?></td>
						<td><?php echo $row->nama_ibu;?></td>
						<td><?php echo $row->pendidikan_ibu;?></td>
						<td><?php echo $row->pekerjaan_ibu;?></td>
						<td><?php echo $row->penghasilan_ibu;?></td>
					</tr>
				</tbody>
				<?php } ?>
			</table>