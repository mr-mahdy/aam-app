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

                <!-- lOGO TEXT HERE -->
                <a href="<?= base_url('home'); ?>" class="navbar-brand">Aam Official</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#profil" class="smoothScroll">Profil</a></li>
                    <li><a href="#artikel" class="smoothScroll">Artikel</a></li>
                    <li><a href="#karya" class="smoothScroll">Karya</a></li>
                    <li class="dropdown"><a href="!#" class="dropdown-toggle" data-toggle="dropdown">Jadwal</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('jadwal/index') ?>">>> Permintaan</a><br><br>
                            <a class="dropdown-item" href="#">>> Pengumuman</a>
                        </div>
                    </li>

                    <li><a href="#contact" class="smoothScroll">Perkembangan</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Daftar / Login</a></li>
                </ul>
            </div>

        </div>
    </section>