<div class="unit-5 overlay" style="background-image: url('<?php echo base_url() ?>assets/pages/images/hero_2.jpg');">
	<div class="container text-center">
		<h2 class="mb-0"><?php echo $vacancy['position'] ?></h2>
		<p class="mb-0 unit-6"><a href="<?php echo base_url() ?>">Beranda</a> <span class="sep">></span> <span>Lowongan Kerja</span></p>
	</div>
</div>

<div class="site-section bg-light">
	<div class="container">
		<div class="row">
	 
			<div class="col-md-12 col-lg-8 mb-5">
			
				<div class="p-5 bg-white">

					<div class="mb-4 mb-md-5 mr-5">
					 <div class="job-post-item-header d-flex align-items-center">
						 <h2 class="mr-3 text-black h4"><?php echo $vacancy['position'] ?></h2>
					 </div>
					 <div class="job-post-item-body d-block d-md-flex">
						 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#"><?php echo $vacancy['company'] ?></a></div>
						 <div><span class="fl-bigmug-line-big104"></span> <span><?php echo $vacancy['city'] .', '. $vacancy['country'] ?></span></div>
					 </div>
					</div>
				
					<div class="img-border mb-5">
						<img src="<?php echo base_url() ?>upload/vacancies/<?php echo $vacancy['image'] ?>" alt="logo-perusahaan" class="img-fluid rounded" width="100%">
					</div>
				
					<br>
					<h5>Deskripsi Pekerjaan</h5>
					<p><?php echo $vacancy['description'] ?></p>
					<br>
					<h5>Kualifikasi Minimum (Syarat)</h5>
					<p><?php echo $vacancy['requirement'] ?></p>
					<br>
					<h5>Informasi Perusahaan</h5>
					<div class="row">
						<div class="col-md-2">
							<p><strong>Alamat</strong></p>
						</div>
						<div class="col-md-10">
							<p><?php echo $vacancy['address'] ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<p><strong>Kota</strong></p>
						</div>
						<div class="col-md-10">
							<p><?php echo $vacancy['city'] .', '. $vacancy['province'] ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<p><strong>Negara</strong></p>
						</div>
						<div class="col-md-10">
							<p><?php echo $vacancy['country'] ?></p>
						</div>
					</div>

					<p class="mt-5"><a href="<?php echo base_url() ?>register" class="btn btn-primary py-2 px-4">Lamar Sekarang</a></p>
				</div>
			</div>

			<div class="col-lg-4">
				
				
				<div class="p-4 mb-3 bg-white">
					<h5>Kisaran Gaji</h5>
					<?php if ($vacancy['show_salary'] == 1) { ?>
						<p><span class="icon-money mr-1"></span> Tidak ditampilkan</p>
					<?php } else { ?>	
						<p><span class="icon-money mr-1"></span> Rp<?php echo number_format($vacancy['min_salary']) ?> &mdash; Rp<?php echo number_format($vacancy['max_salary']) ?></p>
					<?php } ?>
					<br>
					<h5>Batas Akhir</h5>
					<p><span class="icon-calendar mr-1"></span> <?php echo DateTime::createFromFormat('Y-m-d', $vacancy['deadline'])->format('l, d F Y'); ?></p>
					<p class="mt-5"><a href="<?php echo base_url() ?>register" class="btn btn-primary py-2 px-4">Lamar Sekarang</a></p>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="site-section">
	<div class="container">
		<div class="row justify-content-center text-center mb-5">
			<div class="col-md-6" data-aos="fade" >
				<h2>Frequently Ask Questions</h2>
			</div>
		</div>
		

		<div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
			<div class="col-md-8">
				<div class="accordion unit-8" id="accordion">
				<div class="accordion-item">
					<h3 class="mb-0 heading">
						<a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is the name of your company<span class="icon"></span></a>
					</h3>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="body-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae cumque perspiciatis aperiam accusantium facilis provident aspernatur nisi optio debitis dolorum, est eum eligendi vero aut ad necessitatibus nulla sit labore doloremque magnam! Ex molestiae, dolor tempora, ad fuga minima enim mollitia consequuntur, necessitatibus praesentium eligendi officia recusandae culpa tempore eaque quasi ullam magnam modi quidem in amet. Quod debitis error placeat, tempore quasi aliquid eaque vel facilis culpa voluptate.</p>
						</div>
					</div>
				</div> <!-- .accordion-item -->
				
				<div class="accordion-item">
					<h3 class="mb-0 heading">
						<a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">How much pay for 3  months?<span class="icon"></span></a>
					</h3>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="body-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
						</div>
					</div>
				</div> <!-- .accordion-item -->

				<div class="accordion-item">
					<h3 class="mb-0 heading">
						<a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Do I need to register?  <span class="icon"></span></a>
					</h3>
					<div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="body-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
						</div>
					</div>
				</div> <!-- .accordion-item -->

				<div class="accordion-item">
					<h3 class="mb-0 heading">
						<a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Who should I contact in case of support.<span class="icon"></span></a>
					</h3>
					<div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="body-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
						</div>
					</div>
				</div> <!-- .accordion-item -->

			</div>
			</div>
		</div>
	
	</div>
</div>
