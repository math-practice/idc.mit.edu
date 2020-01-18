<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?= $page->title()->html() ?></h1>

    <section class="clearfix">
    	<div class="content left">
		    <?= $page->intro_1()->kirbytext() ?>
		  </div>
		  <div class="side right">
		  	<div class="idc-sutd">
			  	<img src="<?= kirby()->urls()->assets() ?>/images/idc-sutd.svg" class="sutd">
			  </div>
		  </div>
		  <div class="content right">
		    <?= $page->intro_2()->kirbytext() ?>
		  </div>
	  </section>

	  <section class="clearfix">
	  	<div class="content left">
	  		<?php if($image = $page->coverimage()->toFile()): ?>
		  		<figure>
		  			<span class="overlay green">
			  			<?= thumb($image, array('width' => 1200, 'height' => 800, 'crop' => true, 'quality' => 90)); ?>
				  	</span>
				  	<?= thumb($image, array('width' => 1200, 'height' => 800, 'crop' => true, 'quality' => 90)); ?>
			  	</figure>
			  <?php endif ?>
	  	</div>
	  	<div class="side right">
		  	<?= $page->contact()->kirbytext() ?>
		  </div>
	  </section>
      
  </main>

<?php snippet('footer') ?>
