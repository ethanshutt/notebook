function lazyLoad() {

  registerListener('load', loadImages);
  registerListener('scroll', loadImages);
  registerListener('resize', loadImages);

  let images = [];

  var lazyImages = document.getElementsByTagName('img');
  images = lazyImages;

  function loadImages() {
    for (var i = 0; i < images.length; i++) {
      if (isInViewport(images[i])) {
        if (images[i].getAttribute('data-src')) {
          images[i].src = images[i].getAttribute('data-src');
          images[i].removeAttribute('data-src');
        }
      }
    }
  }

  function isInViewport(el) {
    var rect = el.getBoundingClientRect();

    return (
      rect.bottom >= 0 &&
      rect.right >= 0 &&

      rect.top <= (
        window.innerHeight ||
        document.documentElement.clientHeight) &&

      rect.left <= (
        window.innerWidth ||
        document.documentElement.clientWidth)
    );
  }

  function registerListener(event, func) {
    if (window.addEventListener) {
      window.addEventListener(event, func)
    } else {
      window.attachEvent('on' + event, func)
    }
  }
}
lazyLoad();