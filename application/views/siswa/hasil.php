                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Hasil Belajar</h1>
                    <div class="row">
                        <div class="col-md-3">
                        <img src="<?php //echo base_url('assets/img/uploads/'.$siswa['photo']); ?>" alt="">
                        </div>
                        <div class="col-md-9">
                            <table>
                                <tr>
                                    <th><h3>Kelas</h3></th>
                                    <th style="width: 200px;"><h3> : </h3></th>
                                    <th><h3><?php echo $siswa['id_kelas']; ?></h3></th>
                                </tr>
                                <tr>
                                    <th><h3>NIK</h3></th>
                                    <th style="width: 200px;"><h3> : </h3></th>
                                    <th><h3><?php echo $siswa['nik']; ?></h3></th>
                                </tr>
                                <tr>
                                    <th><h3>Nama Lengkap</h3></th>
                                    <th> : </th>
                                    <th><h4><?php echo $siswa['nama_kepanjangan']; ?></h4></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br><br><br><br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <?php echo $this->session->flashdata('pesan'); ?>
                        <button type="button" href="<?php echo site_url(); ?>" data-toggle="modal" data-target="#modal-profile" class="btn btn-primary"><i class="">Tambah Data</i></button>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Mata Pelajaran</th>
                                            <th>KKM</th>
                                            <th>Nilai(Angka)</th>
                                            <th>Nilai(Huruf)</th>
                                            <th>Deskripsi Kemajuan Belajar</th>
                                            <th>Aksi</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1;
                                        foreach($hasil as $row ) { ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>

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

            </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal-profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" method="post" action="<?php echo base_url('GG/Profile/updateAksi') ?>">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Hasil Belajar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open_multipart(); ?>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="hidden" name="id_siswa" class="form-control" value="" >
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