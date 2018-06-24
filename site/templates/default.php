<?php snippet('head') ?>
<?php snippet('menu') ?>
<body>
  <main class="main" id="site-content">
    <section id="<?= $page->title()->html() ?>-content">
    <div class="container">
      <h1><?= $page->title() ?></h1>
      <?= $page->text()->kirbytext() ?>
    </div>
    </section>
    <?php snippet('gallery') ?>
    <?php if($page->uid() == 'blog'): ?>
      <?php snippet('posts') ?>
    <?php endif ?>    
  </main>
<?php snippet('footer') ?>