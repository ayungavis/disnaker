<div class="container mt-3">
	<div class="d-flex justify-content-center mt-3 mb-3">
		<a class="btn btn-secondary mr-3 d-print-none" href="<?php echo base_url() ?>admin/seekers">
			<i class="fa fa-arrow-left"></i> Kembali
		</a>
		<a class="btn btn-info mr-3 d-print-none" href="<?php echo base_url() ?>admin/seekers/detail/potrait/<?php echo $seeker['user_id'] ?>" onclick="javascript:window.print();">
			<i class="fa fa-print"></i> Cetak / Simpan
		</a>
		<!-- <a class="btn btn-info mr-1 d-print-none" href="#">
			<i class="fa fa-save"></i> Simpan
		</a> -->
	</div>
	<table class="table table-bordered text-uppercase">
		<tr class="text-right">
			<td colspan="4">
				FORMULIR: AK/II
			</td>
		</tr>
		<tr class="text-center">
			<td colspan="4">
				<strong>DAFTAR ISIAN PENCARI KERJA</strong>
			</td>
		</tr>
		<tr>
			<td style="width: 10px;">
				No.
			</td>
			<td class="text-center" colspan="3">
				DIISI DENGAN HURUF CETAK
			</td>
		</tr>
		<tr>
			<td class="p-3" style="width: 10px;">
				1.
			</td>
			<td class="p-3" style="width: 450px;">
				PEMERINTAH KOTA MOJOKERTO <br>
				DISKOP USAHA MIKRO DAN TENAGA KERJA KOTA MOJOKERTO
			</td>
			<td>
				<br>
				Kode Wilayah: _____________
			</td>
			<td style="width: 400px;">
				<br>
				Provinsi: ______________ Kode Wilayah
				<!-- <div class="float-right">Kode Wilayah</div> -->
			</td>
		</tr>
		<tr>
			<td class="p-3" style="width: 10px;">
				2.
			</td>
			<td class="p-3">
				NOMOR DAN TANGGAL PENDAFTARAN <br>
				NOMOR INDUK KEPENDUDUKAN
			</td>
			<td colspan="2">
				<?php echo $seeker['id'] .' - '. DateTime::createFromFormat('Y-m-d H:i:s', $seeker['created_at'])->format('d/m/Y') ?> <br>
				<?php echo $seeker['nik'] ?>
			</td>
		</tr>
		<tr>
			<td class="p-3" style="width: 10px;">
				3.
			</td>
			<td>
				<strong>KETERANGAN UMUM</strong><br>
				3.1 NAMA LENGKAP <br>
				3.2 TEMPAT, TANGGAL LAHIR <br>
				3.3 JENIS KELAMIN <br>
				3.4 ALAMAT <br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TELP / HP <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KODE POS <br>
				3.5 STATUS
			</td>
			<td class="text-uppercase" colspan="2">
				<br>
				<?php echo $seeker['name'] ?> <br>
				<?php echo $seeker['place_of_birth'] .', '. DateTime::createFromFormat('Y-m-d', $seeker['date_of_birth'])->format('d F Y') ?> <br>
				<?php 
					if ($seeker['gender'] = 'male') $gender = 'Laki-laki';
					if ($seeker['gender'] = 'female') $gender = 'Perempuan';
				?>
				<?php echo $gender; ?> <br>
				JL. <?php echo $seeker['address'] ?> RT <?php echo $seeker['rt'] ?> / RW <?php echo $seeker['rw'] ?> <br>
				KEL. <?php echo $seeker['village'] ?> KEC. <?php echo $seeker['district'] ?> KOTA MOJOKERTO <br>
				<?php echo $seeker['phone'] ?> <br>
				<?php echo $seeker['email']; ?> <br>
				<?php echo $seeker['postal_code'] ?> <br>
				<?php 
					if ($seeker['stat_id'] == 1) $stats = 'Kawin';
					if ($seeker['stat_id'] == 2) $stats = 'Belum Kawin';
					if ($seeker['stat_id'] == 3) $stats = 'Cerai Hidup';
					if ($seeker['stat_id'] == 4) $stats = 'Cerai Mati';
				?>
				<?php echo $stats; ?>
			</td>
		</tr>
		<tr>
			<td class="p-3" style="width: 10px;">
				4.
			</td>
			<td>
				<strong>PENDIDIKAN FORMAL</strong> <br>
				4.1 PENDIDIKAN TERTINGGI <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JURUSAN <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KETERAMPILAN <br>
				4.2 TAHUN LULUS
			</td>
			<td colspan="2">
				<br>
				<?php echo $max_education['school_name'] ?> <br>
				<?php 
					if ($max_education['department'] == null) $department = "-";
					else $department = $max_education['department'];
				?>
				<?php echo $department; ?> <br>
				- <br>
				<?php echo $max_education['year_out'] ?>
			</td>
		</tr>
		<tr>
			<td class="p-3" style="width: 10px;">
				5.
			</td>
			<td>
				<strong>BAHASA ASING YANG DIKUASAI</strong>
			</td>
			<td colspan="2">
				<?php $x = 1; ?>
				<?php foreach ($languages as $row): ?>
					<?php echo $x .'. '. $row['language']; ?> <?php $x++; ?> <br>
				<?php endforeach ?>
			</td>
		</tr>
		<tr>
			<td class="p-3" style="width: 10px;">
				6.
			</td>
			<td colspan="3">
				<strong>PENGALAMAN KERJA</strong> <br>
				<table class="table table-borderless">
					<thead>
						<th>6.1 JABATAN</th>
						<th>6.2 URAIAN TUGAS</th>
						<th>6.3 LAMA KERJA</th>
						<th>6.4 PEMBERI KERJA</th>
					</thead>
					<tbody>
						<?php foreach ($experiences as $row): ?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td><?php echo $row['description'] ?></td>
								<?php 
									if ($row['year_out'] == $row['year_in']) $duration = '< 1 tahun';
									else $duration = $row['year_out']-$row['year_in'] .' tahun';
								?>
								<td><?php echo $duration; ?></td>
								<td><?php echo $row['company'] ?></td>
							</tr>	
						<?php endforeach ?>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td class="p-3" style="width: 10px;">
				7.
			</td>
			<td>
				<strong>JABATAN YANG DIINGINKAN</strong> <br>
				<strong>LOKASI</strong> <br>
				<strong>BERSARNYA UPAH YANG DIINGINKAN</strong> <br>
			</td>
			<td colspan="2">
				<?php echo $seeker['position'] ?> <br>
				<?php 
					if ($seeker['location'] == 'domestic') $location = 'Dalam negeri';
					if ($seeker['location'] == 'overseas') $location = 'Luar negeri';

					if ($seeker['region'] == 'residence') $region = 'Wilayah tempat tinggal';
					if ($seeker['region'] == 'other') $region = 'Wilayah lainnya';
				?>
				<?php echo $location ?> (<?php echo $region; ?>) <br>
				Rp <?php echo number_format($seeker['salary']) ?>
			</td>
		</tr>
		<tr>
			<td class="p-3" style="width: 10px;">
				8.
			</td>
			<td>
				<strong>KETERANGAN KERJA</strong> <br>
			</td>
			<td colspan="2">
				<?php echo $seeker['description'] ?> <br>
			</td>
		</tr>
		<tr>
			<td class="p-3" style="width: 10px;"></td>
			<td colspan="3">
				<table class="table table-borderless">
					<thead>
						<th class="text-center">TANDA TANGAN PENCARI KERJA</th>
						<th class="text-center">FOTO</th>
						<th class="text-center">PENGANTAR KERJA / PETUGAS ANTAR KERJA</th>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">
								<br><br><br>
								<?php echo $seeker['name'] ?>
							</td>
							<td></td>
							<td class="text-center">
								<br><br><br>
								(....................................................................)
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</table>
	<div class="d-flex justify-content-center mb-3">
		<a class="btn btn-secondary mr-3 d-print-none" href="<?php echo base_url() ?>admin/seekers">
			<i class="fa fa-arrow-left"></i> Kembali
		</a>
		<a class="btn btn-info mr-3 d-print-none" href="<?php echo base_url() ?>admin/seekers/detail/potrait/<?php echo $seeker['user_id'] ?>" onclick="javascript:window.print();">
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
