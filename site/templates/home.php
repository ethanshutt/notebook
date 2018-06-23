<?php snippet('head') ?>
<?php snippet('menu') ?>
<body>
  <main class="main" id="site-content">
    <section id="homepage-content">
      <div class="container">
        <?= $page->text()->kirbytext() ?>
      </div>
    </section>
    <?php snippet('children') ?>
  </main>
<?php snippet('footer') ?>