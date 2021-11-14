<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index">
    <meta name="author" content="Yukai">
    <meta property="fb:app_id" content="453526095028535" />
    <meta property="og:url" content="https://lucky-dress.eu" />
    <meta property="og:type" content="website" />
    <meta property="article:author" content="Lucky DRESS" />
    <meta property="article:publisher" content="https://www.facebook.com/luckydresskrakow/" />
    <meta property="og:title" content="Lucky DRESS - Atelier" />
    <meta property="og:description" content="Wedding, evening and cocktail dresses" />
    <meta property="og:image" content="http://www.luckydress.eu/i/aboutus03.jpg" />
    <meta property="og:image:secure_url" content="http://www.luckydress.eu/i/aboutus03.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="361" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:locale:alternate" content="pl_PL" />
    <meta property="og:site_name" content="Fashion" />
    <meta itemprop="name" content="Lucky DRESS - Atelier" />
    <meta itemprop="description" content="Wedding, evening and cocktail dresses" />
    <meta itemprop="image" content="http://www.luckydress.eu/i/aboutus03.jpg" />
    <title><?=$data['page_title'] . " | " . $GLOBALS['cfg']['site']['orgName']?></title>
    <link rel="stylesheet" href="/public/assets/catalog/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/assets/catalog/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/public/assets/catalog/css/templatemo-style.css">
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-film mr-2"></i>

                <?=$GLOBALS['cfg']['site']['orgName']?>
                <?php

                    echo isset($_SESSION['user_email']) ? "<span style='font-size:14px;'> | Hi, " . $_SESSION['user_email'] . '</span>': "";

                ?>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 <?= ($data['page_title']) == "Photos" ? 'active':'';?> " aria-current="page" href="<?=ROOT?>index">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2 <?= ($data['page_title']) == "Videos" ? 'active':'';?> " href="<?=ROOT?>videos">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3 <?= ($data['page_title']) == "About" ? 'active':'';?> " href="<?=ROOT?>about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4 <?= ($data['page_title']) == "Contact" ? 'active':'';?> " href="<?=ROOT?>contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4 <?= ($data['page_title']) == "Upload Image" ? 'active':'';?> " href="<?=ROOT?>upload/image">Upload Image</a>
                </li>

            </ul>
            </div>
        </div>
    </nav>
