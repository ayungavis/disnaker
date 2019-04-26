<div class="site-blocks-cover overlay" style="background-image: url('<?php echo base_url(); ?>assets/pages/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12" data-aos="fade">
				<h1>Cari Lowongan
					<div class="row mb-3">
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-6 mb-3 mb-md-0">
									<input type="text" class="mr-3 form-control border-0 px-4" placeholder="judul pekerjaan atau nama perusahaan">
								</div>
								<div class="col-md-6 mb-3 mb-md-0">
									<div class="input-wrap">
										<span class="icon icon-room"></span>
									<input type="text" class="form-control form-control-block search-input  border-0 px-4" id="autocomplete" placeholder="kota, provinsi, atau wilayah" onFocus="geolocate()">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<input type="submit" class="btn btn-search btn-primary btn-block" value="Search">
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-md-12">
							<p class="small">or browse by category: <a href="#" class="category">Category #1</a> <a href="#" class="category">Category #2</a></p>
						</div>
					</div> -->
				</form>
			</div>
		</div>
	</div>
</div>


<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto text-center mb-5 section-heading">
				<h2 class="mb-5">Kategori Populer</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-calculator mb-3 text-primary"></span>
					<h2>Akutansi / Keuangan</h2>
					<span class="counting">10,391</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="200">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-wrench mb-3 text-primary"></span>
					<h2>Otomotif</h2>
					<span class="counting">192</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="300">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-worker mb-3 text-primary"></span>
					<h2>Konstruksi / Fasilitas</h2>
					<span class="counting">1,021</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="400">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-telecommunications mb-3 text-primary"></span>
					<h2>Telekomunikasi</h2>
					<span class="counting">1,219</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="500">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-stethoscope mb-3 text-primary"></span>
					<h2>Kesehatan</h2>
					<span class="counting">482</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="600">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-computer-graphic mb-3 text-primary"></span>
					<h2>Desain, Seni & Multimedia</h2>
					<span class="counting">5,409</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="700">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-trolley mb-3 text-primary"></span>
					<h2>Transportasi & Logistik</h2>
					<span class="counting">291</span>
				</a>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="800">
				<a href="#" class="h-100 feature-item">
					<span class="d-block icon flaticon-restaurant mb-3 text-primary"></span>
					<h2>Restoran / Pelayanan Makanan</h2>
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
				<h2 class="mb-5 h3">Lowongan Terbaru</h2>
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

				<div class="col-md-12 text-center mt-5">
					<a href="<?php echo base_url() ?>vacancies" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span> Tampilkan Lebih Banyak</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="site-section" data-aos="fade">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 mb-5 mb-md-0">
				
					<div class="img-border">
						<a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
							<span class="icon-wrap">
								<span class="icon icon-play"></span>
							</span>
							<img src="<?php echo base_url(); ?>assets/pages/images/hero_2.jpg" alt="Image" class="img-fluid rounded">
						</a>
					</div>
				
			</div>
			<div class="col-md-5 ml-auto">
				<div class="text-left mb-5 section-heading">
					<h2>Testimoni</h2>
				</div>

				<p class="mb-4 h5 font-italic lineheight1-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque velit eum, id rem eveniet dolor possimus voluptas..&rdquo;</p>
				<p>&mdash; <strong class="text-black font-weight-bold">John Holmes</strong>, Marketing Strategist</p>
				<p><a href="https://vimeo.com/28959265" class="popup-vimeo text-uppercase">Watch Video <span class="icon-arrow-right small"></span></a></p>
			</div>
		</div>
	</div>
</div>


<div class="site-blocks-cover overlay inner-page" style="background-image: url('<?php echo base_url(); ?>assets/pages/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-6 text-center" data-aos="fade">
				<h1 class="h3 mb-0">Pekerjaan Impianmu</h1>
				<p class="h3 text-white mb-5">Sedang Menunggumu</p>
				<p><a href="#" class="btn btn-outline-warning py-3 px-4">Cari Lowongan</a> <a href="#" class="btn btn-warning py-3 px-4">Lamar Sekarang</a></p>
				
			</div>
		</div>
	</div>
</div>



<div class="site-section site-block-feature bg-light">
	<div class="container">
		
		<div class="text-center mb-5 section-heading">
			<h2>Kenapa Memilih Kami?</h2>
		</div>

		<div class="d-block d-md-flex border-bottom">
			<div class="text-center p-4 item border-right" data-aos="fade">
				<span class="flaticon-worker display-3 mb-3 d-block text-primary"></span>
				<h2 class="h4">Lowongan Baru Setiap Hari</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
				<p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
			</div>
			<div class="text-center p-4 item" data-aos="fade">
				<span class="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
				<h2 class="h4">Lowongan Pekerjaan Kreatif</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
				<p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
			</div>
		</div>
		<div class="d-block d-md-flex">
			<div class="text-center p-4 item border-right" data-aos="fade">
				<span class="flaticon-stethoscope display-3 mb-3 d-block text-primary"></span>
				<h2 class="h4">Kesehatan</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
				<p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
			</div>
			<div class="text-center p-4 item" data-aos="fade">
				<span class="flaticon-calculator display-3 mb-3 d-block text-primary"></span>
				<h2 class="h4">Finansial / Akunting</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
				<p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
			</div>
		</div>
	</div>
</div>
