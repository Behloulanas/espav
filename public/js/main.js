$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 1000,
        smartSpeed: 1500,
        autoplayHoverPause: true
    });
});

$('.btn').click(function () {
    $(this).toggleClass("click");
    $('.sidebar').toggleClass("show");
});
$('.serv-btn').click(function(){
    $('.serv-show').toggle(1000)
});

$('nav ul li').click(function () {
    $(this).addClass("active").siblings().removeClass("active");
});
$('.feat-btn').click(function(){
    $('.feat-show').toggle(1000)
})
$('.feat-btn-second').click(function(){
    $('.feat-show-espav').toggle(1000)
})

$('.fa-bars').click(function(){
       $('#sidebar').slideToggle();
     });


    
    var overlay = document.getElementById("overlay");

    window.addEventListener('load', function () {
        overlay.style.display = 'none';
    })

    
    $('.hamburger').click(function(){
      $('#navBar').slideToggle(1500);
      })
