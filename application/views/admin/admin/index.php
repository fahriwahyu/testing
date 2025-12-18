                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Admin</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <?php echo $this->session->flashdata('pesan'); ?>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Tambah Data
                        </button>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Level</th> 
                                            <th>Aksi</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1;
                                        foreach($admin as $row ) { ?>
                                        <tr>
                                        <td><?php if($row->photo == NULL) { ?>
                                                <img class="profile-user-img img-responsive img-circle" align="left" src="<?php echo base_url('assets/img/default.png'); ?>" alt="User profile picture" width="80px">
                                            <?php }else{ ?>
                                                <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/uploads/'.$row->photo); ?>" alt="User profile picture" width="128" height="150">
                                            <?php } ?></td>
                                            <td><?php echo $row->username ?></td>
                                            <td><?php echo $row->email ?></td>
                                            <td><?php echo $row->password ?></td>
                                            <td><?php echo $row->level ?></td>
                                            <td>
                                                <a title="Detil Admin" href="<?php echo site_url('Admin/detil/'.$row->id_admin); ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                                <a title="Delete Data" href="<?php echo site_url('Admin/delete/'.$row->id_admin); ?>" onClick="return confirm('Yangg Benerr mau di hapus?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" method="post" action="<?php echo base_url('Admin/add') ?>" encytpe="multipart/form-data">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open_multipart('Admin/add'); ?>
                <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Tempat Lahir">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <?php echo form_close() ?>
                </div>
                </div>
            </div>
            </div>