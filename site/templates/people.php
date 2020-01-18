<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?= $page->display_title_1()->html() ?></h1>
    <section class="people-small clearfix">
      <ul>
        <?php foreach($page->contacts_1()->toStructure() as $item): ?>
          <?php $headshot = $page->image($item->headshot()) ?>
          <?php if($headshot): ?>
            <?php $headshot_thumb = thumb($headshot, array('width' => 290, 'crop' => true, 'quality' => 90)) ?>
          <?php endif ?>
          <li>
            <?php if($headshot): ?>
              <?php $item_link = $item->link()->value(); ?>
              <?php if(str::length($item_link) > 0): ?>
                <a href="<?= $item_link ?>" target="_blank">
                  <figure>
                    <span class="overlay">
                      <img src="<?= $headshot_thumb->url() ?>"alt="<?= $item->name()->html() ?>">
                    </span>
                    <span class="pink">
                      <img src="<?= $headshot_thumb->url() ?>"alt="<?= $item->name()->html() ?>">
                    </span>
                  </figure>
                </a>
                <?php else: ?>
                  <figure>
                    <span class="overlay">
                      <img src="<?= $headshot_thumb->url() ?>"alt="<?= $item->name()->html() ?>">
                    </span>
                    <span class="pink">
                      <img src="<?= $headshot_thumb->url() ?>"alt="<?= $item->name()->html() ?>">
                    </span>
                  </figure>
              <?php endif ?>
            <?php endif ?>
            <?php if(str::length($item_link) > 0): ?>
              <a href="<?= $item_link ?>" target="_blank">
                <h4><?= $item->name()->html() ?></h4>
              </a>
            <?php else: ?>
              <h4><?= $item->name()->html() ?></h4>
            <?php endif ?>
            <p class="title"><?= $item->title()->html() ?></p>
          </li>
        <?php endforeach ?>
      </ul>
    </section>

    <h1><?= $page->display_title_2()->html() ?></h1>

    <section class="people-small clearfix">
      <ul>
        <?php foreach($page->contacts_2()->toStructure() as $item): ?>
          <?php $headshot = $page->image($item->headshot()) ?>
          <?php if($headshot): ?>
            <?php $headshot_thumb = thumb($headshot, array('width' => 290, 'crop' => true, 'quality' => 90)) ?>
          <?php endif ?>
          <li>
            <?php if($headshot): ?>
              <?php $item_link = $item->link()->value(); ?>
              <?php if(str::length($item_link) > 0): ?>
                <a href="<?= $item_link ?>" target="_blank">
                  <figure>
                    <span class="overlay">
                      <img src="<?= $headshot_thumb->url() ?>"alt="<?= $item->name()->html() ?>">
                    </span>
                    <span class="green">
                      <img src="<?= $headshot_thumb->url() ?>"alt="<?= $item->name()->html() ?>">
                    </span>
                  </figure>
                </a>
                <?php else: ?>
                  <figure>
                    <span class="overlay">
                      <img src="<?= $headshot_thumb->url() ?>"alt="<?= $item->name()->html() ?>">
                    </span>
                    <span class="green">
                      <img src="<?= $headshot_thumb->url() ?>"alt="<?= $item->name()->html() ?>">
                    </span>
                  </figure>
              <?php endif ?>
            <?php endif ?>
            <?php if(str::length($item_link) > 0): ?>
              <a href="<?= $item_link ?>" target="_blank">
                <h4><?= $item->name()->html() ?></h4>
              </a>
            <?php else: ?>
              <h4><?= $item->name()->html() ?></h4>
            <?php endif ?>
            <p class="title"><?= $item->title()->html() ?></p>
          </li>
        <?php endforeach ?>
      </ul>
    </section>
  
  </main>

<?php snippet('footer') ?>
      
