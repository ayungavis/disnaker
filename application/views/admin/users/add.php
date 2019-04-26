<div class="container-fluid mt-4">
	<div class="animated fadeIn">
		<form method="post" action="">
			<div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">
							Tambah Pengguna Baru
						</div>
						<div class="card-body">

							<?php echo $this->session->flashdata('message'); ?>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Nama Lengkap</label>
										<input type="text" class="form-control <?php if (form_error('name')) echo "is-invalid"; ?>" id="name" name="name" value="<?php echo set_value('name') ?>">
										<?php echo form_error('name', '<div class="invalid-feedback ">', '</div>'); ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="text" class="form-control <?php if (form_error('email')) echo "is-invalid"; ?>" id="email" name="email" value="<?php echo set_value('email') ?>">
										<?php echo form_error('email', '<div class="invalid-feedback ">', '</div>'); ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="password">Password</label>
										<input type="text" class="form-control <?php if (form_error('password')) echo "is-invalid"; ?>" id="password" name="password">
										<?php echo form_error('password', '<div class="invalid-feedback ">', '</div>'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-header">
							Peran Pengguna
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="role_id">Pilih Salah Satu</label>
										<select class="form-control" id="role_id" name="role_id">
											<?php foreach ($roles as $row): ?>
												<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-block btn-primary">Simpan</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
