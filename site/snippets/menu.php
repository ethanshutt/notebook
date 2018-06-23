<nav class="nav">
    <ul class="menu">
      <li class="menu-item"><a href="/">Home</a></li>
    <?php foreach($pages->visible() as $item): ?>
      <li class="menu-item" id="<?= r($item->isOpen(), 'active') ?>">
        <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</nav>