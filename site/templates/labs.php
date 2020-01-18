<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?= $page->display_title()->html() ?></h1>

    <section class="labs clearfix">
      <ul>
        <?php $index = 0; ?>
        <?php foreach($page->labs()->toStructure() as $item): ?>
          <li>
            <?php $image = $page->image($item->image()) ?>
            <?php if($image): ?>
              <a href="<?= $item->link()->html() ?>" target="_blank">
                <figure>
                  <span class="overlay">
                    <!-- <img src="<?= $image->url() ?>" dataid="<?= $index ?>"> -->
                    <?php
                      if($index % 2 == 0){ 
                        echo thumb($image, array('width' => 450, 'height' => 600, 'crop' => true, 'quality' => 90)); 
                      } else {
                        echo thumb($image, array('width' => 560, 'height' => 400, 'crop' => true, 'quality' => 90)); 
                      }
                    ?>
                  </span>
                  <span class="green">
                    <!-- <img src="<?= $image->url() ?>"> -->
                    <?php
                      if($index % 2 == 0){ 
                        echo thumb($image, array('width' => 450, 'height' => 600, 'crop' => true, 'quality' => 90)); 
                      } else {
                        echo thumb($image, array('width' => 560, 'height' => 400, 'crop' => true, 'quality' => 90)); 
                      }
                    ?>
                  </span>
                </figure>
              </a>
              <a href="<?= $item->link()->html() ?>" target="_blank"><p><?= $item->name()->html() ?></p></a>
              <p class="desc"><?= $item->description()->html() ?></p>
            <?php endif ?>
          </li>
          <?php $index++ ?>
        <?php endforeach ?>
      </ul>
    </section>
      
  </main>

<?php snippet('footer') ?>
