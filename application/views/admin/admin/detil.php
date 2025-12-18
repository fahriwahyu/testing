<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
        <!-- Profile Image -->
<session class="content">

            
    <div class="row">
        <div class="col-lg-4">
        <h3>Detail Data Admin</h3>

        <form method="post" type="file" action="<?php echo base_url(); ?>">
        <div class="card shadow lg-4">
            <div class="card-header py-3" width="600">
            <div class="box box-primary">
            <?php echo form_open_multipart(); ?>
                <div class="box-body box-profile">
                    <?php if($admin['photo'] == NULL) { ?>
                        <img class="profile-user-img img-responsive img-circle" align="left" src="<?php echo base_url('assets/img/default.png'); ?>" alt="User profile picture" width="128" height="150">
                    <?php }else{ ?>
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/uploads/'.$admin['photo']); ?>" alt="User profile picture" width="128" height="150">
                    <?php } ?>
                <br><br>
                <br><br>
            <h4 class="profile-username text-left"><?php echo $admin['username']; ?></h4>

            <p class="text-muted text-left">Software Engineer</p>
            </div>   
            </div>
            <?php echo form_close() ?>
        </div>
        </form>
</session>

<session>
        </div>
        <!-- /.box-body -->
        </div>

<div class="col-lg">
                <div class="card shadow mb-4">
            <div class="card-header py-3">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-9">
                        <div class="box box-primary">
                            <div class="box-header with-boarder">
                                <table class="table table-stiped">
                                    <tr>
                                        <td>Username</td>
                                        <td> : </td>
                                        <td> <?php echo $admin['username']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td> : </td>
                                        <td> <?php echo $admin['password']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td> : </td>
                                        <td> <?php echo $admin['email']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Level</td>
                                        <td> : </td>
                                        <td> <?php echo $admin['level']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Registrasi</td>
                                        <td> : </td>
                                        <td> <?php echo $admin['created_at']; ?> </td>
                                    </tr>

                                </table>
                                <a title="Edit data" method="post" href="<?php echo base_url('Admin/update/'.$admin['id_admin']); ?>" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalEdit">Edit</a></i>
                                <a href="<?php echo site_url('Admin'); ?>" class="btn btn-sm btn-warning"> Kembali </a>
                                </div>
                            </div>
                            </div>
                                </div> 
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </form>           
        </div>
    </div>
</div>
</session>

            <!-- Modal Update -->
            <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" method="post" action="<?php echo base_url('Admin/update/'.$admin['id_admin']); ?>" encytpe="multipart/form-data">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open_multipart('Admin/update/'.$admin['id_admin']); ?>                
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan NIK" value="<?php echo $admin['username']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo $admin['email']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo $admin['password']; ?>">
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