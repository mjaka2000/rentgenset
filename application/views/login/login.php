<?php $this->load->view('login/template/head'); ?>

<body class="hold-transition login-page">
    <div class="wrapper">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="" class="h5"><i class="fa fa-sign-in-alt mr-2"></i><b>Log in</b></a>
                </div>
                <div class="card-body">
                    <!-- <p class="login-box-msg">Silahkan Login untuk masuk</p> -->

                    <form action="<?= base_url('login/proses_login'); ?>" class="login" method="post">
                        <?php if ($this->session->flashdata('msg')) { ?>
                            <div class="alert alert-warning alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Peringatan!</strong><br> <?php echo $this->session->flashdata('msg'); ?>
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
                            <input type="password" class="form-control" name="password" placeholder="Password" required="" />

                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>

                        </div>
                        <!-- <?php if (isset($token_generate)) { ?>
                        <input type="hidden" name="token" value="<?php echo $token_generate ?>">
                    <?php } else {
                                    redirect(base_url());
                                } ?> -->
                        <div class="row">
                            <div class="col-8">
                                <?php echo anchor(base_url('login/register'), 'Register') ?>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-sm btn-primary btn-block"><i class="fa fa-sign-in-alt mr-2"></i>Log In</button>
                                <!-- /.col -->
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->
    </div>

    <?php $this->load->view('login/template/footer'); ?>