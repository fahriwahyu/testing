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
                <br><br>
                <br><br>
            <h4 class="profile-username text-left"> <?php echo $siswa['nama_kepanjangan']; ?></h4>

            <p class="text-muted text-left">Software Engineer</p>
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
                                <table class="table table-stiped">
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
                                <a href="<?php echo site_url('Siswa'); ?>" class="btn btn-sm btn-warning"> Kembali </a>
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