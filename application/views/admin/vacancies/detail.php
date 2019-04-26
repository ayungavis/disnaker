<div class="container-fluid mt-4">
	<div class="animated fadeIn">
		<div class="card">
			<div class="card-header">
				Detail Lowongan Kerja
			</div>
			<div class="card-body">
				<div class="row mb-3">
					<div class="col-md-2">
						<p><strong>Logo Perusahaan</strong></p>
					</div>
					<div class="col-md-10">
						<img src="<?php echo base_url(); ?>upload/vacancies/thumbnails/<?php echo $vacancy['thumbnail']; ?>" alt="logo-perusahaan">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p><strong>Nama Perusahaan</strong></p>
					</div>
					<div class="col-md-10">
						<p><?php echo $vacancy['company']; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p><strong>Jabatan</strong></p>
					</div>
					<div class="col-md-10">
						<p><?php echo $vacancy['position']; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p><strong>Deskripsi Pekerjaan</strong></p>
					</div>
					<div class="col-md-10">
						<p><?php echo $vacancy['description']; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p><strong>Kualifikasi Minimum</strong></p>
					</div>
					<div class="col-md-10">
						<p><?php echo $vacancy['requirement']; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p><strong>Kisaran Gaji (Rp)</strong></p>
					</div>
					<div class="col-md-10">
						<?php if (!empty($row['min_salary']) && !empty($row['max_salary'])) { ?>
							<p><?php echo number_format($vacancy['min_salary']) .' - '. number_format($vacancy['max_salary']); ?></p>
						<?php } else { ?>
							<p><?php echo "Kisaran gaji belum ditambahkan." ?></p>
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p><strong>Gaji Ditampilkan</strong></p>
					</div>
					<div class="col-md-10">
						<?php 
							if ($vacancy['show_salary']) { $show_salary = 'Ya'; }
							else { $show_salary = 'Tidak'; }
						?>
						<p><?php echo $show_salary; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p><strong>Alamat</strong></p>
					</div>
					<div class="col-md-10">
						<p><?php echo $vacancy['address']; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p><strong>Kota</strong></p>
					</div>
					<div class="col-md-10">
						<p><?php echo $vacancy['city']; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p><strong>Provinsi</strong></p>
					</div>
					<div class="col-md-10">
						<p><?php echo $vacancy['province']; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p><strong>Negara</strong></p>
					</div>
					<div class="col-md-10">
						<p><?php echo $vacancy['country']; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p><strong>Domestik</strong></p>
					</div>
					<div class="col-md-10">
						<?php 
							if ($vacancy['is_domestic']) { $is_domestic = 'Ya'; }
							else { $is_domestic = 'Tidak'; }
						?>
						<p><?php echo $is_domestic; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p><strong>Batas Akhir</strong></p>
					</div>
					<div class="col-md-10">
						<p><?php echo DateTime::createFromFormat('Y-m-d', $vacancy['deadline'])->format('l, d F Y'); ?></p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo base_url() ?>admin/vacancies" class="btn btn-primary">Kembali</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
