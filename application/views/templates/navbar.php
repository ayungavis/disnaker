<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
	<header class="app-header navbar">
		<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="<?php echo base_url(); ?>admin">
			<img class="navbar-brand-full" src="img/brand/logo.svg" width="89" height="25" alt="Diskouminaker">
			<img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="DTK">
		</a>
		<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
			<span class="navbar-toggler-icon"></span>
		</button>
		<ul class="nav navbar-nav d-md-down-none">
			<li class="nav-item px-3">
				<a class="nav-link" href="<?php echo base_url(); ?>" target="_blank">Lihat Website</a>
			</li>
		</ul>
		<ul class="nav navbar-nav ml-auto">
			<li class="nav-item dropdown mr-2">
				<a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					<img class="img-avatar" src="<?php echo base_url(); ?>assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<div class="dropdown-header text-center">
						<strong>Account</strong>
					</div>
					<a class="dropdown-item" href="<?php echo base_url() ?>admin/profile">
						<i class="fa fa-user"></i> Profil Saya
					</a>
					<a class="dropdown-item" href="<?php echo base_url() ?>admin/settings">
						<i class="fa fa-wrench"></i> Pengaturan
					</a>
					<a class="dropdown-item" href="<?php echo base_url() ?>logout">
						<i class="fa fa-sign-out"></i> Keluar
					</a>
				</div>
			</li>
		</ul>
	</header>
