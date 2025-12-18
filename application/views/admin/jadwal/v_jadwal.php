                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-6">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Kode Kelas</th>
                                    <td> : </td>
                                    <td><?php echo $detil['id_kelas']; ?></td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td> : </td>
                                    <td><?php echo $detil['kls']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tahun Akademik</th>
                                    <td> : </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                    <h1 class="h3 mb-2 text-gray-800">Jadwal Kelas</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <?php echo $this->session->flashdata('pesan'); ?>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Tambah Data
                        </button>
                        <a class="btn btn-warning" href="<?php echo base_url('Jadwal'); ?>">Kembali</a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Semester</th>
                                            <th>Guru</th>
                                            <th>Hari</th>
                                            <th>Jam</th>
                                            <th>Aksi</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1;
                                        foreach($mapel as $row ) { 
                                        if($row->soft_delete == 1) {?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $row->matapel ?></td>
                                            <td><?php echo $row->smt ?></td>
                                            <td><?php echo $row->nama_guru ?></td>
                                            <td><?php echo $row->hari ?></td>
                                            <td><?php echo $row->jam ?></td>
                                            <td>
                                                <a title="Delete Data" href="<?php echo site_url('Jadwal/softDelete/'.$row->id_jadwal); ?>" onClick="return confirm('Yangg Benerr mau di hapus?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php }} ?>
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
            <div class="modal-dialog" role="document" method="post" action="<?php echo base_url('Jadwal/add/'.$detil['id_kelas']); ?>" encytpe="multipart/form-data">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jadwal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open_multipart('Jadwal/add/'.$detil['id_kelas']); ?>
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <select name="mapel" id="mapel" class="form-control">
                            <option>--Pilih Mata Pelajaran--</option>
                            <?php foreach ($klsMapel as $ww) { ?>
                            <option value="<?php echo $ww->id_mapel; ?>">Semester <?php echo $ww->semester; ?> - <?php echo $ww->matapel; ?> - <?php echo $ww->id_kelas; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Guru</label>
                        <select name="guru" id="guru" class="form-control">
                            <option>--Pilih Guru--</option>
                            <?php $guru = $this->M_guru->getData()->result(); 
                            foreach ($guru as $g) { ?>
                            <option value="<?php echo $g->id_guru; ?>"><?php echo $g->nama_guru; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <select name="hari" id="hari" class="form-control">
                            <option>--Pilih Hari--</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Juma'at">Jum'at</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Jam</label>
                        <input type="text" name="jam" id="jam" class="form-control" placeholder="cth : 07.00-08.15" require="">
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