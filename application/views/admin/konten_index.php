<div class="row">
   <div class="col-md-12" id="ngilang">
      <?= $this->session->flashdata('alert'); ?>
   </div>
   <div class="col-md-12">
      <div class="white_shd full margin_bottom_30">
         <div class="full progress_bar_inner">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="padding_infor_info">
                        <button type="button" class="model_bt btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Konten</button>
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
                           <textarea name="konten" class="form-control" required ></textarea>
                        </div>
                        <div class="col mb-3">
                           <label class="form-label">Foto</label>
                           <input type="file" name="foto" class="form-control" accept="image/png, image/jpg, image/jpeg" required />
                        </div>
                        
                        

                     </div>
                     <!-- Modal footer -->
                     <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>

         <div class="full graph_head">
            <div class="heading1 margin_0">
               <h2>Konten</h2>
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
                        <th>Uploader</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $no=1; foreach ($konten as $k) { ?>


                        <tr>
                           <td><?= $no ?></td>
                           <td><?= $k['judul'] ?></td>
                           <td><?= $k['id_kategori'] ?></td>
                           <td><?= $k['username'] ?></td>
                           <td><?= $k['tanggal'] ?></td>
                           <td>
                              <a href="<?= site_url('admin/kategori/delete_data/' . $k['id_kategori']); ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin menghapus data ini')"><span class="fa fa-trash"> </span></a> |
                              <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit<?= $k['id_kategori'] ?>">
                                 <span class="fa fa-edit"></span>
                              </button>

                              <div class="modal fade" id="edit<?= $k['id_kategori'] ?>">
                                 <div class="modal-dialog modal-md" role="document">
                                    <form action="<?= site_url('admin/kategori/update') ?>" method="post">
                                    <input type="hidden" name="id_kategori" value="<?= $k['id_kategori'] ?>">
                                       <div class="modal-content ">
                                          <!-- Modal Header -->
                                          <div class="modal-header">
                                             <h4 class="modal-title">Edit Kategori</h4>
                                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>
                                          <!-- Modal body -->
                                          <div class="modal-body">

                                             <div class="col mb-3">
                                                <label class="form-label">Nama</label>
                                                <input type="text" name="kategori" class="form-control" value="<?= $k['kategori'] ?>" />
                                             </div>
                                             

                                          </div>
                                          <!-- Modal footer -->
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
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