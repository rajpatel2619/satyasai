$(document).ready(function(){
    $('.sidenav').sidenav();
    // $('.materialboxed').materialbox();
    // $('.parallax').parallax();
    // $('.tabs').tabs();
    // $('.fixed-action-btn').floatingActionButton();
    $('.datepicker').datepicker();
    $('.modal').modal();
    
  });
  //home slider
$(document).ready(function(){
   $('.slider-img').slick({
    dots:true,
    arrows:false,
    autoplay:true,
    autoplaySpeed:1500,
    fade:true,
    fadeSpeed:1000
   });

  });