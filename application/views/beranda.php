
	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<?php foreach ($carosel as $c) { ?>
				<div class="item-slick1 item<?= $c['id_caraousel'] ;?>-slick1"
					style="background-image: url(<?= site_url('assets/upload/carousel/').$c['foto']  ?>);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15"
							data-appear="fadeInDown">
							We Are
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							<?= $konfig->judul_website ?>
						</h2>
					</div>
				</div>
				<?php } ?>


			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>
	<!-- Welcome -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
							Tentang Kami
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							<?= $konfig->judul_website; ?>
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							<?= $konfig->profil_website; ?>
						</p>

						<a href="about.html" class="txt4">
							Our Story
							<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
						</a>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="<?= site_url('assets/upload/konfigurasi/').$konfig->foto  ?>" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Event -->
	<section class="section-event">
		<div class="wrap-slick2">
			<div class="slick2">
				<?php $no=1; foreach ($event as $e) { ?>
				<div class="item-slick2 item<?= $no ?>-slick2"
					style="background-image: url(<?= site_url('assets/depan/')?>images/bg-event-01.jpg);">
					<div class="wrap-content-slide2 p-t-115 p-b-208">
						<div class="container">
							<!-- - -->
							<div class="title-event t-center m-b-52">
								<span class="tit2 p-l-15 p-r-15">
									Upcomming
								</span>

								<h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
									Events
								</h3>
							</div>

							<!-- Block2 -->
							<div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false"
								data-appear="zoomIn">
								<!-- Pic block2 -->
								<a href="#" class="wrap-pic-blo2 bg1-blo2"
									style="background-image: url(<?= site_url('assets/upload/event/').$e['poster'] ?>);">
									<div class="time-event size10 txt6 effect1">
										<span class="txt-effect1 flex-c-m t-center">
											<?= date('G:i l - d F Y', strtotime($e['tanggal'])) ?>
										</span>
									</div>
								</a>

								<!-- Text block2 -->
								<div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
									<h4 class="tit7 t-center m-b-10">
										<?= $e['nama_event']?>
									</h4>

									<p class="t-center">
										<?= $e['konten_event']?>
									</p>

									<div class="flex-sa-m flex-w w-full m-t-40">
										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 days">12</span>

											<span class="dis-block t-center txt8">
												Days
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 hours">12</span>

											<span class="dis-block t-center txt8">
												Hours
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 minutes">46</span>

											<span class="dis-block t-center txt8">
												Minutes
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 seconds">28</span>

											<span class="dis-block t-center txt8">
												Seconds
											</span>
										</div>
									</div>

									<a href="<?= $e['gmaps']?>" class="txt4 m-t-40">
										<?= $e['lokasi']?>
										<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php $no++; } ?>

			</div>

			<div class="wrap-slick2-dots"></div>
		</div>
	</section>
	<!-- Blog -->
	<section class="section-blog bg-white p-t-115 p-b-123">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					Latest News
				</span>

				<h3 class="tit5 t-center m-t-2">
					The Blog
				</h3>
			</div>

			<div class="row">
				<?php foreach ($konten as $k) { ?>
				<div class="col-md-4 p-t-30">



					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="<?= base_url('home/artikel/'.$k['slug']); ?>"><img
									src="<?= site_url('assets/upload/konten/').$k['foto']  ?>" alt="IMG-INTRO"></a>

							<div class="time-blog">
								<?= $k['tanggal'] ?>
							</div>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="<?= base_url('home/artikel/'.$k['slug']); ?>">
								<h4 class="txt5 color0-hov trans-0-4 m-b-13">
									<?= $k['judul'] ?>
								</h4>
							</a>

							<p class="m-b-20">
								<?php echo substr($k['isi_konten'], 0, 150)."..."; ?>
							</p>

							<a href="<?= base_url('home/artikel/'.$k['slug']); ?>" class="txt4">
								Baca Selengkapnya
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
				<?php } ?>


			</div>
		</div>
	</section>

	<!-- Review -->
	<section class="section-review p-t-115">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158"
			style="background-image: url(<?= site_url('assets/depan/') ?>images/bg-intro-01.jpg);">
			<span class="tit2 p-l-15 p-r-15">
				Divisi
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Tenka ID
			</h3>
		</div>
		<!-- - -->
		<div class="wrap-slick3">
			<div class="slick3">


				<?php $no=1; foreach ($divisi as $d) { ?>
				<div class="item-slick3 item<?= $no ?>-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">

							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false"
								data-appear="zoomIn">
								<img src="<?= site_url('assets/upload/divisi/').$d['foto'] ?>" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<div class="more-review txt7 t-center animated visible-false m-t-32"
									data-appear="fadeInUp">
									<?= $d['nama_divisi'] ?>
								</div>

								<p class="t-center txt12 size15 m-l-r-auto">
									“ <?= $d['profil'] ?> ”
								</p>



							</div>
							<div class="more-review txt10 t-center animated visible-false m-t-32"
								data-appear="fadeInUp">
								Instagram : <?= $d['instagram'] ?>
							</div>
						</div>
					</div>
				</div>

				<?php $no++; } ?>


			</div>

			<div class="wrap-slick3-dots m-t-30"></div>
		</div>
	</section>


	<!-- Video -->
	<section class="section-video parallax100"
		style="background-image: url(<?= site_url('assets/depan/') ?>images/bg-cover-video-02.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Our Video
			</h3>

			<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal"
				data-target="#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>
