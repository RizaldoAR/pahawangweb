<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?= $tittle; ?></title>
</head>



<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <div class="d-flex flex-row">
                <img src="<?= base_url('img/logo.png'); ?>" alt="" width="60" height="60" class="d-inline-block align-text-top">
            </div>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav">
                <a class="nav-link <?= $Home; ?>" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                <a class="nav-link <?= $Package; ?>" href="<?= base_url('/package'); ?>">Package List</a>
                <a class="nav-link <?= $Order; ?>" href="<?= base_url('/order'); ?>">Order List</a>
            </div>
        </div>
    </div>



</nav>






<body>