

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h5 class="h5 text-gray-900 mb-4">Selamat Datang di Halaman Login</h5>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan'); ?>
                                    <form action="<?php echo base_url('Auth/getLogin'); ?>" method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="email" 
                                                placeholder="Enter Email Address...">
                                            <?php echo form_error('username', '<div class="text-danger small ml 3">' ) ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="password" placeholder="Password">
                                                <?php echo form_error('password', '<div class="text-danger small ml 3">' ) ?>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" name="level" id="">
                                                <option>--Pilih Akses--</option>
                                                <option value="admin">Admin</option>
                                                <option value="siswa">Siswa</option>
                                            </select>
                                            <?php echo form_error('level ', '<div class="text-danger small ml 3">' ) ?>
                                        </div>

                                        <button type="submit" href="<?php echo site_url('Auth/getLogin'); ?>" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="<?php echo base_url('Auth/register'); ?>">Create an Account!</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
