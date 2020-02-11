<?php snippet('header') ?>

  <main class="main" role="main">

      <h1><?= $page->display_title()->html() ?></h1>  
      
    <div class="filter">
      <select onChange="window.location.href=this.value" <?= (param("topic")) ? "class='selected'":"" ?>>
        <option value="<?= $page->url() ?>/topic:/lab:<?= (param("lab")) ? param('lab'):"" ?>">All Research Topics</option>
        <?php foreach($page->tags()->split(',') as $tag): ?>
          <option value="<?= $page->url() ?>/topic:<?= $tag ?>/lab:<?= (param("lab")) ? param('lab'):"" ?>" <?= (param("topic") == $tag) ? "selected='selected'":"" ?>><?= $tag ?></option>
        <?php endforeach ?>
      </select>

      <select onChange="window.location.href=this.value" <?= (param("lab")) ? "class='selected'":"" ?>>
        <option value="<?= $page->url() ?>/topic:<?= (param("topic")) ? param('topic'):"" ?>/lab:">All Labs</option>
        <?php foreach($site->find('labs')->labs()->toStructure() as $lab): ?>
          <option value="<?= $page->url() ?>/topic:<?= (param("topic")) ? param('topic'):"" ?>/lab:<?= $lab->name() ?>"<?= (param("lab") == $lab->name()) ? "selected='selected'":"" ?>><?= $lab->name() ?></option>
        <?php endforeach ?>
      </select>

      <?= (param("topic") || param("lab")) ? '<a class="clear" href='.$page->url().'>Clear Filter</a>':'' ?>
    </div>

    <section class="research">
      
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>
          <article class="list clearfix">
            <div class="alt-summary">
              <p class="meta"><?= $article->categories() ?></p>
              <a href="<?= $article->url() ?>"><h2><?= $article->title()->html() ?></h2></a>
              
              <?php 
                // Get matching lab's links from the Structure
                $lab_link = "";
                foreach($site->find('labs')->labs()->toStructure() as $lab) {
                  // echo "<br>–".$lab->name()->value();
                  if ($lab->name()->value() == $article->lab()->value()){
                    $lab_link = $lab->link();
                  }
                }
                // Print
                if ($page->lab()) {
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
        <p>No research projects yet.</p>
        <p><a class="clear" href="<?= $page->url() ?>">Clear filter</a></p>
      <?php endif ?>
    </section>

   <?php snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>