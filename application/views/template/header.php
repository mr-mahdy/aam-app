<!DOCTYPE html>
<html lang="en">

<head>

    <title><?= $judul; ?></title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/templatemo-style.css">
</head>

<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <?php if ($this->session->userdata('role_id') == 1) : ?>
                    <!-- lOGO TEXT HERE -->
                    <a href="<?= base_url('home'); ?>" class="navbar-brand">Portal SekPim</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="<?= base_url('admin'); ?>" class="smoothScroll">Profil</a></li>
                    <li><a href="<?= base_url('admin/notif'); ?>" class="smoothScroll">Notifikasi</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="section-btn"><a href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                </ul>
            </div>
        <?php else : ?>

            <a href="<?= base_url('home'); ?>" class="navbar-brand">Aam Official</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="<?= base_url('home'); ?>" class="smoothScroll">Home</a></li>
                <li><a href="#profil" class="smoothScroll">Profil</a></li>
                <li><a href="#artikel" class="smoothScroll">Artikel</a></li>
                <li><a href="#karya" class="smoothScroll">Karya</a></li>
                <li><a href="<?= base_url('jadwal/index') ?>">Jadwal</a></li>
                <li><a href="#contact" class="smoothScroll">Perkembangan</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-login">Daftar / Login</a></li>
            </ul>
        </div>
    <?php endif; ?>


    </div>
    </section>

    <!-- MODAL -->


    <section class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-popup">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="modal-title">
                                    <h2>Aam Amiruddin Official</h2>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <!-- NAV TABS -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Buat Akun</a></li>
                                    <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Login</a></li>
                                </ul>

                                <!-- TAB PANES -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                        <form action="<?= base_url('auth/registration'); ?>" method="post">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                                            <?= $this->session->flashdata('nama'); ?>
                                            <input type="email" class="form-control" name="email" placeholder="Email">
                                            <?= $this->session->flashdata('email'); ?>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                            <?= $this->session->flashdata('password'); ?>
                                            <input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password">
                                            <?= $this->session->flashdata('password2'); ?>
                                            <input type="submit" class="form-control" name="submit" value="Buat Akun">
                                        </form>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                        <form action="<?= base_url('auth'); ?>" method="post">
                                            <input type="email" class="form-control" name="email1" placeholder="Email">
                                            <?= $this->session->flashdata('email1'); ?>
                                            <input type="password" class="form-control" name="password1" placeholder="Password">
                                            <?= $this->session->flashdata('password1'); ?>
                                            <input type="submit" class="form-control" name="submit" value="Login">
                                            <a href="https://www.facebook.com/templatemo">Lupa password?</a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>