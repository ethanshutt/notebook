<?php snippet('head') ?>
<?php snippet('menu') ?>
<body>
  <main class="main" id="site-content">
    <section id="homepage-content">
      <div class="container text-center" style="border-bottom: 4px solid #707070">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <div class="container">
        <?= $page->text()->kirbytext() ?>
      </div>
    </section>
    <?php snippet('children') ?>
  </main>
<?php snippet('footer') ?>