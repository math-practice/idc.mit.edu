  <?php snippet('header') ?>

  <main class="main" role="main">

    <article class="single clearfix">
      
      <!-- <?php snippet('coverimage', $page) ?> -->
      <?php if($image = $page->coverimage()->toFile()): ?>
        <?= thumb($image, array('width' => 1840, 'height' => 1035, 'crop' => true, 'quality' => 90)); ?>
      <?php endif ?>

      <p class="meta"><a href="<?= $page->parent()->url() ?>"><span class="page"><?= $page->parent()->title()->html() ?></span></a><span class="category"> — <?= $page->date('F jS, Y') ?></span></p>
      <h1><?= $page->title()->html() ?></h1>

      <div class="content">
        <?php 
          // Get matching lab's links from the Structure
          $lab_link = "";
          foreach($site->find('labs')->labs()->toStructure() as $lab) {
            if ($lab->name()->value() == $page->lab()->value()){
              $lab_link = $lab->link();
            }
          }
          // Print
          if (!$page->lab()->empty()) {
            echo '<a href="'.$lab_link.'" target="_blank">';
            echo '<span class="lab-button">';
            echo $page->lab();
            echo '</span>';
            echo '</a>';
          }
        ?>
        <?= $page->text()->kirbytext() ?>
      </div>
    
    </article>
    
    <!-- <?php snippet('prevnext', ['flip' => true]) ?> -->
    
  </main>

<?php snippet('footer') ?>