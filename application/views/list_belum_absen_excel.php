<!DOCTYPE html>
<html>

<body>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Daftar Peserta yang belum absen - Rakorbin Polda Sumsel 2022.xls");
	?>

	<table border="1">
		<thead>
			<tr>
				<th scope="col">No.</th>
				<th scope="col">NRP/NIP</th>
				<th scope="col">NAMA</th>
				<th scope="col">PANGKAT</th>
				<th scope="col">JABATAN</th>
				<th scope="col">SATKER/SATWIL</th>
				<th scope="col">NO. HP</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0;
			foreach ($rs_absensi->result_array() as $row) { ?>
				<tr>
					<td><?= $i + 1; ?></td>
					<td><?= $row['nrp']; ?></td>
					<td>
						<?= strtoupper($row['nama']); ?>
					</td>
					<td>
						<?= $row['pangkat']; ?>
					</td>
					<td>
						<?= $row['jabatan']; ?>
					</td>
					<td>
						<?= $row['asal']; ?>
					</td>
					<td>
						<?= $row['no_hp']; ?>
					</td>
				<?php $i++;
			} ?>
		</tbody>
	</table>
</body>

</html>
