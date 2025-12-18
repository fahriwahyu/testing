<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
        <!-- Profile Image -->
<session class="content">

            
    <div class="row">
        <div class="col-lg-4">
        <h3>Detail Data Guru</h3>

        <form method="post" type="file" action="<?php echo base_url('Guru/updatePhoto/'.$guru['id_guru']); ?>">
        <div class="card shadow lg-4">
            <div class="card-header py-3" width="600">
            <div class="box box-primary">
            <?php echo form_open_multipart('Guru/updatePhoto/'.$guru['id_guru']); ?>
                <div class="box-body box-profile">
                    <?php if($guru['photo'] == NULL) { ?>
                        <img class="profile-user-img img-responsive img-circle" align="left" src="<?php echo base_url('assets/img/default.png'); ?>" alt="User profile picture" width="128" height="150">
                    <?php }else{ ?>
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/uploads/'.$guru['photo']); ?>" alt="User profile picture" width="128" height="150">
                    <?php } ?>
                <br><br>
                <br><br>
            <h4 class="profile-username text-left"><?php echo $guru['nama_guru']; ?></h4>

            <p class="text-muted text-left">Software Engineer</p>
            <input type="file" name="photo" class="form-control" action="<?php echo base_url('Guru/updatePhoto/'.$guru['id_guru']); ?>" placeholder="Update photo">
            <button type="submit" class="btn btn-primary btn-block" action="<?php echo base_url('Guru/updatePhoto/'.$guru['id_guru']); ?>"  >Update Photo</button>
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
                                        <td style="width : 150px;">NIK</td>
                                        <td style="width : 30px;"> : </td>
                                        <td> <?php echo $guru['nik']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td> : </td>
                                        <td> <?php echo $guru['nama_guru']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td> : </td>
                                        <td> <?php echo $guru['jk']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td> : </td>
                                        <td> <?php echo $guru['tempat_lahir']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td> : </td>
                                        <td> <?php echo $guru['tgl_lahir']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td> : </td>
                                        <td> <?php echo $guru['alamat']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>No Handphone</td>
                                        <td> : </td>
                                        <td> <?php echo $guru['hp']; ?> </td>
                                    </tr>
                                </table>
                                <a title="Edit data" method="post" href="<?php echo base_url('Guru/update/'.$guru['id_guru']); ?>" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalEdit">Edit</a></i>
                                <a href="<?php echo site_url('Guru'); ?>" class="btn btn-sm btn-warning"> Kembali </a>
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
            <div class="modal-dialog" role="document" method="post" action="<?php echo base_url('Guru/update/'.$guru['id_guru']); ?>" encytpe="multipart/form-data">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open_multipart('Guru/update/'.$guru['id_guru']); ?>                
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="number" name="nik" class="form-control" placeholder="Masukkan NIK" value="<?php echo $guru['nik']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_guru" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo $guru['nama_guru']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <select class="form-control" name="jk">
                            <option>--Pilih Jenis Kelamin</option>
                            <?php $j = $guru['jk']; ?>
                            <option <?php echo ($j == "Laki-Laki")? "selected": ""?>> Laki-Laki </option>
                            <option <?php echo ($j == "Perempuan")? "selected": ""?>> Perempuan </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" value="<?php echo $guru['tempat_lahir']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" value="<?php echo $guru['tgl_lahir']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="<?php echo $guru['alamat']; ?>">
                    </div>

                    <div class="form-group">
                        <label>No Handphone/WhatsApp</label>
                        <input type="number" name="hp" class="form-control" placeholder="Masukkan No Handphone/WhatsApp" value="<?php echo $guru['hp']; ?>">
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