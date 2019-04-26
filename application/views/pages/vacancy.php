<div class="unit-5 overlay" style="background-image: url('<?php echo base_url(); ?>assets/pages/images/hero_1.jpg');">
	<div class="container text-center">
		<h2 class="mb-0">Categories / Candidates</h2>
		<p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Categories</span></p>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto text-center mb-5 section-heading">
				<h2 class="mb-5">Popular Categories</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-calculator mb-3 text-primary"></span>
					<h2>Accounting / Finanace</h2>
					<span class="counting">10,391</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="200">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-wrench mb-3 text-primary"></span>
					<h2>Automotive Jobs</h2>
					<span class="counting">192</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="300">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-worker mb-3 text-primary"></span>
					<h2>Construction / Facilities</h2>
					<span class="counting">1,021</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="400">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-telecommunications mb-3 text-primary"></span>
					<h2>Telecommunications</h2>
					<span class="counting">1,219</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="500">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-stethoscope mb-3 text-primary"></span>
					<h2>Healthcare</h2>
					<span class="counting">482</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="600">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-computer-graphic mb-3 text-primary"></span>
					<h2>Design, Art &amp; Multimedia</h2>
					<span class="counting">5,409</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="700">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-trolley mb-3 text-primary"></span>
					<h2>Transportation &amp; Logistics</h2>
					<span class="counting">291</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="800">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-restaurant mb-3 text-primary"></span>
					<h2>Restaurant / Food Service</h2>
					<span class="counting">329</span>
				</a>
			</div>
		</div>

	</div>
</div>

<div class="site-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
				<h2 class="mb-5 h3">Daftar Lowongan Pekerjaan</h2>
				<div class="rounded border jobs-wrap">

					<?php foreach ($vacancies as $row): ?>
						<a href="<?php echo base_url() ?>vacancies/<?php echo $row['id'] ?>" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
							<div class="company-logo blank-logo text-center text-md-left pl-3">
								<img src="<?php echo base_url(); ?>upload/vacancies/thumbnails/<?php echo $row['thumbnail'] ?>" alt="thumbnail" class="img-fluid mx-auto">
							</div>
							<div class="job-details h-100">
								<div class="p-3 align-self-center">
									<h3><?php echo $row['position'] ?></h3>
									<div class="d-block d-lg-flex">
										<div class="mr-3"><span class="icon-suitcase mr-1"></span> <?php echo $row['company'] ?></div>
										<div class="mr-3"><span class="icon-room mr-1"></span> <?php echo $row['city'] .', '. $row['country'] ?></div>
										<?php if ($row['show_salary'] == 1) { ?>
											<div><span class="icon-money mr-1"></span> Tidak ditampilkan</div>
										<?php } else { ?>	
											<div><span class="icon-money mr-1"></span> Rp<?php echo number_format($row['min_salary']) ?> &mdash; Rp<?php echo number_format($row['max_salary']) ?></div>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="job-category align-self-center">
								<div class="p-3">
									<span class="text-danger p-2 rounded border border-danger"><?php echo DateTime::createFromFormat('Y-m-d', $row['deadline'])->format('d M y'); ?></span>
								</div>
							</div>  
						</a>
					<?php endforeach ?>

				</div>
			</div>
		</div>
	</div>
</div>
