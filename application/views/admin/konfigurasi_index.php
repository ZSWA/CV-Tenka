<div class="row">
	<div class="col-md-12">
		<div id="disepir">
			<?= $this->session->flashdata('alert') ?>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="white_shd full margin_bottom_30">

			<div class="full progress_bar_inner">
				<div class="row">
					<div class="col-md-12">
						<div class="full">
							<div class="padding_infor_info">
								<form action="<?= site_url('admin/konfigurasi/update') ?>" method="post">

									<div class="form-group">
										<div class="col-mb-3">
											<label class="form-label">Judul</label>
											<input type="text" name="judul" class="form-control" value="<?= $konfig->judul_website ?>"/>
										</div>
									</div>
									<div class="form-group">
										<div class="col-mb-3">
											<label class="form-label">Profile</label>
											<input type="text" name="profile" class="form-control" value="<?= $konfig->profil_website ?>"/>
										</div>
									</div>
									<div class="form-group">
										<div class="col-mb-3">
											<label class="form-label">Instagram</label>
											<input type="text" name="instagram" class="form-control"value="<?= $konfig->instagram ?>" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-mb-3">
											<label class="form-label">Facebook</label>
											<input type="text" name="facebook" class="form-control" value="<?= $konfig->facebook ?>"/>
										</div>
									</div>
									<div class="form-group">
										<div class="col-mb-3">
											<label class="form-label">Tiktok</label>
											<input type="text" name="tiktok" class="form-control" value="<?= $konfig->tiktok ?>"/>
										</div>
									</div>
									<div class="form-group">
										<div class="col-mb-3">
											<label class="form-label">Alamat</label>
											<input type="textarea" name="alamat" class="form-control" value="<?= $konfig->alamat ?>" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-mb-3">
											<label class="form-label">Email</label>
											<input type="email" name="email" class="form-control" value="<?= $konfig->email ?>"/>
										</div>
									</div>

									<div class="form-group">
										<div class="col-mb-3">
											<div class="button_block">
												<button type="submit" class="btn cur-p btn-primary">Simpan</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->

</div>
