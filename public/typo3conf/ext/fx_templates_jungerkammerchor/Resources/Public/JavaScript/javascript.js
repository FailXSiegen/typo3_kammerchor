$(function () {
  $('header .owl-carousel').owlCarousel({
    items: 1
  })
  $('.lightbox').fancybox()
  $('.count').each(function () {
    let $this = $(this)
    $this.inViewport(function (px) {
      if (px > 120 && !this.initNumAnim) {
        this.initNumAnim = true;
        jQuery({Counter: 0}).animate({Counter: $this.data('countto')}, {
          duration: 1000,
          easing: 'swing',
          step: function () {
            $this.text(Math.ceil(this.Counter))
          }
        })
      }
    })
  })
})

$(function ($, win) {
  $.fn.inViewport = function (cb) {
    return this.each(function (i, el) {
      function visPx () {
        var H = $(this).height(),
          r = el.getBoundingClientRect(), t = r.top, b = r.bottom
        return cb.call(el, Math.max(0, t > 0 ? H - t : (b < H ? b : H)))
      }

      visPx()
      $(win).on('resize scroll', visPx)
    })
  }
}(jQuery, window))