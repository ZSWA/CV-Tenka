<div class="row">
   <div class="col-md-12" id="disepir">
      <?= $this->session->flashdata('alert'); ?>
   </div>
   <div class="col-md-12">
      <div class="white_shd full margin_bottom_30">
         <div class="full progress_bar_inner">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="padding_infor_info">
                        <button type="button" class="model_bt btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah User</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-md" role="document">
               <form action="<?= site_url('admin/user/simpan') ?>" method="post">
                  <div class="modal-content ">
                     <!-- Modal Header -->
                     <div class="modal-header">
                        <h4 class="modal-title">Tambah Data</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <!-- Modal body -->
                     <div class="modal-body">

                        <div class="col mb-3">
                           <label class="form-label">Nama</label>
                           <input type="text" name="nama" class="form-control" placeholder="Nama" required />
                        </div>
                        <div class="col mb-3">
                           <label class="form-label">Username</label>
                           <input type="text" name="username" class="form-control" placeholder="Username" required />
                        </div>
                        <div class="col mb-3">
                           <label class="form-label">Password</label>
                           <input type="password" name="password" class="form-control" placeholder="Password" required />
                        </div>
                        <div class="col mb-3">
                           <label class="form-label">Level</label>
                           <select name="level" class="form-control" required>
                              <option value="Admin">Admin</option>
                              <option value="Kontributor">Kontributor</option>
                           </select>
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

         <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($user as $pengguna) { ?>


                        <tr>
                           <td><?= $pengguna['username'] ?></td>
                           <td><?= $pengguna['nama'] ?></td>
                           <td><?= $pengguna['level'] ?></td>
                           <td>
                              <a href="<?= site_url('admin/user/delete_data/' . $pengguna['id_user']); ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin menghapus data ini')"><span class="fa fa-trash"> </span></a> |
                              <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit<?= $pengguna['id_user'] ?>">
                                 <span class="fa fa-edit"></span>
                              </button>

                              <div class="modal fade" id="edit<?= $pengguna['id_user'] ?>">
                                 <div class="modal-dialog modal-md" role="document">
                                    <form action="<?= site_url('admin/user/update') ?>" method="post">
                                    <input type="hidden" name="id_user" value="<?= $pengguna['id_user'] ?>">
                                       <div class="modal-content ">
                                          <!-- Modal Header -->
                                          <div class="modal-header">
                                             <h4 class="modal-title">Edit User</h4>
                                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>
                                          <!-- Modal body -->
                                          <div class="modal-body">

                                             <div class="col mb-3">
                                                <label class="form-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" value="<?= $pengguna['nama'] ?>" />
                                             </div>
                                             <div class="col mb-3">
                                                <label class="form-label">Username</label>
                                                <input type="text" name="username" class="form-control" value="<?= $pengguna['username'] ?>" readonly />
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

                     <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>