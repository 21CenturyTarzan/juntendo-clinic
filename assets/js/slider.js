$(document).ready(function () {

  $('.slider-news').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    focusOnSelect: true
  });

  $('.category-list a[data-slide]').click(function(e){
    e.preventDefault();
    $('.category-list a').removeClass('active');
    $(this).addClass('active');

    var slideno = $(this).data('slide');
    $('.slider-news').slick('slickGoTo', slideno - 1);
  })

});


