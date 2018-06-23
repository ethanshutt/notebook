<?php foreach ($site->children()->visible() as $section): ?>
  <section class="section" id="<?= $section->title()->html() ?>">
    <div class="container">
      <h3><?= $section->title() ?> Page</h3>
      <?= $section->text()->kirbytext() ?>
      <a href="<?= $section->url() ?>">Read On..</a>
    </div>
  </section>
<?php endforeach ?>