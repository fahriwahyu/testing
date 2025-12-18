<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
        <!-- Profile Image -->
<session class="content">

            
    <div class="row">
        <div class="col-lg-3">
        <h3>Detail Data Siswa</h3>
        
        <div class="card shadow lg">
            <div class="card-header py-3" width="600">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <?php if($siswa['photo'] == NULL) { ?>
                        <img class="profile-user-img img-responsive img-circle" align="left" src="<?php echo base_url('assets/img/default.png'); ?>" alt="User profile picture" width="128" height="150">
                    <?php }else{ ?>
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/uploads/'.$siswa['photo']); ?>" alt="User profile picture" width="128" height="150">
                    <?php } ?>
                    <form method="post" action="<?php echo base_url('GG/Profile/updatePhoto'); ?>" enctype="multipart/form-data">
                <br><br>
                <br><br>
            <h4 class="profile-username text-left"> <?php echo $siswa['nama_kepanjangan']; ?></h4>

            <p class="text-muted text-left">Software Engineer</p>

            <input type="hidden" name="id_siswa" value="<?php $siswa['id_siswa']; ?>">
            <input type="file" class="form-control" name="photo" required="">

            <button type="submit" class="btn btn-primary btn-block">Upload</button>
            </form>
            </div>   
            </div>
        </div>
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
                    <div class="col-md-4">
                        <div class="box box-primary">
                            <div class="box-header with-boarder">
                            <?php echo $this->session->flashdata('pesan'); ?>
                            <button type="button" href="<?php echo site_url('GG/profile/updateAksi'); ?>" data-toggle="modal" data-target="#modal-profile" class="btn btn-primary"><i class="">Update Data</i></button>
                            <button type="button" href="<?php echo site_url('GG/profile/updateAksi'); ?>" data-toggle="modal" data-target="#modal-password" class="btn btn-warning"><i class="">Update Password</i></button>
                                <table class="table table-stiped">
                                    <tr>
                                        <td style="width : 150px;">Kelas</td>
                                        <td style="width : 30px;"> : </td>
                                        <td> <?php echo $siswa['kls']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td style="width : 150px;">NIK</td>
                                        <td style="width : 30px;"> : </td>
                                        <td> <?php echo $siswa['nik']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td> : </td>
                                        <td> <?php echo $siswa['nama_siswa']; ?> <?php echo $siswa['nama_kepanjangan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td> : </td>
                                        <td> <?php echo $siswa['jk']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td> : </td>
                                        <td> <?php echo $siswa['tempat_lahir']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td> : </td>
                                        <td> <?php echo $siswa['tgl_lahir']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td> : </td>
                                        <td> <?php echo $siswa['alamat']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td> : </td>
                                        <td> <?php echo $siswa['email']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>No Handphone</td>
                                        <td> : </td>
                                        <td> <?php echo $siswa['hp']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ayah</td>
                                        <td> : </td>
                                        <td> <?php echo $siswa['nama_ayah']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ibu</td>
                                        <td> : </td>
                                        <td> <?php echo $siswa['nama_ibu']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>No Handphone Orang Tua</td>
                                        <td> : </td>
                                        <td> <?php echo $siswa['hp_ortu']; ?> </td>
                                    </tr>
                                </table>
                                <a href="<?php echo site_url('GG/Dashboard'); ?>" class="btn btn-sm btn-warning"> Kembali </a>
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
</div>
</div>
</session>


            <!-- Modal -->
            <div class="modal fade" id="modal-profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" method="post" action="<?php echo base_url('GG/Profile/updateAksi') ?>">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open_multipart('GG/Profile/updateAksi'); ?>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="hidden" name="id_siswa" class="form-control" value="<?php echo $siswa['id_siswa']; ?>" >
                    </div>

                    <div class="form-group">
                        <label>Nama Depan</label>
                        <input type="text" name="nama_siswa" class="form-control" value="<?php echo $siswa['nama_siswa']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Nama Kepanjangan</label>
                        <input type="text" name="nama_kepanjangan" class="form-control" value="<?php echo $siswa['nama_kepanjangan']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <select class="form-contro" name="jk">
                        <?php $ww = $siswa['jk']; ?>
                            <option>--Pilih Jenis Kelamin</option>
                            <option <?php echo ($ww == "Laki-Laki")? "selected": ""?>>Laki-Laki</option>
                            <option <?php echo ($ww == "Perempuan")? "selected": ""?>>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" value="<?php echo $siswa['tempat_lahir']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $siswa['tgl_lahir']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="<?php echo $siswa['alamat']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Email" value="<?php echo $siswa['email']; ?>">
                    </div>

                    <div class="form-group">
                        <label>No Handphone</label>
                        <input type="text" name="hp" class="form-control" placeholder="Masukkan No Hp" value="<?php echo $siswa['hp']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Nama Ayah</label>
                        <input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan Nama Ayah" value="<?php echo $siswa['nama_ayah']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu" value="<?php echo $siswa['nama_ibu']; ?>">
                    </div>

                    <div class="form-group">
                        <label>No Handphone Orang Tua</label>
                        <input type="text" name="hp_ortu" class="form-control" placeholder="Masukkan No Hp" value="<?php echo $siswa['hp_ortu']; ?>">
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

            <!-- Modal Update Password -->
            <div class="modal fade" id="modal-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" method="post" action="<?php echo base_url('GG/Profile/updateAksi') ?>">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Password Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open_multipart('GG/Profile/updatePass'); ?>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="hidden" name="id_siswa" class="form-control" value="<?php echo $siswa['id_siswa']; ?>" >
                    </div>

                    <div class="form-group">
                        <label>Update Password</label>
                        <input type="Password" name="password" id="password" class="form-control" placeholder="Masukkan Password Baru">
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