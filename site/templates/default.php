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

    <title><?= $page->metatitle() ?></title>
    <meta name="description" content="<?= $page->metacontent() ?>">
    <?php if ($page->toggle() == 'true') : ?>    
        <meta name="robots" content="noindex">
    <?php endif ?>

</head>

<body>

    <?php
    $image = $page->background()->toFile();
    ?>

    <div class="main-photo" style="background-image:url(<?php if ($image) {
                                                            echo $image->url();
                                                        } ?>)">

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

        <div class="pt-5">
            <div class="py-5 mt-5">
                <div class="in-middle">
                    <h2 class="display-4 centerTitle"><?= $page->center() ?></h2>
                </div>
            </div>
        </div>
    </div>

    <main id="main_page">
        <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-4 pr-md-4">
            <div class="row">
                <div class="col-lg-10 col-md-12">
                    <div class="py-5">
                        <p class="font-weight-bold" style="color:darkblue;"><?= $page->section() ?></p>
                        <p class="font-weight-bold">Overview:</p>
                        <ul class="ul-style">
                            <li><?php echo $page->sectionmenu()->text()->kirbytext() ?></li>
                        </ul>

                        <div id="section">
                            <?php foreach ($page->sectionmodules()->toStructure() as $section) : ?>
                                <div class="font-weight-bold py-3"><?php echo $section->title()->html() ?></div>
                                <div style="margin-bottom: 2em;"><?= $section->text()->kirbytext() ?></div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php snippet('footer') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>


    <script>
        $(function() {
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 10) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>

</body>

</html>