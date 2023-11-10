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
									data-target="#myModal">Tambah Event</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="myModal">
				<div class="modal-dialog modal-lg" role="document">
					<form action="<?= site_url('admin/event/simpan') ?>" method="post" enctype='multipart/form-data'>
						<div class="modal-content ">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Tambah Event</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- Modal body -->
							<div class="modal-body">

								<div class="col mb-3">
									<label class="form-label">Nama Event</label>
									<input type="text" name="nama" class="form-control" placeholder="Nama Event" required />
								</div>
								<div class="col mb-3">
									<label class="form-label">Konten Event</label>
									<textarea name="konten" class="form-control" required></textarea>
								</div>
                                <div class="col mb-3">
									<label class="form-label">Lokasi</label>
									<input type="text" name="lokasi" class="form-control" placeholder="Lokasi" required />
								</div>
                                <div class="col mb-3">
									<label class="form-label">link Google Maps</label>
									<input type="text" name="gmaps" class="form-control" placeholder="Nama Event" required />
								</div>
                                <div class="col mb-3">
									<label class="form-label">Tanggal</label>
									<input type="datetime-local" name="tanggal" class="form-control" placeholder="Tanggal" required />
								</div>
								<div class="col mb-3">
									<label class="form-label">Foto (1:1)</label>
									<input type="file" name="poster" class="form-control"
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
								<th>Nama Event</th>
								<th>Konten</th>
								<th>Lokasi</th>
								<th>Tanggal</th>
								<th>Poster</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($event as $e) { ?>


							<tr>
								<td><?= $no ?></td>
								<td><?= $e['nama_event'] ?></td>
								<td><?= $e['konten_event'] ?></td>
								<td><?= $e['lokasi'] ?></td>
								<td><?= $e['tanggal'] ?></td>
								<td>
									<a href="<?= site_url('assets/upload/event/').$e['poster'] ?>" target="_blank">
										<span class="fa fa-search"></span>Lihat Foto
									</a>
								</td>

								<td>
									<a href="<?= site_url('admin/event/delete_data/' . $e['poster']); ?>"
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
											<form action="<?= site_url('admin/event/update') ?>" method="post"
												enctype='multipart/form-data'>
												<input type="hidden" name="nama_lama" value="<?= $e['poster'] ?>">
												<div class="modal-content ">
													<!-- Modal Header -->
													<div class="modal-header">
														<h4 class="modal-title"><?= $e['nama_event'] ?></h4>
														<button type="button" class="close"
															data-dismiss="modal">&times;</button>
													</div>
													<!-- Modal body -->
													<div class="modal-body">

														<div class="col mb-3">
															<label class="form-label">Nama Event</label>
															<input type="text" name="nama" class="form-control"
																value="<?= $e['nama_event'] ?>" />
														</div>
														<div class="col mb-3">
															<label class="form-label">Konten Event</label>
															<textarea name="konten" class="form-control"> <?= $e['konten_event'] ?> </textarea>
														</div>
                                                        <div class="col mb-3">
															<label class="form-label">Lokasi</label>
															<input type="text" name="lokasi" class="form-control"
																value="<?= $e['lokasi'] ?>" />
														</div>
                                                        <div class="col mb-3">
															<label class="form-label">Link Google Maps</label>
															<input type="text" name="gmaps" class="form-control"
																value="<?= $e['gmaps'] ?>" />
														</div>
                                                        <div class="col mb-3">
															<label class="form-label">Tanggal</label>
															<input type="datetime-local" name="tanggal" class="form-control"
																value="<?= $e['tanggal'] ?>" />
														</div>
														<div class="col mb-3">
															<label class="form-label">Foto (1:1)</label>
															<input type="file" name="poster" class="form-control"
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
