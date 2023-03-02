<div class="content-wrapper">

	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">ABSENSI PESERTA RAKERNIS FUNGSI SDM POLDA SUMSEL T.A. 2022</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">Absensi Peserta</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">

			<?php if (!empty($this->session->flashdata('success'))) { ?>
				<div class="alert alert-success" role="alert">
					<h4 class="alert-heading">Yeay!</h4>
					<p><?= $this->session->flashdata('success'); ?></p>
				</div>
			<?php } ?>

			<?php if (!empty($this->session->flashdata('danger'))) { ?>
				<div class="alert alert-danger" role="alert">
					<h4 class="alert-heading">Ooopss!</h4>
					<p><?= $this->session->flashdata('danger'); ?></p>
				</div>
			<?php } ?>

			<div class="row">
				<div class="col-sm-12">
					<input class="form-control form-control-lg" type="text" name="nrp" id="nrp" placeholder="Masukkan NRP/NIP">
				</div>
				<div class="col-sm-12" style="text-align:center;">
					<img src="<?= base_url(); ?>assets/images/Desain_tanpa_judul_2_-removebg-preview.png" />
				</div>
			</div>

		</div>
	</section>

</div>

<script>
	$(document).ready(function() {
		$('#nrp').focus();
		$('#nrp').change(function() {
			var nrp = $(this).val();

			console.log(nrp);
			$.ajax({
				url: "<?= base_url(); ?>absensi/add_absensi",
				method: "post",
				data: {
					nrp: nrp
				},
				success: function(data) {
					location.reload();
					$('.modal-customer').modal('toggle');
				},
				error: function(jqXHR, textStatus, errorThrown) {
					$('.modal-customer').modal('toggle');
				}
			});
		});
	});
</script>
