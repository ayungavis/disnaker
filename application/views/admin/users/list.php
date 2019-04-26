<div class="container-fluid mt-4">
	<div class="animated fadeIn">
		<div class="card">
			<div class="card-header">
				Daftar Pengguna
			</div>
			<div class="card-body">

				<?php echo $this->session->flashdata('message'); ?>

				<table class="table table-striped table-bordered datatable">
					<thead>
						<tr>
							<th width="20px">#</th>
							<th>Nama Lengkap</th>
							<th>Email</th>
							<th>Peran</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $x = 1; ?>
						<?php foreach ($users as $row): ?>
							<tr>
								<td><?php echo $x; $x++; ?></td>
								<td><?php echo $row['name'] ?></td>
								<td><?php echo $row['email'] ?></td>
								<?php 
									if ($row['role_id'] == 1) $role = 'Administrator';
									if ($row['role_id'] == 2) $role = 'Standard User';
								?>
								<td><?php echo $role; ?></td>
								<td>
									<!-- <a class="btn btn-success" href="#">
										<i class="fa fa-search-plus"></i>
									</a> -->
									<a class="btn btn-info" href="<?php echo base_url() ?>admin/users/edit/<?php echo $row['id'] ?>">
										<i class="fa fa-edit"></i>
									</a>
									<a class="btn btn-danger" href="<?php echo base_url() ?>admin/users/delete/<?php echo $row['id'] ?>">
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
