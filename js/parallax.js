function isInViewport(node) {
  var rect = node.getBoundingClientRect();
  return (
    (rect.height > 0 || rect.width > 0) &&
    rect.bottom >= 0 &&
    rect.right >= 0 &&
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.left <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function scrollParallax(selector) {
  var scrolled = jQuery(window).scrollTop();
  jQuery(selector).each(function (index, element) {
    var initY = jQuery(this).offset().top;
    var height = jQuery(this).height();
    var endY = initY + jQuery(this).height();

    // Check if the element is in the viewport.
    var visible = isInViewport(this);
    if (visible) {
      var diff = scrolled - initY;
      var ratio = Math.round((diff / height) * 100);
      jQuery(this).css(
        "background-position",
        "center " + parseInt(ratio * 1) + "px"
      );
    }
  });
}

jQuery(".parallax").each(function () {
  scrollParallax(this);
});

jQuery(window).scroll(function () {
  jQuery(".parallax").each(function () {
    scrollParallax(this);
  });
});
