<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="<?= BASEURL;?>/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?=BASEURL;?>/css/style.css">
        <link rel="shortcut icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">  
        <title><?=$data['judul']; ?></title>
    </head>

    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand">First<b>Step</b></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= BASEURL;?>">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL;?>/layanan">Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL;?>/kontak">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL;?>/about">About</a>
                            </li>
                        </ul>
                        <!-- <form class="form-inline my-2 my-lg-0">
                            <a href="<?= BASEURL;?>/login"><button class="btn btn-outline-primary my-2 my-sm-0" type="button">Login</button></a>
                            <a href="<?= BASEURL;?>/logout"><button class="btn btn-outline-primary my-2 my-sm-0" type="button">Logout</button></a>
                        </form> -->
                    </div>
                </nav>
            </div>
        </header>
