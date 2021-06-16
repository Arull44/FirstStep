<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?=BASEURL;?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=BASEURL;?>/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?=BASEURL;?>/js/bootstrap.min.js"></script>
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
                            <a class="nav-link" href="<?= BASEURL;?>/admin/dashboard">Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL;?>/admin/customer">Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL;?>/admin/layanan">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL;?>/admin/pesanan">Pesanan</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Logout</button>
                    </form>
                </div>
            </nav>
        </div>
    </header>
