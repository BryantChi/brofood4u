var TrandingSlider = new Swiper(".tranding-slider", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 2.5,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".mySwiper", {
  // effect: "coverflow",
  // grabCursor: true,
  // centeredSlides: true,
  // slidesPerView: "auto",
  // coverflowEffect: {
  //   rotate: 50,
  //   stretch: 0,
  //   depth: 100,
  //   modifier: 1,
  //   slideShadows: true,
  // },
  // pagination: {
  //   el: ".swiper-pagination",
  // },
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 1.5,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".feedbackSwiper", {
    effect: "cards",
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    slidesPerView: "auto",
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    },
  });

$(function () {
    $.each($('.faq-item-box'), function (i, v) {
        $(this).find('.faq-item-q').on('click', function () {
            // 關閉所有其他的 .faq-item-a 和重設箭頭狀態
            $('.faq-item-box').not($(this).parent()).find('.faq-item-a').slideUp();
            $('.faq-item-box').not($(this).parent()).find('.faq-item-arrow-d').removeClass('d-none');
            $('.faq-item-box').not($(this).parent()).find('.faq-item-arrow-p').addClass('d-none');

            // 切換當前項目的狀態
            $(this).parent().find('.faq-item-a').slideToggle();
            $(this).find('.faq-item-arrow-p').toggleClass('d-none');
            $(this).find('.faq-item-arrow-d').toggleClass('d-none');
        })
    })
})
