
	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
		style="background-image: url(<?= site_url('assets/depan/')?>images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
			Gallery
		</h2>
	</section>



	<!-- Gallery -->
	<div class="section-gallery p-t-118 p-b-100">
		<div
			class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">



			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
				All Photo
			</button>
			<?php foreach ($divisi as $d ) { ?>
			<button class="label-gallery txt26 trans-0-4" data-filter=".<?= $d['id_divisi']?>">
				<?= $d['nama_divisi']?>
			</button>
			<?php }?>


		</div>

		<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
			<!-- - -->


			<?php foreach ($galeri as $g ) { ?>
			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom <?= $g['id_divisi']?>">
				<img src="<?= site_url('assets/upload/galeri/').$g['foto_galeri']  ?>" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m"
						href="<?= site_url('assets/upload/galeri/').$g['foto_galeri']  ?>"
						data-lightbox="gallery"><?= $g['judul']?></a>
				</div>
			</div>
			<?php }?>
			<!-- - -->

		</div>

		<?= $this->pagination->create_links() ?>
	</div>


