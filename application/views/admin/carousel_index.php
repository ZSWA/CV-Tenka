<div class="row column4 graph">
	<div class="col mb-3">
		<div id="disepir">
			<?= $this->session->flashdata('alert') ?>
		</div>
	</div>
	<!-- Gallery section -->
	<div class="col-md-12">
		<div class="white_shd full margin_bottom_30">
			<div class="full graph_head">
				<div class="heading1 margin_0">
					<h2>Tambah Carousel</h2>
				</div>
			</div>
			<div class="full gallery_section_inner padding_infor_info">
				<form action="<?= site_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Judul</label>
							<input type="text" name="judul" class="form-control" placeholder="Judul" />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Pilih Foto dengan ukuran (1:3)</label>
							<input type="file" name="foto" class="form-control"
								accept="image/png, image/jpg, image/jpeg" />
						</div>
					</div>
					<div class="col mb-3">
						<div class="row">

							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row column4 graph">
	<!-- Gallery section -->
	<div class="col-md-12">
		<div class="white_shd full margin_bottom_30">
			<div class="full graph_head">
				<div class="heading1 margin_0">
					<h2>Daftar Carousel</h2>
				</div>
			</div>
			<div class="full gallery_section_inner padding_infor_info">
				<div class="row">
					<?php foreach ($caraousel as $c) { ?>
					<div class="col-sm-4 col-md-3 margin_bottom_30">
						<div class="column">
							<a data-fancybox="gallery" href="images/layout_img/g1.jpg"><img class="img-responsive"
									src="<?= site_url('assets/upload/carousel/').$c['foto']  ?>" alt="#"></a>
						</div>
						<div class="heading_section">
							<h4><?= $c['judul']?></h4>
							<h4>
                            <a href="<?= site_url('admin/caraousel/delete_data/' . $c['foto']); ?>"
										class="btn btn-sm btn-danger"
										onClick="return confirm('Apakah anda yakin menghapus data ini')"><span
											class="fa fa-trash"> </span>
									</a>
							</h4>

						</div>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</div>
