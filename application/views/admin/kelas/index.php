                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Kelas</h1>

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
                                            <th>Kode Kelas</th>
                                            <th>Kelas</th>
                                            <th>Tahun Akademik</th>
                                            <th>Aksi</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1;
                                        foreach($kelas as $row ) { ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $row->id_kelas ?></td>
                                            <td><?php echo $row->kls ?></td>
                                            <td><?php echo $row->tahun_ajaran ?></td>
                                            <td>
                                                <a title="Update Kelas" href="<?php echo site_url('Kelas/update/'.$row->id_kelas); ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                                <a title="Delete Data" href="<?php echo site_url('Kelas/delete/'.$row->id_kelas); ?>" onClick="return confirm('Yangg Benerr mau di hapus?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
            <div class="modal-dialog" role="document" method="post" action="<?php echo base_url('Kelas/add') ?>" encytpe="multipart/form-data">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open_multipart('Kelas/add'); ?>
                    <div class="form-group">
                        <label>Kode Kelas</label>
                        <input type="text" name="id_kelas" class="form-control" placeholder="Masukkan Kode Kelas">
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kls" class="form-control">
                            <option>--Pilih Kelas--</option>
                            <option value="1A">Kelas 1A</option>
                            <option value="1B">Kelas 1B</option>
                            <option value="2A">Kelas 2A</option>
                            <option value="2B">Kelas 2B</option>
                            <option value="3">Kelas 3</option>
                            <option value="4">Kelas 4</option>
                            <option value="5">Kelas 5</option>
                            <option value="6">Kelas 6</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tahun Akademik</label>
                        <input type="text" name="tahun_ajaran" class="form-control" placeholder="Masukkan Tahun Akademik">
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