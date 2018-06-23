<?php snippet('head') ?>
<?php snippet('menu') ?>
<body>
  <main class="main" id="site-content">
    <section id="<?= $page->title()->html() ?>-content">
    <div class="container">
      <?= $page->text()->kirbytext() ?>
    </div>
    </section>
  </main>
<?php snippet('footer') ?>