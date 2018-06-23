<?php foreach ($site->children()->visible() as $section): ?>
  <section class="section" id="<?= $section->title()->html() ?>">
    <div class="container">
      <h3><?= $section->title() ?></h3>
      <?= $section->intro()->kirbytext() ?>
      <a class="button" href="<?= $section->url() ?>">Read On..</a>
    </div>
  </section>
<?php endforeach ?>