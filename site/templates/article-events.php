  <?php snippet('header') ?>

  <main class="main" role="main">

    <article class="single clearfix">
      
      <!-- <?php snippet('coverimage', $page) ?> -->
      <?php if($image = $page->coverimage()->toFile()): ?>
        <?= thumb($image, array('width' => 1840, 'height' => 1035, 'crop' => true, 'quality' => 90)); ?>
      <?php endif ?>

      <p class="meta"><a href="<?= $page->parent()->url() ?>"><span class="page"><?= $page->parent()->title()->html() ?></span></a><span class="category"> — <?= $page->date('F jS, Y') ?>,
      <?php 
        $start_time = $page->start_time();
        $end_time = $page->end_time();
        if (strlen($start_time) > 0) { echo $start_time; }
        if (strlen($end_time) > 0) { echo '–'.$end_time; }
      ?>
      </span>
      </p>
      <h1><?= $page->series()->html() ?>: <?= $page->title()->html() ?></h1>

      <div class="content">
          
        <?= $page->text()->kirbytext() ?>
      </div>
    
    </article>
    
    <!-- <?php snippet('prevnext', ['flip' => true]) ?> -->
    
  </main>

<?php snippet('footer') ?>