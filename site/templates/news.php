<?php snippet('header') ?>

  <main class="main" role="main">

      <h1 class="small"><?= $page->display_title()->html() ?></h1>  

    <section class="news">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>
          <article class="list clearfix">
            <div class="alt-summary">
              <p class="meta date"><?= $article->date('F jS, Y') ?></p>
              <a href="<?= $article->url() ?>"><h2><?= $article->title()->html() ?></h2></a>
              
              <?php 
                // Get matching lab's links from the Structure
                $lab_link = "";
                foreach($site->find('labs')->labs()->toStructure() as $lab) {
                  if ($lab->name()->value() == $article->lab()->value()){
                    $lab_link = $lab->link();
                  }
                }
                // Print
                if (!$article->lab()->empty()) {
                  echo '<a href="'.$lab_link.'" target="_blank">';
                  echo '<span class="lab-button">';
                  echo $article->lab();
                  echo '</span>';
                  echo '</a>';
                }
              ?>

            </div>
            <div class="alt-thumb">
               <?php if($image = $article->coverimage()->toFile()): ?>
                  <a href="<?= $article->url() ?>">
                    <figure>
                      <span class="overlay">
                        <?= thumb($image, array('width' => 880, 'height' => 495, 'crop' => true, 'quality' => 90)); ?>
                      </span>
                      <span class="pink">
                        <?= thumb($image, array('width' => 880, 'height' => 495, 'crop' => true, 'quality' => 90)); ?>
                      </span>
                    </figure>
                  <?php endif ?>
                </a>
            </div>
          </article>
        <?php endforeach ?>
      <?php else: ?>
        <p>No research projects yet.</p>
      <?php endif ?>
    </section>

    <?php snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>