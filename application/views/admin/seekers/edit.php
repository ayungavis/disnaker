<div class="container-fluid mt-4">
	<div class="animated fadeIn">
		<div class="card">
			<div class="card-header">
				Edit Data Pencari Kerja
			</div>
			<div class="card-body">

				<?php echo $this->session->flashdata('message'); ?>

				<form method="post" action="">
					<ul class="nav nav-tabs nav-fill" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#general" role="tab" aria-controls="home">
								<i class="icon-user"></i> Keterangan Umum</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#education" role="tab" aria-controls="profile">
								<i class="icon-star"></i> Riwayat Pendidikan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#experience" role="tab" aria-controls="messages">
								<i class="icon-briefcase"></i> Pengalaman Kerja</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#language" role="tab" aria-controls="messages">
								<i class="icon-globe"></i> Bahasa Yang Dikuasai</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#additional" role="tab" aria-controls="messages">
								<i class="icon-chart"></i> Informasi Tambahan</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="general" role="tabpanel">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="nik">NIK</label>
										<input type="text" id="nik" class="form-control <?php if (form_error('nik')) echo "is-invalid"; ?>" name="nik" placeholder="351719xxxxxxxxx" value="<?php echo $seeker['nik'] ?>">
										<?php echo form_error('nik', '<div class="invalid-feedback">', '</div>'); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="gender">Jenis Kelamin</label>
										<select class="form-control custom-select" id="gender" name="gender">
											<option value="">Pilih Salah Satu</option>
											<option value="male" <?php if ($seeker['gender'] == 'male') echo 'selected'; ?>>Laki-laki</option>
											<option value="female" <?php if ($seeker['gender'] == 'female') echo 'selected'; ?>>Perempuan</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12 mb-3 mb-md-0">
									<label for="name">Nama Lengkap</label>
									<input type="text" id="name" class="form-control <?php if (form_error('name')) echo "is-invalid"; ?>" name="name" placeholder="Johan Samuel" value="<?php echo $seeker['name'] ?>">
									<?php echo form_error('name', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12 mb-3 mb-md-0">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control <?php if (form_error('email')) echo "is-invalid"; ?>" name="email" placeholder="namakamu@domain.com" value="<?php echo $seeker['email'] ?>" disabled>
									<?php echo form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
							<div class="row mb-3 mb-md-0">
								<div class="col-md-6">
									<div class="form-group">
										<label for="place_of_birth">Tempat Lahir</label>
										<input type="text" id="place_of_birth" class="form-control <?php if (form_error('place_of_birth')) echo "is-invalid"; ?>" name="place_of_birth" placeholder="Mojokerto" value="<?php echo $seeker['place_of_birth'] ?>">
										<?php echo form_error('place_of_birth', '<div class="invalid-feedback">', '</div>'); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="date_of_birth">Tanggal Lahir</label>
										<input type="date" id="date_of_birth" class="form-control <?php if (form_error('date_of_birth')) echo "is-invalid"; ?>" name="date_of_birth" placeholder="DD/MM/YYYY" value="<?php echo $seeker['date_of_birth'] ?>">
										<?php echo form_error('date_of_birth', '<div class="invalid-feedback">', '</div>'); ?>
									</div>
								</div>
							</div>
							<div class="row mb-3 mb-md-0">
								<div class="col-md-6">
									<div class="form-group">
										<label for="religion">Agama</label>
										<select class="form-control custom-select" id="religion" name="religion">
											<option value="">Pilih Salah Satu</option>
											<?php foreach ($list_religions as $row): ?>
												<option value="<?php echo $row['id'] ?>" <?php if ($seeker['religion_id'] == $row['id']) echo 'selected'; ?>><?php echo $row['name'] ?></option>
											<?php endforeach ?>
										</select>
										<?php echo form_error('religion', '<div class="invalid-feedback">', '</div>'); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="stats">Status Perkawinan</label>
										<select class="form-control custom-select" id="stats" name="stats">
											<option value="">Pilih Salah Satu</option>
											<?php foreach ($list_stats as $row): ?>
												<option value="<?php echo $row['id'] ?>" <?php if ($seeker['stat_id'] == $row['id']) echo 'selected'; ?>><?php echo $row['name'] ?></option>
											<?php endforeach ?>
										</select>
										<?php echo form_error('stats', '<div class="invalid-feedback">', '</div>'); ?>
									</div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12 mb-3 mb-md-0">
									<label for="address">Alamat</label>
									<input type="text" id="address" class="form-control <?php if (form_error('address')) echo "is-invalid"; ?>" name="address" placeholder="Jl. Majapahit No. 10" value="<?php echo $seeker['address'] ?>">
									<?php echo form_error('address', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
							<div class="row mb-3 mb-md-0">
								<div class="col-md-6">
									<div class="form-group">
										<label for="village">Desa</label>
										<input type="text" id="village" class="form-control <?php if (form_error('village')) echo "is-invalid"; ?>" name="village" placeholder="Jetis" value="<?php echo $seeker['village'] ?>">
										<?php echo form_error('village', '<div class="invalid-feedback">', '</div>'); ?>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="rt">RT</label>
										<input type="text" id="rt" class="form-control <?php if (form_error('rt')) echo "is-invalid"; ?>" name="rt" placeholder="001" value="<?php echo $seeker['rt'] ?>">
										<?php echo form_error('rt', '<div class="invalid-feedback">', '</div>'); ?>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="rw">RW</label>
										<input type="text" id="rw" class="form-control <?php if (form_error('rw')) echo "is-invalid"; ?>" name="rw" placeholder="001" value="<?php echo $seeker['rw'] ?>">
										<?php echo form_error('rw', '<div class="invalid-feedback">', '</div>'); ?>
									</div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12 mb-3 mb-md-0">
									<label for="district">Kecamatan</label>
									<input type="text" id="district" class="form-control <?php if (form_error('district')) echo "is-invalid"; ?>" name="district" placeholder="Trowulan" value="<?php echo $seeker['district'] ?>">
									<?php echo form_error('district', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
							<div class="row mb-3 mb-md-0">
								<div class="col-md-6">
									<div class="form-group">
										<label for="postal_code">Kode Pos</label>
										<input type="text" id="postal_code" class="form-control <?php if (form_error('postal_code')) echo "is-invalid"; ?>" name="postal_code" placeholder="61290" value="<?php echo $seeker['postal_code'] ?>">
										<?php echo form_error('postal_code', '<div class="invalid-feedback">', '</div>'); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">No. HP</label>
										<input type="text" id="phone" class="form-control <?php if (form_error('phone')) echo "is-invalid"; ?>" name="phone" placeholder="085732405xxx" value="<?php echo $seeker['phone'] ?>">
										<?php echo form_error('phone', '<div class="invalid-feedback">', '</div>'); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="education" role="tabpanel">
							<?php foreach ($educations as $user_edu): ?>
								<div class="row mb-3 mb-md-0">
									<div class="col-md-4">
										<div class="form-group">
											<label for="education_id">Jenjang Pendidikan</label>
											<select class="form-control custom-select" id="education_id" name="education_id[]">
												<option value="">Pilih Salah Satu</option>
												<?php foreach ($list_educations as $row): ?>
													<option value="<?php echo $row['id'] ?>"
														<?php 
															if (!empty($user_edu['education_id'])) {
																if ($row['id'] == $user_edu['education_id']) {
																	echo 'selected';
																}
															}
														?>
													><?php echo $row['name'] ?></option>
												<?php endforeach ?>
											</select>
										</div>
									</div>
									<div class="col-md-8">
										<div class="form-group">
											<label for="school_name">Asal Sekolah</label>
											<input type="text" id="school_name" class="form-control" name="school_name[]" placeholder="SMAN 2 Mojokerto" value="<?php echo $user_edu['school_name'] ?>">
										</div>
									</div>
								</div>
								<div class="row mb-3 mb-md-0">
									<div class="col-md-6">
										<div class="form-group">
											<label for="department">Jurusan</label>
											<input type="text" id="department" class="form-control" name="department[]" placeholder="IPA / Teknik Mesin" value="<?php echo $user_edu['department'] ?>">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="year_in">Tahun Masuk</label>
											<input type="text" id="year_in" class="form-control" name="year_in[]" placeholder="2012" value="<?php echo $user_edu['year_in'] ?>">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="year_out">Tahun Keluar</label>
											<input type="text" id="year_out" class="form-control" name="year_out[]" placeholder="2015"
											value="<?php echo $user_edu['year_out'] ?>">
										</div>
									</div>
								</div>
							<?php endforeach ?>
							<div class="form-education"></div>
							<!-- <div class="row col-md-12 mt-2">
								<button type="button" class="btn btn-secondary py-2 px-4 mr-3 delete-education" id="delEducation">Hapus</button>
								<button type="button" class="btn btn-primary add-education" id="addEducation">Tambah</button>
							</div> -->
						</div>
						<div class="tab-pane" id="experience" role="tabpanel">
							<?php foreach ($experiences as $user_exp): ?>
								<div class="row mb-3 mb-md-0">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exp_company">Nama Perusahaan</label>
											<input type="text" id="exp_company" class="form-control" name="exp_company[]" placeholder="PT. Perusahaan" value="<?php echo $user_exp['company'] ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exp_position">Jabatan</label>
											<input type="text" id="exp_position" class="form-control" name="exp_position[]" placeholder="Staff" value="<?php echo $user_exp['position'] ?>">
										</div>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12 mb-3 mb-md-0">
										<label for="exp_description">Deskripsi Pekerjaan</label>
										<textarea class="form-control" id="exp_description" name="exp_description[]" cols="30" rows="3"><?php echo $user_exp['description'] ?></textarea>
									</div>
								</div>
								<div class="row mb-3 mb-md-0">
									<div class="col-md-3">
										<div class="form-group">
											<label for="exp_year_in">Tahun Masuk</label>
											<input type="text" id="exp_year_in" class="form-control" name="exp_year_in[]" placeholder="2015" value="<?php echo $user_exp['year_in'] ?>">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="exp_year_out">Tahun Keluar</label>
											<input type="text" id="exp_year_out" class="form-control" name="exp_year_out[]" placeholder="2018" value="<?php echo $user_exp['year_out'] ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exp_is_active">Masih Bekerja?</label>
											<select class="form-control custom-select" id="exp_is_active" name="exp_is_active[]">
												<option value="1" <?php if ($user_exp['is_active'] == 1) echo 'selected'; ?>>Ya</option>
												<option value="0" <?php if ($user_exp['is_active'] == 0) echo 'selected'; ?>>Tidak</option>
											</select>
										</div>
									</div>
								</div>
							<?php endforeach ?>
							<div class="form-experience"></div>
							<!-- <div class="row col-md-12 mt-2">
								<button type="button" class="btn btn-secondary py-2 px-4 mr-3 delete-experience" id="delEducation">Hapus</button>
								<button type="button" class="btn btn-primary add-experience" id="addExperience">Tambah</button>
							</div> -->
						</div>
						<div class="tab-pane" id="language" role="tabpanel">
							<?php foreach ($languages as $user_lang): ?>
								<div class="row form-group">
									<div class="col-md-12 mb-3 mb-md-0">
										<select class="form-control custom-select" id="languages" name="languages[]">
											<option value="">Pilih Salah Satu</option>
											<?php foreach ($list_languages as $row): ?>
												<option value="<?php echo $row['id'] ?>" <?php if ($row['id'] == $user_lang['lang_id']) echo 'selected'; ?>><?php echo $row['language'] ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
							<?php endforeach ?>
							<div class="form-language"></div>
							<!-- <div class="row col-md-12 mt-2">
								<button type="button" class="btn btn-secondary py-2 px-4 mr-3 delete-experience" id="delEducation">Hapus</button>
								<button type="button" class="btn btn-primary add-language" id="addLanguage">Tambah</button>
							</div> -->
						</div>
						<div class="tab-pane" id="additional" role="tabpanel">
							<div class="row form-group">
								<div class="col-md-12 mb-3 mb-md-0">
									<label for="desired_position">Jabatan Yang Diinginkan</label>
									<input type="text" id="desired_position" class="form-control" name="desired_position" placeholder="Direktur" value="<?php echo $seeker['position'] ?>">
								</div>
							</div>
							<div class="row mb-3 mb-md-0">
								<div class="col-md-6">
									<div class="form-group">
										<label for="desired_location">Lokasi Yang Diinginkan</label>
										<select class="form-control custom-select" id="desired_location" name="desired_location">
											<option value="domestic" <?php if ($seeker['location'] == 'domestic') echo 'selected'; ?>>Dalam Negeri</option>
											<option value="overseas" <?php if ($seeker['location'] == 'overseas') echo 'selected'; ?>>Luar Negeri</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="desired_region">Wilayah Yang Diinginkan</label>
										<select class="form-control custom-select" id="desired_region" name="desired_region">
											<option value="residence" <?php if ($seeker['region'] == 'residence') echo 'selected'; ?>>Wilayah Tempat Tinggal</option>
											<option value="other" <?php if ($seeker['region'] == 'other') echo 'selected'; ?>>Wilayah Lain</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12 mb-3 mb-md-0">
									<label for="desired_salary">Gaji Yang Diinginkan</label>
									<input type="text" id="desired_salary" class="form-control" name="desired_salary" placeholder="4000000" value="<?php echo $seeker['salary'] ?>">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12 mb-3 mb-md-0">
									<label for="desired_description">Keterangan Kerja</label>
									<input type="text" id="desired_description" class="form-control" name="desired_description" placeholder="Bidan di Puskesmas" value="<?php echo $seeker['description'] ?>">
								</div>
							</div>
						</div>
					</div>
					<br><hr>

					<!-- Education Copy -->
					<div class="copy-education d-none">
						<hr>
						<div class="row mb-3 mb-md-0 control-group">
							<div class="col-md-4">
								<div class="form-group">
									<label class="font-weight-bold" for="education_id">Jenjang Pendidikan</label>
									<select class="form-control custom-select" id="education_id" name="education_id[]">
										<option value="">Pilih Salah Satu</option>
										<?php foreach ($list_educations as $row): ?>
											<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<label class="font-weight-bold" for="school_name">Asal Sekolah</label>
									<input type="text" id="school_name" class="form-control" name="school_name[]" placeholder="SMAN 2 Mojokerto">
								</div>
							</div>
						</div>
						<div class="row mb-3 mb-md-0">
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="department">Jurusan</label>
									<input type="text" id="department" class="form-control" name="department[]" placeholder="IPA / Teknik Mesin">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="font-weight-bold" for="year_in">Tahun Masuk</label>
									<input type="text" id="year_in" class="form-control" name="year_in[]" placeholder="2012">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="font-weight-bold" for="year_out">Tahun Keluar</label>
									<input type="text" id="year_out" class="form-control" name="year_out[]" placeholder="2015">
								</div>
							</div>
						</div>
					</div>

					<!-- Experience Copy -->
					<div class="copy-experience d-none">
						<hr>
						<div class="row mb-3 mb-md-0">
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="exp_company">Nama Perusahaan</label>
									<input type="text" id="exp_company" class="form-control" name="exp_company[]" placeholder="PT. Perusahaan">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="exp_position">Jabatan</label>
									<input type="text" id="exp_position" class="form-control" name="exp_position[]" placeholder="Staff">
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="exp_description">Deskripsi Pekerjaan</label>
								<textarea class="form-control" id="exp_description" name="exp_description[]" cols="30" rows="3"></textarea>
							</div>
						</div>
						<div class="row mb-3 mb-md-0">
							<div class="col-md-3">
								<div class="form-group">
									<label class="font-weight-bold" for="exp_year_in">Tahun Masuk</label>
									<input type="text" id="exp_year_in" class="form-control" name="exp_year_in[]" placeholder="2015">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="font-weight-bold" for="exp_year_out">Tahun Keluar</label>
									<input type="text" id="exp_year_out" class="form-control" name="exp_year_out[]" placeholder="2018">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="exp_is_active">Masih Bekerja?</label>
									<select class="form-control custom-select" id="exp_is_active" name="exp_is_active[]">
										<option value="1">Ya</option>
										<option value="0">Tidak</option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<!-- Language Copy -->
					<div class="copy-language d-none">
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<select class="form-control custom-select" id="languages" name="languages[]">
									<option value="">Pilih Salah Satu</option>
									<?php foreach ($list_languages as $row): ?>
										<option value="<?php echo $row['id'] ?>"><?php echo $row['language'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
					</div>

					<div class="float-right">
						<input type="hidden" name="id" value="<?php echo $seeker['user_id']; ?>">
						<button type="reset" class="btn btn-secondary">Reset</button>
						<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		// Education
		$('.add-education').click(function() {
			var html = $('.copy-education').html();
			$('.form-education').after(html);
		});

		// Experience
		$('.add-experience').click(function() {
			var html = $('.copy-experience').html();
			$('.form-experience').after(html);
		});

		// Language
		$('.add-language').click(function() {
			var html = $('.copy-language').html();
			$('.form-language').after(html);
		});
	});
</script>
