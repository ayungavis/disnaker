<div class="container-fluid mt-4">
	<div class="animated fadeIn">
		<div class="card">
			<div class="card-header">
				Daftar Pencari Kerja
			</div>
			<div class="card-body">

				<?php echo $this->session->flashdata('message'); ?>

				<table class="table table-striped table-bordered datatable">
					<thead>
						<tr>
							<th>#</th>
							<th>NPPK</th>
							<th>NIK</th>
							<th>Nama Lengkap</th>
							<th>TTL</th>
							<th>Gender</th>
							<th>Asal</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $x = 1; ?>
						<?php foreach ($seekers as $row): ?>
							<tr>
								<td><?php echo $x; $x++; ?></td>
								<td><?php echo $row['nppk'] ?></td>
								<td><?php echo $row['nik'] ?></td>
								<td><?php echo $row['name'] ?></td>
								<td><?php echo $row['place_of_birth'] .', '. DateTime::createFromFormat('Y-m-d', $row['date_of_birth'])->format('d M Y'); ?></td>
								<?php 
									if ($row['gender'] == 'male') $gender = 'Laki-laki';
									if ($row['gender'] == 'female') $gender = 'Perempuan';
								?>
								<td><?php echo $gender; ?></td>
								<td><?php echo $row['village'] .', '. $row['district'] ?></td>
								<td>
									<a class="btn btn-primary" href="<?php echo base_url() ?>admin/seekers/detail/landscape/<?php echo $row['user_id'] ?>" data-toggle="tooltip" data-placement="top" title="Cetak Kartu AK/I">
										<i class="fa fa-id-card"></i>
									</a>
									<a class="btn btn-success" href="<?php echo base_url() ?>admin/seekers/detail/potrait/<?php echo $row['user_id'] ?>" data-toggle="tooltip" data-placement="top" title="Cetak Formulir AK/II">
										<i class="fa fa-paste"></i>
									</a>
									<a class="btn btn-info" href="<?php echo base_url() ?>admin/seekers/edit/<?php echo $row['user_id'] ?>">
										<i class="fa fa-edit"></i>
									</a>
									<a class="btn btn-danger" href="<?php echo base_url() ?>admin/seekers/delete/<?php echo $row['user_id'] ?>">
										<i class="fa fa-trash-o"></i>
									</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
