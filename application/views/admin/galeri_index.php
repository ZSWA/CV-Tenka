<div class="row">
	<div class="col-md-12">
		<div id="disepir">
			<?= $this->session->flashdata('alert') ?>
		</div>
	</div>
	<div class="col-md-12">
		<div class="white_shd full margin_bottom_30">
			<div class="full progress_bar_inner">
				<div class="row">
					<div class="col-md-12">
						<div class="full">
							<div class="padding_infor_info">
								<button type="button" class="model_bt btn btn-primary" data-toggle="modal"
									data-target="#myModal">Tambah Galeri</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="myModal">
				<div class="modal-dialog modal-lg" role="document">
					<form action="<?= site_url('admin/galeri/simpan') ?>" method="post" enctype='multipart/form-data'>
						<div class="modal-content ">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Tambah Galeri</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- Modal body -->
							<div class="modal-body">

								<div class="col mb-3">
									<label class="form-label">Judul</label>
									<input type="text" name="judul" class="form-control" placeholder="Judul" required />
								</div>
								<div class="col mb-3">
									<label class="form-label">Divisi</label>
									<select name="id_divisi" class="form-control">
										<?php foreach ($divisi as $d) { ?>
										<option value="<?= $d['id_divisi'] ?>"><?= $d['nama_divisi'] ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col mb-3">
									<label class="form-label">Foto (4:3)</label>
									<input type="file" name="foto" class="form-control"
										accept="image/png, image/jpg, image/jpeg" required />
								</div>



							</div>
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-outline-secondary"
									data-dismiss="modal">Batal</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="table_section padding_infor_info">
				<div class="table-responsive-sm">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Divisi</th>
								<th>Uploader</th>
								<th>Foto</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($galeri as $g) { ?>


							<tr>
								<td><?= $no ?></td>
								<td><?= $g['judul'] ?></td>
								<td><?= $g['nama_divisi'] ?></td>
								<td><?= $g['nama'] ?></td>
								<td>
									<a href="<?= site_url('assets/upload/galeri/').$g['foto_galeri'] ?>" target="_blank">
										<span class="fa fa-search"></span>Lihat Foto
									</a>
								</td>

								<td>
									<a href="<?= site_url('admin/galeri/delete_data/' . $g['foto_galeri']); ?>"
										class="btn btn-sm btn-danger"
										onClick="return confirm('Apakah anda yakin menghapus data ini')"><span
											class="fa fa-trash"> </span>
									</a> |
									<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
										data-target="#edit<?= $no ?>">
										<span class="fa fa-edit"></span>
									</button>

									<div class="modal fade" id="edit<?= $no ?>">
										<div class="modal-dialog modal-md" role="document">
											<form action="<?= site_url('admin/galeri/update') ?>" method="post"
												enctype='multipart/form-data'>
												<input type="hidden" name="nama_baru" value="<?= $g['foto_galeri'] ?>">
												<div class="modal-content ">
													<!-- Modal Header -->
													<div class="modal-header">
														<h4 class="modal-title"><?= $g['judul'] ?></h4>
														<button type="button" class="close"
															data-dismiss="modal">&times;</button>
													</div>
													<!-- Modal body -->
													<div class="modal-body">

														<div class="col mb-3">
															<label class="form-label">Judul</label>
															<input type="text" name="judul" class="form-control"
																value="<?= $g['judul'] ?>" />
														</div>
														<div class="col mb-3">
															<label class="form-label">Divisi</label>
															<select name="id_divisi" class="form-control">
																<?php foreach ($divisi as $div) { ?>
																<option <?php if($div['id_divisi']==$g['id_divisi']){
																	echo "selected";
																} ?> value="<?= $div['id_divisi'] ?>">
																	<?= $div['nama_divisi'] ?></option>
																<?php } ?>
															</select>
														</div>
														<div class="col mb-3">
															<label class="form-label">Foto (4:3)</label>
															<input type="file" name="foto" class="form-control"
																accept="image/png, image/jpeg, image/,jpg" />
														</div>


													</div>
													<!-- Modal footer -->
													<div class="modal-footer">
														<button type="button" class="btn btn-outline-secondary"
															data-dismiss="modal">Batal</button>
														<button type="submit" class="btn btn-primary">Simpan</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</td>
							</tr>

							<?php $no++; } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
