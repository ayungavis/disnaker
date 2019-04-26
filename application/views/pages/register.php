<div class="unit-5 overlay" style="background-image: url('<?php echo base_url(); ?>assets/pages/images/hero_1.jpg');">
	<div class="container text-center">
		<h2 class="mb-0">Post a Job</h2>
		<p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Post a Job</span></p>
	</div>
</div>

<div class="site-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">
				<form id="regForm" action="<?php echo base_url() ?>register" method="post" class="p-5 bg-white">
					<div class="tab">
						<h4>Keterangan Umum</h4>
						<div class="row mb-3 mb-md-0">
							<div class="col-md-8">
								<div class="form-group">
									<label class="font-weight-bold" for="nik">NIK</label>
									<input type="text" id="nik" class="form-control <?php if (form_error('nik')) echo "is-invalid"; ?>" name="nik" placeholder="351719xxxxxxxxx" value="<?php echo set_value('nik') ?>">
									<?php echo form_error('nik', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="font-weight-bold" for="gender">Jenis Kelamin</label>
									<select class="form-control custom-select" id="gender" name="gender">
										<option value="">Pilih Salah Satu</option>
										<option value="male" <?php if (set_value('gender') && set_value('gender') == 'male') echo 'selected'; ?>>Laki-laki</option>
										<option value="female" <?php if (set_value('gender') && set_value('gender') == 'male') echo 'selected'; ?>>Perempuan</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="name">Nama Lengkap</label>
								<input type="text" id="name" class="form-control <?php if (form_error('name')) echo "is-invalid"; ?>" name="name" placeholder="Johan Samuel" value="<?php echo set_value('name') ?>">
								<?php echo form_error('name', '<div class="invalid-feedback">', '</div>'); ?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="email">Email</label>
								<input type="text" id="email" class="form-control <?php if (form_error('email')) echo "is-invalid"; ?>" name="email" placeholder="namakamu@domain.com" value="<?php echo set_value('email') ?>">
								<?php echo form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
							</div>
						</div>
						<div class="row mb-3 mb-md-0">
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="place_of_birth">Tempat Lahir</label>
									<input type="text" id="place_of_birth" class="form-control <?php if (form_error('place_of_birth')) echo "is-invalid"; ?>" name="place_of_birth" placeholder="Mojokerto" value="<?php echo set_value('place_of_birth') ?>">
									<?php echo form_error('place_of_birth', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="date_of_birth">Tanggal Lahir</label>
									<input type="date" id="date_of_birth" class="form-control <?php if (form_error('date_of_birth')) echo "is-invalid"; ?>" name="date_of_birth" placeholder="DD/MM/YYYY" value="<?php echo set_value('date_of_birth') ?>">
									<?php echo form_error('date_of_birth', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
						</div>
						<div class="row mb-3 mb-md-0">
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="religion">Agama</label>
									<select class="form-control custom-select" id="religion" name="religion">
										<option value="">Pilih Salah Satu</option>
										<?php foreach ($religions as $row): ?>
											<option value="<?php echo $row['id'] ?>" <?php if (set_value('religion') && set_value('religion') == $row['id']) echo 'selected'; ?>><?php echo $row['name'] ?></option>
										<?php endforeach ?>
									</select>
									<?php echo form_error('religion', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="stats">Status Perkawinan</label>
									<select class="form-control custom-select" id="stats" name="stats">
										<option value="">Pilih Salah Satu</option>
										<?php foreach ($stats as $row): ?>
											<option value="<?php echo $row['id'] ?>" <?php if (set_value('stats') && set_value('stats') == $row['id']) echo 'selected'; ?>><?php echo $row['name'] ?></option>
										<?php endforeach ?>
									</select>
									<?php echo form_error('stats', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="address">Alamat</label>
								<input type="text" id="address" class="form-control <?php if (form_error('address')) echo "is-invalid"; ?>" name="address" placeholder="Jl. Majapahit No. 10" value="<?php echo set_value('address') ?>">
								<?php echo form_error('address', '<div class="invalid-feedback">', '</div>'); ?>
							</div>
						</div>
						<div class="row mb-3 mb-md-0">
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="village">Desa</label>
									<input type="text" id="village" class="form-control <?php if (form_error('village')) echo "is-invalid"; ?>" name="village" placeholder="Jetis" value="<?php echo set_value('village') ?>">
									<?php echo form_error('village', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="font-weight-bold" for="rt">RT</label>
									<input type="text" id="rt" class="form-control <?php if (form_error('rt')) echo "is-invalid"; ?>" name="rt" placeholder="001" value="<?php echo set_value('rt') ?>">
									<?php echo form_error('rt', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="font-weight-bold" for="rw">RW</label>
									<input type="text" id="rw" class="form-control <?php if (form_error('rw')) echo "is-invalid"; ?>" name="rw" placeholder="001" value="<?php echo set_value('rw') ?>">
									<?php echo form_error('rw', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="district">Kecamatan</label>
								<input type="text" id="district" class="form-control <?php if (form_error('district')) echo "is-invalid"; ?>" name="district" placeholder="Trowulan" value="<?php echo set_value('district') ?>">
								<?php echo form_error('district', '<div class="invalid-feedback">', '</div>'); ?>
							</div>
						</div>
						<div class="row mb-3 mb-md-0">
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="postal_code">Kode Pos</label>
									<input type="text" id="postal_code" class="form-control <?php if (form_error('postal_code')) echo "is-invalid"; ?>" name="postal_code" placeholder="61290" value="<?php echo set_value('postal_code') ?>">
									<?php echo form_error('postal_code', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="phone">No. HP</label>
									<input type="text" id="phone" class="form-control <?php if (form_error('phone')) echo "is-invalid"; ?>" name="phone" placeholder="085732405xxx" value="<?php echo set_value('phone') ?>">
									<?php echo form_error('phone', '<div class="invalid-feedback">', '</div>'); ?>
								</div>
							</div>
						</div>
					</div>

					<div class="tab">
						<h4>Riwayat Pendidikan</h4>
						<div class="form-education">
							<div class="row mb-3 mb-md-0">
								<div class="col-md-4">
									<div class="form-group">
										<label class="font-weight-bold" for="education_id">Jenjang Pendidikan</label>
										<select class="form-control custom-select" id="education_id" name="education_id[]">
											<option value="">Pilih Salah Satu</option>
											<?php foreach ($educations as $row): ?>
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
						<div class="row col-md-12 mt-2">
							<!-- <button type="button" class="btn btn-secondary py-2 px-4 mr-3 delete-education" id="delEducation">Hapus</button> -->
							<button type="button" class="btn btn-primary py-2 px-4 add-education" id="addEducation">Tambah</button>
						</div>
					</div>

					<div class="tab">
						<h4>Pengalaman Kerja</h4>
						<div class="form-experience">
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
						<div class="row col-md-12 mt-2">
							<!-- <button type="button" class="btn btn-secondary py-2 px-4 mr-3 delete-experience" id="delEducation">Hapus</button> -->
							<button type="button" class="btn btn-primary py-2 px-4 add-experience" id="addExperience">Tambah</button>
						</div>
					</div>

					<div class="tab">
						<h4>Bahasa Yang Dikuasai</h4>
						<div class="form-language">
							<div class="row form-group">
								<div class="col-md-12 mb-3 mb-md-0">
									<select class="form-control custom-select" id="languages" name="languages[]">
										<option value="">Pilih Salah Satu</option>
										<?php foreach ($languages as $row): ?>
											<option value="<?php echo $row['id'] ?>"><?php echo $row['language'] ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
						</div>
						<div class="row col-md-12 mt-2">
							<!-- <button type="button" class="btn btn-secondary py-2 px-4 mr-3 delete-experience" id="delEducation">Hapus</button> -->
							<button type="button" class="btn btn-primary py-2 px-4 add-language" id="addLanguage">Tambah</button>
						</div>
					</div>

					<div class="tab">
						<h4>Tambahan Informasi</h4>
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="desired_position">Jabatan Yang Diinginkan</label>
								<input type="text" id="desired_position" class="form-control" name="desired_position" placeholder="Direktur">
							</div>
						</div>
						<div class="row mb-3 mb-md-0">
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="desired_location">Lokasi Yang Diinginkan</label>
									<select class="form-control custom-select" id="desired_location" name="desired_location">
										<option value="domestic">Dalam Negeri</option>
										<option value="overseas">Luar Negeri</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="font-weight-bold" for="desired_region">Wilayah Yang Diinginkan</label>
									<select class="form-control custom-select" id="desired_region" name="desired_region">
										<option value="residence">Wilayah Tempat Tinggal</option>
										<option value="other">Wilayah Lain</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="desired_salary">Gaji Yang Diinginkan</label>
								<input type="text" id="desired_salary" class="form-control" name="desired_salary" placeholder="4000000">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="desired_description">Keterangan Kerja</label>
								<input type="text" id="desired_description" class="form-control" name="desired_description" placeholder="Bidan di Puskesmas">
							</div>
						</div>
					</div>
					<hr>
					<div class="row mt-5">
						<button type="button" class="btn btn-secondary py-2 px-4 mr-3" id="prevButton" onclick="nextPrev(-1)">Sebelumya</button>
						<button type="button" class="btn btn-primary py-2 px-4" id="nextButton" onclick="nextPrev(1)">Selanjutnya</button>
					</div>
				</form>
			</div>

			<!-- Education Copy -->
			<div class="copy-education d-none">
				<hr>
				<div class="row mb-3 mb-md-0 control-group">
					<div class="col-md-4">
						<div class="form-group">
							<label class="font-weight-bold" for="education_id">Jenjang Pendidikan</label>
							<select class="form-control custom-select" id="education_id" name="education_id[]">
								<option value="">Pilih Salah Satu</option>
								<?php foreach ($educations as $row): ?>
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
							<?php foreach ($languages as $row): ?>
								<option value="<?php echo $row['id'] ?>"><?php echo $row['language'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="p-4 mb-3 bg-white">
					<h3 class="h5 text-black mb-3">Contact Info</h3>
					<p class="mb-0 font-weight-bold">Address</p>
					<p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

					<p class="mb-0 font-weight-bold">Phone</p>
					<p class="mb-4"><a href="#">+1 232 3235 324</a></p>

					<p class="mb-0 font-weight-bold">Email Address</p>
					<p class="mb-0"><a href="#">youremail@domain.com</a></p>

				</div>
				
				<div class="p-4 mb-3 bg-white">
					<h3 class="h5 text-black mb-3">More Info</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
					<p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab

	function showTab(n) {
		// This function will display the specified tab of the form ...
		var x = document.getElementsByClassName("tab");
		x[n].style.display = "block";
		// ... and fix the Previous/Next buttons:
		if (n == 0) {
			document.getElementById("prevButton").style.display = "none";
		} else {
			document.getElementById("prevButton").style.display = "inline";
		}
		if (n == (x.length - 1)) {
			document.getElementById("nextButton").innerHTML = "Daftar";
		} else if (n == x.length) {
			document.getElementById("nextButton").type = "submit";
		}
		else {
			document.getElementById("nextButton").innerHTML = "Selanjutnya";
		}
		// ... and run a function that displays the correct step indicator:
	}

	function nextPrev(n) {
		// This function will figure out which tab to display
		var x = document.getElementsByClassName("tab");
		// Exit the function if any field in the current tab is invalid:
		// if (n == 1) return false;
		// Hide the current tab:
		x[currentTab].style.display = "none";
		// Increase or decrease the current tab by 1:
		currentTab = currentTab + n;
		// if you have reached the end of the form... :
		if (currentTab >= x.length) {
			//...the form gets submitted:
			document.getElementById("regForm").submit();
			return false;
		}
		// Otherwise, display the correct tab:
		showTab(currentTab);
		$(window).scrollTop(0);
	}

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
