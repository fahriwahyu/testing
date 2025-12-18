                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Mata Pelajaran</h1>

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
                                            <th>Kode Mapel</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Tahun Akademik</th>
                                            <th>Semester</th> 
                                            <th>Kelas</th> 
                                            <th>Aksi</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1;
                                        foreach($mapel as $row ) { ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $row->id_mapel ?></td>
                                            <td><?php echo $row->matapel ?></td>
                                            <td><?php echo $row->tahun_ajaran ?></td>
                                            <td><?php echo $row->semester ?></td>
                                            <td><?php echo $row->kls ?></td>
                                            <td>
                                                <a title="Update Guru" href="<?php echo site_url('Mapel/update/'.$row->id_mapel); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <a title="Delete Data" href="<?php echo site_url('Mapel/delete/'.$row->id_mapel); ?>" onClick="return confirm('Yangg Benerr mau di hapus?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
            <div class="modal-dialog" role="document" method="post" action="<?php echo base_url('Mapel/add') ?>">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mata Pelajaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open_multipart('Mapel/add'); ?>
                    <div class="form-group">
                        <label>Kode Mapel</label>
                        <input type="text" name="id_mapel" class="form-control" placeholder="Masukkan Kode Mapel" required="">
                    </div>

                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <input type="text" name="matapel" class="form-control" placeholder="Masukkan Mata Pelajaran" required="">
                    </div>

                    <div class="form-group">
                        <label>Tahun Akademik</label>
                        <input type="text" name="tahun_ajaran" class="form-control" placeholder="Masukkan Tahun Akademik" required="">
                    </div>

                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <select name="semester" class="form-control">
                            <option>--Pilih Kelas--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kls" class="form-control" required="">
                            <option>--Pilih Kelas--</option>
                            <?php $kelas = $this->db->get('kelas')->result();
                                foreach($kelas as $klss) { ?>
                            <option value="<?php echo $klss->id_kelas ?>"><?php echo $klss->kls ; ?></option>
                            <?php } ?>
                        </select>
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