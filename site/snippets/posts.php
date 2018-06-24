<div class="container">
  <?php $posts = $page->children()->visible()->paginate(10) ?>
  <!-- Loop For Blog Posts -->
  <?php foreach($posts as $post): ?> 
    <article style="padding-bottom: 4em;">
      <?php if($image = $post->images()->sortBy('sort', 'asc')->first()): $featured = $image ?> 
        <a href="<?= $post->url() ?>"><img class="full-width" src="<?= $featured->url() ?>" alt="Featured Image for <?= $post->title()->html() ?>" class="featured-image" /></a>
      <?php endif ?>
      <h1><?= $post->title()->html() ?></h1>
      <p><?= $post->text()->excerpt(300) ?></p>
      <footer class="article-preview-footer"><?= $post->date('F jS, Y') ?> - <a href="<?= $post->url() ?>">Read On..</a></footer>
    </article>
  <?php endforeach ?>   
  <!-- Paginate -->
</div>
<div class="container">
  <nav class="container sm-container text-center">
    <?php if($posts->pagination()->hasPrevPage()): ?>
      <a class="prev" href="<?= $posts->pagination()->prevPageURL() ?>">&lsaquo; newer posts</a>
    <?php else: ?>
      <span class="newer disabled">&lsaquo; newer posts</span>
    <?php endif ?>
    <?php if($posts->pagination()->hasNextPage()): ?>
      <a class="older" href="<?= $posts->pagination()->nextPageURL() ?>">older posts &rsaquo;</a>
    <?php else: ?>
      <span class="older disabled">older posts &rsaquo;</span>
    <?php endif ?>
  </nav>
</div>