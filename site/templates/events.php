<?php snippet('header') ?>

  <main class="main" role="main">
    <?php 
      $timestamp = strtotime("today", time());
      $upcoming = $page->children()->visible()->filterBy('date', '>=', $timestamp);
    ?>
    <?php if($upcoming->count()): ?>
      <h1>Upcoming</h1>
      <?php foreach($upcoming as $article): ?>
        <article class="list clearfix">
            <div class="alt-summary <?php if ($article->series() == "Industry Day"){ echo "industry-day"; } ?>">
              <p class="meta series"><?= $article->series() ?>:</p>
              <a href="<?= $article->url() ?>">
                <h2><?= $article->title()->html() ?></h2>
              </a>
              <p class="meta date"><?= $article->date('F jS, Y') ?></p>
              <p class="meta description"><?= $article->short_description() ?></p>

            </div>
            <div class="alt-thumb <?php if ($article->series() == "Industry Day"){ echo "industry-day"; }?>">
               <?php if($image = $article->coverimage()->toFile()): ?>
                  <a href="<?= $article->url() ?>">
                    <figure>
                      <span class="overlay">
                        <?= thumb($image, array('width' => 1200, 'height' => 675, 'crop' => true, 'quality' => 90)); ?>
                      </span>
                      <span class="pink">
                        <?= thumb($image, array('width' => 1200, 'height' => 675, 'crop' => true, 'quality' => 90)); ?>
                      </span>
                    </figure>
                  <?php endif ?>
                </a>
            </div>
          </article>
      <?php endforeach ?>
    <?php endif ?>

    <h1><?= ($upcoming->count()) ? "Past ":"" ?><?= $page->display_title()->html() ?></h1>  

    <section class="events">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>
          <article class="list clearfix">
            <div class="alt-summary <?php if ($article->series() == "Industry Day"){ echo "industry-day"; } ?>">
              <p class="meta series"><?= $article->series() ?>:</p>
              <a href="<?= $article->url() ?>">
                <h2><?= $article->title()->html() ?></h2>
              </a>
              <p class="meta date"><?= $article->date('F jS, Y') ?></p>
              <p class="meta description"><?= $article->short_description() ?></p>

            </div>
            <div class="alt-thumb <?php if ($article->series() == "Industry Day"){ echo "industry-day"; }?>">
               <?php if($image = $article->coverimage()->toFile()): ?>
                  <a href="<?= $article->url() ?>">
                    <figure>
                      <span class="overlay">
                        <?= thumb($image, array('width' => 1200, 'height' => 675, 'crop' => true, 'quality' => 90)); ?>
                      </span>
                      <span class="pink">
                        <?= thumb($image, array('width' => 1200, 'height' => 675, 'crop' => true, 'quality' => 90)); ?>
                      </span>
                    </figure>
                  <?php endif ?>
                </a>
            </div>
          </article>
        <?php endforeach ?>
      <?php else: ?>
        <p>No events yet.</p>
      <?php endif ?>
    </section>

    <?php snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>