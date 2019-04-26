    <body class="app flex-row align-items-center">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-5">

					<?php echo $this->session->flashdata('message'); ?>

					<div class="card-group">
						<div class="card p-4">
							<div class="card-body">
								<h1>Login</h1>
								<p class="text-muted">Sign In to your account</p>
								<form method="post">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="icon-user"></i>
											</span>
										</div>
										<input class="form-control <?php if (form_error('email')) echo "is-invalid"; ?>" type="text" name="email" placeholder="Email" value="<?php echo set_value('email') ?>" autofocus="autofocus">
										<?php echo form_error('email', '<div class="invalid-feedback pl-5">', '</div>'); ?>
									</div>
									<div class="input-group mb-4">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="icon-lock"></i>
											</span>
										</div>
										<input class="form-control <?php if (form_error('password')) echo "is-invalid"; ?>" type="password" name="password" placeholder="Password">
										<?php echo form_error('password', '<div class="invalid-feedback pl-5">', '</div>'); ?>
									</div>
									<div class="row">
										<div class="col-6">
											<button class="btn btn-primary px-4" type="submit">Login</button>
										</div>
										<div class="col-6 text-right">
											<button class="btn btn-link px-0" type="button">Forgot password?</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
							<div class="card-body text-center">
								<div>
									<h2>Sign up</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a class="btn btn-primary active mt-3" href="<?php echo base_url('register'); ?>">Register Now!</a>
								</div>
							</div>
						</div> -->
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
