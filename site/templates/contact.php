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
        <div class="pt-1">
            <div class="py-5">
                <main class="main_contact">

                    <div class="image_contact" style="text-align: center;">
                        <img src="assets/img/contact-us.png">
                    </div>

                    <div class="text-left pl-5 contact_info">
                        <p><strong>BeMo Academic Consulting Inc.</strong></p>
                        <p><strong><u>Toll Free:</u></strong> 1-855-900-BeMo (2366)</p>
                        <p><strong><u>Email:</u></strong> info@bemoacademicconsulting.com</p>
                    </div>

                    <?php if ($success) : ?>
                        <div class="alert success">
                            <p><?= $success ?></p>
                        </div>
                    <?php else : ?>
                        <?php if (isset($alert['error'])) : ?>
                            <div><?= $alert['error'] ?></div>
                        <?php endif ?>
                        <form method="post" action="<?= $page->url() ?>">
                            <div class="honeypot">
                                <label for="website">Website <abbr title="required">*</abbr></label>
                                <input type="website" id="website" name="website">
                            </div>
                            <div class="container">
                                <div class="form-group contact_group">
                                    <label for="name">
                                        Name: <abbr title="required">*</abbr>
                                    </label>
                                    <input class="form-control" type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
                                    <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>

                                    <label for="email">
                                        Email Address: <abbr title="required">*</abbr>
                                    </label>
                                    <input class="form-control" type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
                                    <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>

                                    <label for="text">
                                        How can we help you? <abbr title="required">*</abbr>
                                    </label>
                                    <textarea class="form-control" id="text" name="text" required>
                         <?= $data['text'] ?? '' ?>
                        </textarea>
                                    <?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>
                                </div>

                                <input class="form-control" type="email" id="mailto" name="mailto" value="<?= $page->mailto() ?>" hidden>

                                <input type="reset" value="Reset">
                                <input type="submit" name="submit" value="Submit">
                            </div>
                        </form>
                    <?php endif ?>
                  <p class="py-5"><strong><u>Note:</strong></u> If you are having difficulties with our contact us form above, send us an email to info@bemoacademicconsulting.com (copy & paste the email address)</p>
                </main>
            </div>
        </div>

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
</body>


</html>
