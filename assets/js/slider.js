$(document).ready(function () {

  $('.slider-news').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    focusOnSelect: true
  });

  $('.category-list a[data-slide]').click(function(e){
    e.preventDefault();
    $('.category-list a').removeClass('active');
    $(this).addClass('active');

    var slideno = $(this).data('slide');
    console.log(slideno)
    $('.slider-news').slick('slickGoTo', slideno - 1);
  })

});


