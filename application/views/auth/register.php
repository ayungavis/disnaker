    <body class="app flex-row align-items-center">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card mx-4">
						<div class="card-body p-4">
							<h1>Register</h1>
							<p class="text-muted">Create your account</p>
							<form method="post">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="icon-user"></i>
										</span>
									</div>
									<input class="form-control <?php if (form_error('name')) echo "is-invalid"; ?>" type="text" name="name" placeholder="Name" value="<?php echo set_value('name') ?>" autofocus="autofocus">
									<?php echo form_error('name', '<div class="invalid-feedback pl-5">', '</div>'); ?>
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">@</span>
									</div>
									<input class="form-control <?php if (form_error('email')) echo "is-invalid"; ?>" type="text" name="email" placeholder="Email" value="<?php echo set_value('email') ?>">
									<?php echo form_error('email', '<div class="invalid-feedback pl-5">', '</div>'); ?>
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="icon-lock"></i>
										</span>
									</div>
									<input class="form-control <?php if (form_error('password')) echo "is-invalid"; ?>" type="password" name="password" placeholder="Password">
									<?php echo form_error('password', '<div class="invalid-feedback pl-5">', '</div>'); ?>
								</div>
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="icon-lock"></i>
										</span>
									</div>
									<input class="form-control <?php if (form_error('confirm_password')) echo "is-invalid"; ?>" type="password" name="confirm_password" placeholder="Repeat password">
								</div>
								<button class="btn btn-block btn-success" type="submit">Create Account</button>
							</form>
						</div>
						<div class="card-footer p-4">
							<div class="row">
								<div class="col-12 text-center">
									<p>Did you have an account? <a href="<?php echo base_url('login'); ?>">Login</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Bootstrap and necessary plugins-->
		<script src="vendors/jquery/js/jquery.min.js"></script>
		<script src="vendors/popper.js/js/popper.min.js"></script>
		<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendors/pace-progress/js/pace.min.js"></script>
		<script src="vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
		<script src="vendors/@coreui/coreui-pro/js/coreui.min.js"></script>
	</body>
</html>
