<div class="container-fluid mt-3">
	<div class="d-flex justify-content-center mt-3 mb-3">
		<a class="btn btn-secondary mr-3 d-print-none" href="<?php echo base_url() ?>admin/seekers">
			<i class="fa fa-arrow-left"></i> Kembali
		</a>
		<a class="btn btn-info mr-3 d-print-none" href="<?php echo base_url() ?>admin/seekers/detail/landscape/<?php echo $seeker['user_id'] ?>" onclick="javascript:window.print();">
			<i class="fa fa-print"></i> Cetak / Simpan
		</a>
		<!-- <a class="btn btn-info mr-1 d-print-none" href="#">
			<i class="fa fa-save"></i> Simpan
		</a> -->
	</div>
	<table class="table table-borderless">
		<tr>
			<td class="p-3" style="width: 55%;">
				<div class="row">
					<div class="col-md-2">
						<img src="<?php echo base_url() ?>assets/img/logo-mojokerto.png" width="60px">
					</div>
					<div class="col-md-8 text-center">
						<strong>PEMERINTAH KOTA MOJOKERTO</strong> <br>
						<strong>DINAS TENAGA KERJA DAN TRANSMIGRASI</strong> <br>
						<strong>KARTU TANDA BUKTI PENDAFTARAN PENCARI KERJA</strong>
					</div>
					<div class="col-md-2 text-right">
						<small>KARTU AK/I</small>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-2 text-center">
						<br><br><br>FOTO <br><br><br><br><br><br>
						TTD<br>
						Pencari Kerja
					</div>
					<div class="col-md-4">
						NPPK <br>
						NIK <br>
						NAMA LENGKAP <br>
						TEMPAT / TGL LAHIR <br>
						JENIS KELAMIN <br>
						STATUS <br>
						AGAMA <br><br>
						ALAMAT <br>
					</div>
					<div class="col-md-6">
						: <?php echo $seeker['id'] .' - '. DateTime::createFromFormat('Y-m-d H:i:s', $seeker['created_at'])->format('d/m/Y') ?> <br>
						: <?php echo $seeker['nik'] ?> <br>
						: <strong><?php echo $seeker['name'] ?></strong> <br>
						: <?php echo $seeker['place_of_birth'] .', '. DateTime::createFromFormat('Y-m-d', $seeker['date_of_birth'])->format('d F Y') ?> <br>
						<?php 
							if ($seeker['gender'] == 'male') $gender = '1';
							if ($seeker['gender'] == 'female') $gender = '2';
						?>
						<div class="d-flex flex-row justify-content-between">
							<div>: 1. Laki-laki</div>
							<div>2. Perempuan</div>
							<div style="width: 20px; height: 20px; border: 1px solid;" class="text-center"><?php echo $gender; ?></div>
						</div>
						<?php 
							if ($seeker['stat_id'] == 1) $stats = '1';
							if ($seeker['stat_id'] == 2) $stats = '2';
							if ($seeker['stat_id'] == 3) $stats = '-';
							if ($seeker['stat_id'] == 4) $stats = '-';
						?>
						<div class="d-flex flex-row justify-content-between">
							<div>: 1. Kawin</div>
							<div>2. Belum Kawin</div>
							<div style="width: 20px; height: 20px; border: 1px solid;" class="text-center"><?php echo $stats; ?></div>
						</div>
						<div class="d-flex flex-row justify-content-between">
							<div>: 1. Islam</div>
							<div>2. Katholik</div>
							<div>3. Protestan</div>
							<div style="width: 20px; height: 20px; border: 1px solid;" class="text-center"><?php echo $seeker['religion_id']; ?></div>
						</div>
						<div class="d-flex flex-row justify-content-between">
							<div>&nbsp;&nbsp;4. Hindu</div>
							<div>5. Budha</div>
							<div>6. Lainnya</div>
							<div style="width: 20px; height: 20px; border: 0px solid;" class="text-center"></div>
						</div>
						: Jl. <?php echo $seeker['address'] ?> <br>
						&nbsp;&nbsp;RT. <?php echo $seeker['rt'] ?> / RW <?php echo $seeker['rw'] ?> Kel. <?php echo $seeker['village'] ?> <br>
						&nbsp;&nbsp;Kec. <?php echo $seeker['district'] ?> Kota Mojokerto
					</div>
				</div>
			</td>
			<td style="width: 45%;">
				<strong>PENDIDIKAN FORMAL</strong>
				<table class="table table-sm table-bordered" style="border: 1px solid black;">
					<thead>
						<th class="text-center" width="15px" scope="col">No.</th>
						<th class="text-center">Tingkat Pendidikan</th>
						<th class="text-center">Jurusan</th>
						<th class="text-center" width="150px">Tahun Lulus</th>
					</thead>
					<tbody>
						<?php $x = 1; $n = 0; $found = 0; $length = count($educations); ?>
						<?php foreach ($edu_name as $row): ?>
							<tr>
								<td class="text-center"><?php echo $x; $x++; ?></td>
								<td class=""><?php echo $row['name'] ?></td>
								<td class="text-center">
									<?php 
										if (!empty($educations[$n]['education_id'])) {
											if ($row['id'] == $educations[$n]['education_id']) {
												echo $educations[$n]['school_name'];
												$found++;
											}
											else echo ".............................................";
										}
										else echo ".............................................";
									?>
								</td>
								<td class="text-center">
									<div class="float-left">Th. </div>
									<?php 
										if (!empty($educations[$n]['education_id'])) {
											if ($row['id'] == $educations[$n]['education_id']) {
												echo $educations[$n]['year_out'];
												$found++;
											}
											else echo "..............................";
										}
										else echo "..............................";
									?>
								</td>
							</tr>
							<?php 
								if ($found == 2) {
									$n++;
								}
							?>
						<?php endforeach ?>
					</tbody>
				</table>

				<strong>KETERAMPILAN / PENGALAMAN KERJA</strong>
				<table class="table table-sm table-bordered">
					<tbody>
						<tr>
							<td class="text-center" width="15px">1.</td>
							<td width="400px">
								<?php 
									if (!empty($experiences[0]['company'])) {
										echo $experiences[0]['position'] .' di '. $experiences[0]['company'];
									}
									else {
										echo ".............................................";
									}
								?>
							</td>
							<td class="text-center">
								<div class="float-left">Th. </div>
								<?php 
									if (!empty($experiences[0]['company'])) {
										echo $experiences[0]['year_in'] .' - '. $experiences[0]['year_out'];
									}
									else {
										echo "..............................";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center" width="15px">2.</td>
							<td width="400px">
								<?php 
									if (!empty($experiences[1]['company'])) {
										echo $experiences[1]['position'] .' di '. $experiences[1]['company'];
									}
									else {
										echo ".............................................";
									}
								?>
							</td>
							<td class="text-center">
								<div class="float-left">Th. </div>
								<?php 
									if (!empty($experiences[1]['company'])) {
										echo $experiences[1]['year_in'] .' - '. $experiences[1]['year_out'];
									}
									else {
										echo "..............................";
									}
								?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="row">
					<div class="col-md-6">
						<?php 
							$timestamp = explode(' ', $seeker['created_at']);
							$time = explode('-', $timestamp[0]);
							$expired = $time[0] + 2;
							$new_date = $time[2] .'/'. $time[1] .'/'. $expired; 
						?>
						<p class="btn btn-outline-dark"><strong>Berkalu s/d <?php echo $new_date; ?></strong></p>
					</div>
					<div class="col-md-6 text-center">
						Pengantar Kerja / Petugas Antar Kerja <br>
						<br>
						<strong>HARI BUDIONO, S.H., M.H.</strong> <br>
						NIP. 19670806 1987 1 001
					</div>
				</div>
			</td>
		</tr>
	</table>
	<div class="d-flex justify-content-center mb-3">
		<a class="btn btn-secondary mr-3 d-print-none" href="<?php echo base_url() ?>admin/seekers">
			<i class="fa fa-arrow-left"></i> Kembali
		</a>
		<a class="btn btn-info mr-3 d-print-none" href="<?php echo base_url() ?>admin/seekers/detail/landscape/<?php echo $seeker['user_id'] ?>" onclick="javascript:window.print();">
			<i class="fa fa-print"></i> Cetak / Simpan
		</a>
		<!-- <a class="btn btn-info mr-1 d-print-none" href="#">
			<i class="fa fa-save"></i> Simpan
		</a> -->
	</div>
</div>
</div>
</body>
</html>
