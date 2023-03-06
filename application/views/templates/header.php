<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Memanggil CSS -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/index.css">

    <!-- Memanggil CSS Bootstrap V.5.3.0 -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Memanggil CSS Fontawesome V.6.3.0 -->
    <link rel="stylesheet" href="<?= base_url("assets") ?>/vendor/fontawesome/css/all.min.css">

    <!-- Memanggil CSS Sweetalert V.2 -->
    <link rel="stylesheet" href="<?= base_url("assets") ?>/vendor/sweetalert/css/sweetalert2.min.css">
</head>
<body>

    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets') ?>/img/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Bootstrap
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="nav navbar-nav ms-auto w-100 justify-content-end me-5">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-money-bill me-1"></i>
                        1
                    </a>

                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-boxes-packing me-1"></i>
                        2
                    </a>

                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-cubes me-1"></i>
                        3
                    </a>

                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-users me-1"></i>
                        4
                    </a>

                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-cart-shopping me-1"></i>
                        5
                    </a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->