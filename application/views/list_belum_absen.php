<div class="content-wrapper">

	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">DAFTAR YANG BELUM MELAKUKAN PROSES ABSENSI PESERTA RAKERNIS FUNGSI SDM POLDA SUMSEL T.A. 2022</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">List Belum Absen</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<div class="row table-responsive">
						<div class="col-md-2 float-right">
							<button type="button" class="btn btn-block btn-success" id="export">
								<i class="nav-icon fas fa-file-excel"></i> &nbsp;
								Export
							</button>
						</div>
						<br />
						<br />
						<br />
						<table class="table table-bordered" id="absensi-table">
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
									</tr>
								<?php $i++;
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>

<script>
	$(document).ready(function() {
		$('#absensi-table').DataTable();

		$('#export').click(function() {
			window.location.href = "<?= base_url(); ?>absensi/export_list_belum_absen";
		});

		window.setTimeout(function() {
			window.location.reload();
		}, 10000);
	});
</script>
