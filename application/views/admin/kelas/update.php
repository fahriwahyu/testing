
                <div class="card-body">
                <div class="card shadow mb-4">
            <div class="card-header py-3">
                        <div class="box box-primary">
                            <div class="box-header with-boarder">
                            <?php echo form_open_multipart('Kelas/updateAksi/'. $kelas['id_kelas']); ?>
                            <div class="form-group">
                        <label>Kode Kelas</label>
                        <input type="text" name="id_kelas" disable="" class="form-control" placeholder="Masukkan Kode Kelas" value="<?php echo $kelas['id_kelas']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kls" class="form-control">
                            <option>--Pilih Kelas--</option>
                            <?php $k = $kelas['kls']; ?>
                            <option <?php echo ($k == "1A")? "selected": ""?>>Kelas 1A</option>
                            <option <?php echo ($k == "1B")? "selected": ""?>>Kelas 2A</option>
                            <option <?php echo ($k == "2A")? "selected": ""?>>Kelas 1B</option>
                            <option <?php echo ($k == "2B")? "selected": ""?>>Kelas 2B</option>
                            <option <?php echo ($k == "3")? "selected": ""?>>Kelas 3</option>
                            <option <?php echo ($k == "4")? "selected": ""?>>Kelas 4</option>
                            <option <?php echo ($k == "5")? "selected": ""?>>Kelas 5</option>
                            <option <?php echo ($k == "6")? "selected": ""?>>Kelas 6</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tahun Akademik</label>
                        <input type="text" name="tahun_ajaran" class="form-control" placeholder="Masukkan Tahun Akademik" value="<?php echo $kelas['tahun_ajaran']; ?>">
                    </div>       
                    
                    <a href="<?php echo site_url('Kelas'); ?>" class="btn btn-sm btn-warning"> Kembali </a>
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