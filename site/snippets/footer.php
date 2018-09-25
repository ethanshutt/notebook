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

<style>
  body {
  opacity: 1;
  transition: .8s opacity;
  }

  body.fade {
    opacity: 0;
    transition: none;
  }
</style>
<script>
  document.body.className = 'fade';
  
  document.addEventListener('DOMContentLoaded', function(e) {
    document.body.classList.remove('fade');
  });
</script>
<?= js('assets/js/scripts.js') ?>

</body>
</html>