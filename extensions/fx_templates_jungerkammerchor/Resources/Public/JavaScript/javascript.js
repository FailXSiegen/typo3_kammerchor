$(function () {
  $('header .owl-carousel').owlCarousel({
    items: 1
  })
  $('.lightbox').fancybox()
  $('.count').each(function () {
    let $this = $(this)
    $this.inViewport(function (px) {
      if (px > 120 && !this.initNumAnim) {
        this.initNumAnim = true
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

var gaProperty = 'UA-144643286-1'
var disableStr = 'ga-disable-' + gaProperty
if (document.cookie.indexOf(disableStr + '=true') > -1) {
  window[disableStr] = true
}

// Opt-out function
function gaOptout() {
  document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
  window[disableStr] = true;
  alert('Das Tracking durch Google Analytics wurde in Ihrem Browser für diese Website deaktiviert.');
}