$(".slider").slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  arrow: true,
  responsive: [{
    breakpoint: 767,
    settings: {
      slidesToShow: 2,
    }
  },
  ]
});