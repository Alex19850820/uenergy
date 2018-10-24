'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Shared = function Shared() {
  _classCallCheck(this, Shared);
};

$('.slider-about').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  centerMode: true,
  prevArrow: '<button class="prevArrow-about" type="button" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 361"> <path d="M344.8 5.4c-7-7.2-18.6-7.2-25.8 0-7 7-7 18.6 0 25.5l130.8 130.8H18.1C8 161.8 0 169.8 0 179.9s8 18.3 18.1 18.3h431.7L319 328.8c-7 7.2-7 18.8 0 25.8 7.2 7.2 18.8 7.2 25.8 0l161.8-161.8c7.2-7 7.2-18.6 0-25.5L344.8 5.4z" fill="#000000"/></svg></button>',
  nextArrow: '<button class="nextArrow-about" type="button" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 361"> <path d="M344.8 5.4c-7-7.2-18.6-7.2-25.8 0-7 7-7 18.6 0 25.5l130.8 130.8H18.1C8 161.8 0 169.8 0 179.9s8 18.3 18.1 18.3h431.7L319 328.8c-7 7.2-7 18.8 0 25.8 7.2 7.2 18.8 7.2 25.8 0l161.8-161.8c7.2-7 7.2-18.6 0-25.5L344.8 5.4z" fill="#000000"/></svg></button>',
  responsive: [{
    breakpoint: 992,
    settings: {
      centerMode: true,
      slidesToShow: 3
    }
  }, {
    breakpoint: 768,
    settings: {
      centerMode: true,
      slidesToShow: 2
    }
  }, {
    breakpoint: 480,
    settings: {
      centerMode: true,
      slidesToShow: 1
    }
  }]
});

if (document.querySelector('.partners__slick')) {
  var $template_url = $("input[name='template_url']").val();
  $('.partners__slick').slick({
    variableWidth: true,
    prevArrow: '<button class="partners__slick-btn partners__slick-prev"><img src="'+ $template_url +'assets/images/arrow-prev.png"></button>',
    nextArrow: '<button class="partners__slick-btn partners__slick-next"><img src="'+ $template_url +'/assets/images/arrow-next.png"></button>'
  });
}
//# sourceMappingURL=script.js.map
