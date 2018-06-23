<footer class="site-footer">
    <div class="container">
      <h3>Links</h3>    
      <ul class="footer-links">
        <?php foreach($pages->visible() as $item): ?>
          <li class="footer-link-item">
            <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
          </li>
        <?php endforeach ?>
      </ul>
      <p id="copyright"><?= $site->copyright()->kirbytext() ?></p>
    </div>
</footer>
<?= js('assets/js/scripts.js') ?>

</body>
</html>