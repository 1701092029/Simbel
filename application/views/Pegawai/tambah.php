<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Form Tambah Data Pegawai
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="nip">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="kategori">Posisi</label>
							<select class="form-control" id="posisi" name="posisi">
								<option value="">-pilih-</option>
								<?php foreach ($posisi as $ps) : ?>
									<option value="<?= $ps['id']; ?>"> <?= $ps['posisi']; ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('posisi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>

		</div>
	</div>

</div>