$(function() {
    $('.galeria').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        prevArrow:"<div class='arrows boxLeft'><span class='material-icons'> navigate_before </span></div>",
        nextArrow:"<div class='arrows boxRight'><span class='material-icons'> navigate_next </span></div>",
      }); 
})