<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <?= css('assets/css/index.css') ?>
  
  <?= js('assets/js/jquery-3.3.1.min.js') ?>
  <?= js('assets/js/jquery.duotone.min.js') ?>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <?= js('assets/js/script.js') ?>
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-54490249-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-54490249-2');
  </script>

</head>
<body>

<div class="wrapper">
  <header class="header">
      <!-- <div class="branding column">
        <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
      </div> -->
      <nav role="navigation" class="normal">
        <a href="<?= url() ?>" rel="home"><img class="logo" src="<?= kirby()->urls()->assets() ?>/images/idc-logo.svg"></a>
        <a href="<?= url() ?>/search" rel="search"><img class="search" src="<?= kirby()->urls()->assets() ?>/images/search.svg"></a>
            <?php snippet('menu') ?>
      </nav>
      <nav role="navigation" class="mobile">
        <?php snippet('menu') ?>
        <a href="<?= url() ?>" rel="home" class="nav-home"><img class="logo" src="<?= kirby()->urls()->assets() ?>/images/idc-logo.svg"></a>
        <span class="nav-hamburger"><img class="hamburger" src="<?= kirby()->urls()->assets() ?>/images/hamburger.svg"></span>
        <span class="nav-close"><img class="close" src="<?= kirby()->urls()->assets() ?>/images/close.svg"></span>
      </nav>
  </header>
