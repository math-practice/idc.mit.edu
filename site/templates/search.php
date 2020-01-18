  <?php snippet('header') ?>
  
  <form>
    <div class="cursor">
    <input type="search" name="q" placeholder="Enter search term" value="<?= esc($query) ?>" class="search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search term'" autofocus>
    <i></i>
    </div>
    <!-- <input type="submit" value="Search"> -->
  </form>

  <main class="main" role="main">

    <section class="search">
      <!-- <h1><?= esc($query) ?></h1> -->
      <ul>
        <?php foreach($results as $result): ?>
        <li>
          
            <h2><a href="<?= $result->url() ?>"><?= $result->title()->html() ?></a></h2>
          
            <p class="url"><a href="<?= $result->url() ?>"><?= $result->url() ?></a></p>
          <p><?= excerpt($result->intro_1(), 350) ?></p>
          <p><?= excerpt($result->page_content(), 350) ?></p>
          <p><?= excerpt($result->text(), 350) ?></p>
          
        </li>
        <?php endforeach ?>
      </ul>
    </section>
    
    <?php snippet('pagination') ?>
    
  </main>

<?php snippet('footer') ?>