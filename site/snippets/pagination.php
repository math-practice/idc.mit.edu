<?php if($pagination->hasPages()): ?>
<!--   <nav class="pagination wrap cf">

    <?php if($pagination->hasPrevPage()): ?>
      <a class="pagination-item left" href="<?= $pagination->prevPageURL() ?>" rel="prev" title="newer articles">
        <?= (new Asset("assets/images/arrow-left.svg"))->content() ?>
      </a>
    <?php else: ?>
      <span class="pagination-item left is-inactive">
        <?= (new Asset("assets/images/arrow-left.svg"))->content() ?>
      </span>
    <?php endif ?>

    <?php if($pagination->hasNextPage()): ?>
      <a class="pagination-item right" href="<?= $pagination->nextPageURL() ?>" rel="next" title="older articles">
        <?= (new Asset("assets/images/arrow-right.svg"))->content() ?>
      </a>
    <?php else: ?>
      <span class="pagination-item right is-inactive">
        <?= (new Asset("assets/images/arrow-right.svg"))->content() ?>
      </span>
    <?php endif ?>

  </nav> -->
  <nav class="pagination">
    <ul>
      <?php if($pagination->hasPrevPage()): ?>
      <li><a href="<?= $pagination->prevPageURL() ?>">&larr;</a></li>
      <?php endif ?>

      <?php foreach($pagination->range(10) as $r): ?>
      <li><a class="num <?php if($pagination->page() == $r) echo 'active' ?>" href="<?= $pagination->pageURL($r) ?>"><?= $r ?></a></li>
      <?php endforeach ?>

      <?php if($pagination->hasNextPage()): ?>
      <li class="last"><a href="<?= $pagination->nextPageURL() ?>">&rarr;</a></li>
      <?php endif ?>

    </ul>
  </nav>
<?php endif ?>