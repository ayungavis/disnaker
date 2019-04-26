<div class="container-fluid mt-4">
	<div class="animated fadeIn">
		<div class="card">
			<div class="card-header">
				Tambah Lowongan Pekerjaan
			</div>
			<div class="card-body">

				<?php echo $this->session->flashdata('message'); ?>

				<form method="post" action="<?php echo base_url() ?>admin/vacancies/add" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="company">Nama Perusahaan</label>
								<input type="text" class="form-control <?php if (form_error('company')) echo "is-invalid"; ?>" id="company" name="company" autofocus="autofocus">
								<?php echo form_error('company', '<div class="invalid-feedback">', '</div>'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="position">Jabatan</label>
								<input type="text" class="form-control" id="position" name="position">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="description">Deskripsi Pekerjaan</label>
								<textarea class="form-control" id="description" name="description" rows="3"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="requirement">Syarat Kebutuhan (Kualifikasi Minimum)</label>
								<textarea class="form-control" id="requirement" name="requirement" rows="3"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="min_salary">Gaji Minimal</label>
								<input type="text" class="form-control" id="min_salary" name="min_salary">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="max_salary">Gaji Maksimal</label>
								<input type="text" class="form-control" id="max_salary" name="max_salary">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="show_salary">Tampilkan Gaji?</label>
								<select class="form-control" id="show_salary" name="show_salary">
									<option value="1">Ya</option>
									<option value="0">Tidak</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="address">Alamat Perusahaan</label>
								<textarea class="form-control" id="address" name="address" rows="3"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="city">Kota</label>
								<input type="text" class="form-control" id="city" name="city">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="province">Provinsi</label>
								<input type="text" class="form-control" id="province" name="province">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="country">Negara</label>
								<input type="text" class="form-control" id="country" name="country">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="is_domestic">Apakah Domestik? (Dalam Negeri)</label>
								<select class="form-control" id="is_domestic" name="is_domestic">
									<option value="1">Ya</option>
									<option value="0">Tidak</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="deadline">Tanggal Berakhir (Deadline)</label>
								<input type="date" class="form-control" id="deadline" name="deadline">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="image">Logo Perusahaan</label>
								<input type="file" class="form-control-file" id="image" name="image">
							</div>
						</div>
					</div>
					<hr>
					<div class="float-right">
						<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
						<button type="reset" class="btn btn-secondary">Reset</button>
						<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
