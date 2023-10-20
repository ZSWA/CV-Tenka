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
									data-target="#myModal">Tambah Konten</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="myModal">
				<div class="modal-dialog modal-lg" role="document">
					<form action="<?= site_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
						<div class="modal-content ">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Tambah Konten</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- Modal body -->
							<div class="modal-body">

								<div class="col mb-3">
									<label class="form-label">Judul</label>
									<input type="text" name="judul" class="form-control" placeholder="Judul" required />
								</div>
								<div class="col mb-3">
									<label class="form-label">Kategori</label>
									<select name="id_kategori" class="form-control">
										<?php foreach ($kategori as $k) { ?>
										<option value="<?= $k['id_kategori'] ?>"><?= $k['kategori'] ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col mb-3">
									<label class="form-label">Isi Konten</label>
									<textarea name="konten" class="form-control" required></textarea>
								</div>
								<div class="col mb-3">
									<label class="form-label">Foto</label>
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
								<th>Kategori</th>
								<th>Kreator</th>
								<th>Tanggal</th>
								<th>Foto</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($konten as $k) { ?>


							<tr>
								<td><?= $no ?></td>
								<td><?= $k['judul'] ?></td>
								<td><?= $k['kategori'] ?></td>
								<td><?= $k['nama'] ?></td>
								<td><?= $k['tanggal'] ?></td>
								<td>
									<a href="<?= site_url('assets/upload/konten/').$k['foto'] ?>" target="_blank">
										<span class="fa fa-search"></span>Lihat Foto
									</a>
								</td>

								<td>
									<a href="<?= site_url('admin/konten/delete_data/' . $k['foto']); ?>"
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
											<form action="<?= site_url('admin/konten/update') ?>" method="post"
												enctype='multipart/form-data'>
												<input type="hidden" name="nama_baru" value="<?= $k['foto'] ?>">
												<div class="modal-content ">
													<!-- Modal Header -->
													<div class="modal-header">
														<h4 class="modal-title"><?= $k['judul'] ?></h4>
														<button type="button" class="close"
															data-dismiss="modal">&times;</button>
													</div>
													<!-- Modal body -->
													<div class="modal-body">

														<div class="col mb-3">
															<label class="form-label">Judul</label>
															<input type="text" name="judul" class="form-control"
																value="<?= $k['judul'] ?>" />
														</div>
														<div class="col mb-3">
															<label class="form-label">Kategori</label>
															<select name="id_kategori" class="form-control">
																<?php foreach ($kategori as $kt) { ?>
																<option <?php if($kt['id_kategori']==$k['id_kategori']){
																	echo "selected";
																} ?> value="<?= $kt['id_kategori'] ?>">
																	<?= $kt['kategori'] ?></option>
																<?php } ?>
															</select>
														</div>
														<div class="col mb-3">
															<label class="form-label">Keterangan</label>
															<input type="text" name="isi" class="form-control"
																value="<?= $k['isi_konten'] ?>" />
														</div>
														<div class="col mb-3">
															<label class="form-label">Foto</label>
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
