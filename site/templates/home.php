<?php snippet('header') ?>

  <main class="main" role="main">
  	<section class="full-logo" >
	    <img src="<?= kirby()->urls()->assets() ?>/images/idc-full-logo.svg">
	  </section>
    
    <section class="news-summary clearfix">
    	<!-- News Images -->
    	<?php if($site->find('news')->children()): ?>
	    	<ul class="thumbs">
	    	  <?php foreach($site->find('news')->children()->flip()->limit(4) as $article): ?>
		    		<?php if($image = $article->coverimage()->toFile()): ?>
		    	    <!-- <article> -->
		  	    		<li>
		  	    			<a href="<?=$article->url()?>">
			  	    		  <figure>
			  	    		  	<span class="overlay pink">
				  	    		    <?= thumb($image, array('width' => 1200, 'height' => 800, 'crop' => true, 'quality' => 90)); ?>
				  	    		  </span>
			  	    		    <?= thumb($image, array('width' => 1200, 'height' => 800, 'crop' => true, 'quality' => 90)); ?>
			  	    		  </figure>
			  	    		</a>
			  	    		<?='<figcaption>' .$article->title()->html() . '</figcaption>'?>
	  	    		  </li>
  	    		  <!-- </article> -->
  	    		<?php endif ?>
	    	  <?php endforeach ?>
	    	</ul>
    	<?php else: ?>
    	  <p>No news yet.</p>
    	<?php endif ?>

    	<!-- News Text -->
      <?php if($site->find('news')->children()): ?>
	      <ul class="text">
	      	<li class="header"><h4>News</h4></li>
	        <?php foreach($site->find('news')->children()->flip()->limit(4) as $article): ?>
	          <!-- <article> -->
	          	<li>
	          		<a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a><br/>
	          		<?= $article->date('M d, Y') ?>
	            </li>
	          <!-- </article> -->
	        <?php endforeach ?>
	      </ul>
      <?php else: ?>
        <p>No news yet.</p>
      <?php endif ?>

    </section>

    <h2><?= $page->lead() ?></h2>
    <section class="intro-text">
	    <?= $page->intro()->kirbytext() ?>
	  </section>

  </main>

<?php snippet('footer') ?>