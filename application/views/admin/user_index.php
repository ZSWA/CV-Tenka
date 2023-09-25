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
                        <h4 class="modal-title">Modal Heading</h4>
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

         <div class="full graph_head">
            <div class="heading1 margin_0">
               <h2>Daftar Pengguna</h2>
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
                              <div class="button_block"><button type="button" class="btn cur-p btn-success">Ubah</button></div>
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