<footer>
    <div class="container site-footer">
      <h4>Links</h4>  
      <ul class="footer-links">
        <?php foreach($pages->visible() as $item): ?>
          <li class="footer-link-item">
            <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
          </li>
        <?php endforeach ?>
      </ul>
      <?= $site->copyright()->kirbytext() ?>
    </div>
</footer>
<?= js('assets/js/scripts.js') ?>

</body>
</html>