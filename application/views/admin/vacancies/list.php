<div class="container-fluid mt-4">
	<div class="animated fadeIn">
		<div class="card">
			<div class="card-header">
				Daftar Lowongan Pekerjaan
			</div>
			<div class="card-body">
	
				<?php echo $this->session->flashdata('message'); ?>

				<table class="table table-striped table-bordered datatable">
					<thead>
						<tr>
							<th>#</th>
							<th>Perusahaan</th>
							<th>Jabatan</th>
							<th>Kisaran Gaji</th>
							<th>Alamat</th>
							<th>Batas Akhir</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $x = 1; ?>
						<?php if (! empty($vacancies)) { ?>
							<?php foreach ($vacancies as $row) { ?>
								<tr>
									<td><?php echo $x; $x++; ?></td>
									<td><?php echo $row['company'] ?></td>
									<td><?php echo $row['position'] ?></td>
									<?php if (!empty($row['min_salary']) && !empty($row['max_salary'])) { ?>
										<td><?php echo number_format($row['min_salary']) .' - '. number_format($row['max_salary']) ?></td>
									<?php } else { ?>
										<td><?php echo "Kisaran gaji belum ditambahkan." ?></td>
									<?php } ?>
									<td><?php echo $row['city'] .', '. $row['country'] ?></td>
									<td><?php echo $row['deadline'] ?></td>
									<td>
										<a class="btn btn-success" href="<?php echo base_url() ?>admin/vacancies/detail/<?php echo $row['id'] ?>">
											<i class="fa fa-search-plus"></i>
										</a>
										<a class="btn btn-info" href="<?php echo base_url() ?>admin/vacancies/edit/<?php echo $row['id'] ?>">
											<i class="fa fa-edit"></i>
										</a>
										<a class="btn btn-danger" href="<?php echo base_url() ?>admin/vacancies/delete/<?php echo $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus?');">
											<i class="fa fa-trash-o"></i>
										</a>
									</td>
								</tr>
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function confirm(id) {
		var url = '<?php echo base_url() ?>'
		stats = confirm('Yakin ingin dihapus permanen?');
		if (stats == true) {
			return window.location = url + 'admin/vacancies/delete/' + id;
		}
		else {
			return false;
		}
	}
</script>
