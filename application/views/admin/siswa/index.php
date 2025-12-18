                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>

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
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Email</th> 
                                            <th>Kelas</th> 
                                            <th>Aksi</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach($siswa as $row ) { ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $row->nik ?></td>
                                            <td><?php echo $row->nama_siswa; ?> <?php echo $row->nama_kepanjangan; ?></td>
                                            <td><?php echo $row->jk; ?></td>
                                            <td><?php echo $row->email; ?></td>
                                            <td><?php echo $row->kls; ?></td>
                                            <td>
                                                <a title="Detil Siswa" href="<?php echo site_url('Siswa/detil/'.$row->id_siswa); ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                                <a title="Delete Data" href="<?php echo site_url('Siswa/delete/'.$row->id_siswa); ?>" onClick="return confirm('Yangg Benerr mau di hapus?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
            <div class="modal-dialog" role="document" method="post" action="<?php echo base_url('Siswa/add') ?>">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open_multipart('Siswa/add'); ?>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK">
                    </div>

                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Depan">
                    </div>

                    <div class="form-group">
                        <label>Nama Kepanjangan</label>
                        <input type="text" name="nama_kepanjangan" class="form-control" placeholder="Masukkan Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <select class="form-contro" name="jk">
                            <option>--Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki"> Laki-Laki </option>
                            <option value="Perempuan"> Perempuan </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                    </div>

                    <div class="form-group">
                        <label>No Handphone</label>
                        <input type="text" name="hp" class="form-control" placeholder="Masukkan No Hp">
                    </div>

                    <div class="form-group">
                        <label>Nama Ayah</label>
                        <input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan Nama Ayah">
                    </div>

                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu">
                    </div>

                    <div class="form-group">
                        <label>No Handphone Orang Tua</label>
                        <input type="text" name="hp_ortu" class="form-control" placeholder="Masukkan No Hp">
                    </div>
                    
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="photo" class="form-control" placeholder="Upload Foto">
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kls" class="form-control" required="">
                            <option>--Pilih Kelas--</option>
                            <?php $klss = $this->db->get('kelas')->result();
                                foreach($klss as $row) { ?>
                            <option value="<?php echo $row->id_kelas ?>"><?php echo $row->kls ; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
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