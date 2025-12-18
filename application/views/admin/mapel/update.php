
                <div class="card-body">
                <div class="card shadow mb-4">
            <div class="card-header py-3">
                        <div class="box box-primary">
                            <div class="box-header with-boarder">
                            <?php echo form_open_multipart('Mapel/updateAksi/'. $mapel['id_mapel']); ?>
                            <div class="form-group">
                        <label>Kode Mata Pelajaran</label>
                        <input type="text" name="id_mapel" disable="" class="form-control" placeholder="Masukkan Kode Mata Pelajaran" value="<?php echo $mapel['id_mapel']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <input type="text" name="matapel" class="form-control" placeholder="Masukkan Mata Pelajaran" value="<?php echo $mapel['matapel']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Tahun Akademik</label>
                        <input type="text" name="tahun_ajaran" class="form-control" placeholder="Masukkan Tahun Akademik" value="<?php echo $mapel['tahun_ajaran']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <select name="semester" class="form-control">
                        <?php $mp = $mapel['semester']; ?>
                            <option>--Pilih Kelas--</option>
                            <option <?php echo ($mp == "1")? "selected": ""?>>1</option>
                            <option <?php echo ($mp == "2")? "selected": ""?>>2</option>
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

                    <a href="<?php echo site_url('Mapel'); ?>" class="btn btn-sm btn-warning"> Kembali </a>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <?php echo form_close() ?>
                                </div>
                            </div>
                            </div>
                                </div> 
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>