<?php if ($page->gallery()->bool()) : ?>
  <section id="gallery">
    <div class="container med-container">
    <?php if ($page->hasImages()): ?>
        <?php foreach($page->images() as $image) : ?>
          <img data-src="<?= $image->url() ?>" src="<?= $image->resize(5,5,90)->url() ?>" alt="" class="full-width lazy">
        <?php endforeach ?>
      <?php else : ?>
        <h4 class="text-center">Yikes!</h4>
        <p class="text-center">There should be a gallery here! <br /> But there aren't any images showing up.</p>
    <?php endif ?>
    </div>
  </section>
<?php endif ?>