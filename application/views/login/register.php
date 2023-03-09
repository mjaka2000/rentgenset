<?php $this->load->view('login/template/head'); ?>

<body class="hold-transition register-page">
    <div class="wrapper">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="" class="h5"><i class="fa fa-user-plus mr-2"></i><b>Register</b></a>
                </div>
                <div class="card-body">
                    <!-- <p class="login-box-msg"><b>*</b>Register sebagai user biasa</p> -->
                    <form action="<?= base_url('register/proses_register'); ?>" method="post">
                        <?php if ($this->session->flashdata('msg')) { ?>
                            <div class="alert alert-warning alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Peringatan!</strong><br> <?php echo $this->session->flashdata('msg'); ?>
                            </div>
                        <?php } ?>

                        <?php if ($this->session->flashdata('msg_daftar')) { ?>
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Berhasil!</strong><br> <?php echo $this->session->flashdata('msg_daftar'); ?>
                            </div>
                        <?php } ?>

                        <?php if (validation_errors()) { ?>
                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Peringatan!</strong><br> <?php echo validation_errors(); ?>
                            </div>
                        <?php } ?>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Username" autofocus required="" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email" autofocus required="" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <!-- <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div> -->
                                <?php echo anchor(base_url('login'), 'Log In') ?>
                            </div>
                            <!-- /.col -->
                            <div class="col-5">
                                <button type="submit" class="btn btn-sm btn-primary btn-block"><i class="fa fa-user-plus mr-2"></i>Register</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <!-- <div class="social-auth-links text-center">
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div> -->
                    <!-- <a href="login.html" class="text-center">I already have a membership</a> -->
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
    </div>

    <?php $this->load->view('login/template/footer'); ?>