

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
		style="background-image: url(<?= site_url('assets/depan/') ?>images/bg-title-page-03.jpg);">
		<h2 class="tit6 t-center">
			Blog
		</h2>
	</section>


	<!-- Content page -->
	<section>
		<div class="bread-crumb bo5-b p-t-17 p-b-17">
			<div class="container">
				<a href="<?= site_url()?>" class="txt27">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

				<span class="txt29">
					Blog
				</span>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
						<?php foreach ($konten as $k) { ?>
						<!-- Block4 -->
						<div class="blo4 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="<?= base_url('home/artikel/'.$k['slug']); ?>">
									<img src="<?= site_url('assets/upload/konten/').$k['foto']  ?>" alt="IMG-BLOG">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										<?= date('d', strtotime($k['tanggal'])) ?>
									</span>

									<span class="txt31">
										<?= date('M, Y', strtotime($k['tanggal'])) ?>
									</span>
								</div>
							</div>

							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="<?= base_url('home/artikel/'.$k['slug']); ?>"
										class="tit9"><?= $k['judul'] ?></a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										<?= $k['nama'] ?>
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										<?= date('d F, Y', strtotime($k['tanggal'])) ?>
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										<?= $k['kategori'] ?>

									</span>


								</div>

								<p>
									<?php echo substr($k['isi_konten'], 0, 150)."..."; ?>
								</p>

								<a href="<?= base_url('home/artikel/'.$k['slug']); ?>" class="dis-block txt4 m-t-30">
									Baca Selengkapnya
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
						<?php } ?>


						<!-- Pagination -->
						<?= $this->pagination->create_links() ?>
						
					</div>
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
						<!-- Search -->
						<div class="search-sidebar2 size12 bo2 pos-relative">
							<input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" name="search"
								placeholder="Search">
							<button class="btn-search-sidebar2 flex-c-m ti-search trans-0-4"></button>
						</div>

						<!-- Categories -->
						<div class="categories">
							<h4 class="txt33 bo5-b p-b-35 p-t-58">
								Categories
							</h4>

							<ul>
								<?php foreach ($kategori as $k) { ?>
								<li class="bo5-b p-t-8 p-b-8">
									<a href="<?= base_url('home/kategori/'.$k['id_kategori']) ?>"
										class="txt27"><?= $k['kategori'] ?></a>
								</li>
								<?php } ?>
							</ul>
						</div>


						<!-- Archive -->
						<div class="archive">
							<h4 class="txt33 p-b-20 p-t-43">
								Archive
							</h4>

							<ul>
								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										uly 2018
									</a>

									<span class="txt29">
										(9)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										June 2018
									</a>

									<span class="txt29">
										(39)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										May 2018
									</a>

									<span class="txt29">
										(29)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										April 2018
									</a>

									<span class="txt29">
										(35)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										March 2018
									</a>

									<span class="txt29">
										(22)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										February 2018
									</a>

									<span class="txt29">
										(32)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										January 2018
									</a>

									<span class="txt29">
										(21)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										December 2017
									</a>

									<span class="txt29">
										(26)
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	