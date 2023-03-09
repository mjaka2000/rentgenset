<?php $this->load->view('login/template/head'); ?>

<body class="hold-transition login-page">
    <div class="wrapper">
        <div class="login-box">
            <!-- /.login-logo -->

            <div class="box box-outline box-primary">
                <img class="img" src="<?= base_url(); ?>assets/upload/logo/ws.png" alt="Logo" width="100%">
                <div class="box-header text-center">
                    <h4><b>SILAHKAN LOGIN</b></h4>
                </div>
                <div class="box-body">
                    <!-- <p class="login-box-msg">Silahkan Login untuk masuk</p> -->
                    <form action="<?= base_url('login/proses_login'); ?>" class="login" method="post">
                        <?php if ($this->session->flashdata('msg')) { ?>
                            <div class="alert alert-warning alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Peringatan!</strong><br> <?php echo $this->session->flashdata('msg'); ?>
                            </div>
                        <?php } ?>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="username" placeholder="Username" autofocus required="" autofocus />
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>

                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                        </div>
                        <!-- <?php if (isset($token_generate)) { ?>
                        <input type="hidden" name="token" value="<?php echo $token_generate ?>">
                    <?php } else {
                                    redirect(base_url());
                                } ?> -->
                        <div class="row">
                            <div class="col-xs-8">
                                <?php echo anchor(base_url('login/register'), 'Register') ?>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-sm btn-primary btn-block"><i class="fa fa-sign-in mr-2"></i>&nbsp;Log In</button>
                                <!-- /.col -->
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.login-box -->
    </div>

    <?php $this->load->view('login/template/footer'); ?>