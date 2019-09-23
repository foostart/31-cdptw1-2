$(document).ready(function() {
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        loop: true,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        slideToClickedSlide: true,
      });
    var galleryTop = new Swiper('.gallery-top', {});
      galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;

    
  $(".gallery-thumbs .swiper-slide").click(function() {
    console.log($(this).children().prop('src'));
    $(".gallery-top .swiper-slide>img").attr("src",$(this).children().prop('src'));
  })
})
