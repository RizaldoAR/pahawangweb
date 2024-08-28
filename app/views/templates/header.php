<!doctype html>
<html lang="en">

<head>

    <!-- Header Bootstrap -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">

    <title><?= $data['judul']; ?></title>
</head>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <div class="d-flex flex-row">
                <img src="<?= BASEURL; ?>/assets/img/logo.png" alt="" width="60" height="60" class="d-inline-block align-text-top">
            </div>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav">
                <a class="nav-link <?= $data['home']; ?> " aria-current="page" href="<?= BASEURL; ?>">Home</a>
                <a class="nav-link <?= $data['order']; ?> " href="<?= BASEURL; ?>/order">Order Package</a>
                <a class="nav-link <?= $data['list']; ?> " href="<?= BASEURL; ?>/order/list">Order List</a>
            </div>
        </div>
    </div>



</nav>

<body>