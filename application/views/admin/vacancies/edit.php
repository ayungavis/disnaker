<div class="container-fluid mt-4">
	<div class="animated fadeIn">
		<div class="card">
			<div class="card-header">
				Edit Lowongan Pekerjaan
			</div>
			<div class="card-body">

				<?php echo $this->session->flashdata('message'); ?>

				<form method="post" action="<?php echo base_url() ?>admin/vacancies/edit/<?php echo $vacancy['id'] ?>" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="company">Nama Perusahaan</label>
								<input type="text" class="form-control <?php if (form_error('company')) echo "is-invalid"; ?>" id="company" name="company" value="<?php echo $vacancy['company'] ?>">
								<?php echo form_error('company', '<div class="invalid-feedback">', '</div>'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="position">Jabatan</label>
								<input type="text" class="form-control" id="position" name="position" value="<?php echo $vacancy['position'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="description">Deskripsi Pekerjaan</label>
								<textarea class="form-control" id="description" name="description" rows="3"><?php echo $vacancy['description'] ?></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="requirement">Syarat Kebutuhan (Kualifikasi Minimum)</label>
								<textarea class="form-control" id="requirement" name="requirement" rows="3"><?php echo $vacancy['requirement'] ?></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="min_salary">Gaji Minimal</label>
								<input type="text" class="form-control" id="min_salary" name="min_salary" value="<?php echo $vacancy['min_salary'] ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="max_salary">Gaji Maksimal</label>
								<input type="text" class="form-control" id="max_salary" name="max_salary" value="<?php echo $vacancy['max_salary'] ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="show_salary">Tampilkan Gaji?</label>
								<select class="form-control" id="show_salary" name="show_salary">
									<option value="1" <?php if ($vacancy['show_salary'] == 1) echo 'selected'; ?>>Ya</option>
									<option value="0" <?php if ($vacancy['show_salary'] == 0) echo 'selected'; ?>>Tidak</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="address">Alamat Perusahaan</label>
								<textarea class="form-control" id="address" name="address" rows="3"><?php echo $vacancy['address'] ?></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="city">Kota</label>
								<input type="text" class="form-control" id="city" name="city" value="<?php echo $vacancy['city'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="province">Provinsi</label>
								<input type="text" class="form-control" id="province" name="province" value="<?php echo $vacancy['province'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="country">Negara</label>
								<input type="text" class="form-control" id="country" name="country" value="<?php echo $vacancy['country'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="is_domestic">Apakah Domestik? (Dalam Negeri)</label>
								<select class="form-control" id="is_domestic" name="is_domestic">
									<option value="1" <?php if ($vacancy['is_domestic'] == 1) echo 'selected'; ?>>Ya</option>
									<option value="0" <?php if ($vacancy['is_domestic'] == 0) echo 'selected'; ?>>Tidak</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="deadline">Tanggal Berakhir (Deadline)</label>
								<input type="date" class="form-control" id="deadline" name="deadline" value="<?php echo $vacancy['deadline'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<label for="image">Logo Perusahaan</label>
							</div>
						</div>
						<div class="col-md-10">
							<img src="<?php echo base_url(); ?>upload/vacancies/thumbnails/<?php echo $vacancy['thumbnail']; ?>" alt="logo-perusahaan">
							<br><br>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changeImage">Ganti Logo</button>
						</div>
					</div>
					<hr>
					<div class="d-flex justify-content-between">
						<div class="ml-1">
							<a href="<?php echo base_url() ?>admin/vacancies" class="btn btn-secondary">Kembali</a>
						</div>
						<div class="mr-1">
							<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
							<input type="hidden" name="id" value="<?php echo $vacancy['id']; ?>">
							<button type="reset" class="btn btn-secondary">Reset</button>
							<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="changeImage" tabindex="-1" role="dialog" aria-labelledby="changeImage">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/vacancies/change-image">
				<div class="modal-header">
					<h5 class="modal-title">Unggah Gambar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
					<input type="hidden" name="id" value="<?php echo $vacancy['id']; ?>">
					<input type="file" class="form-control-file" id="image" name="image">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Unggah</button>
				</div>
			</form>
		</div>
	</div>
</div>
