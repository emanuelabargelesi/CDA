<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?= css('assets/css/style.css') ?>

    <?= $site->facebookpixel() ?>
    <?= $site->googlepixel() ?>

    <title><?= $page->metatitlecontact() ?></title>
    <meta name="description" content="<?= $page->metacontentcontact() ?>">


</head>

<body>
    <?php
    $image = $page->background()->toFile();
    ?>

    <div class="main-photo" style="background-image:url(<?php if ($image) {echo $image->url();} ?>)">

        <!-- Navbar-->
        <header class="header">
            <nav class="navbar navbar-expand-lg fixed-top py-3">
                <div class="container-fluid"><a href="#" class="navbar-brand"><img src="assets/img/bemo-logo2.png" class="img-brand"></a>
                    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <?php foreach ($site->children()->listed() as $navitem) : ?>
                                <li class="nav-item">
                                    <a href="<?= $navitem->url() ?>" class="nav-link text-capitalize">
                                        <?= $navitem->title() ?>
                                    </a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>