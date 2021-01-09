let mainNav = document.getElementById("js-menu");
let navBarToggle = document.getElementById("js-navbar-toggle");

// navBarToggle.addEventListener("click", function () {
//     mainNav.classList.toggle("active");
// })

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
  }

//Jquery  
$(document).ready(function(){
    $("#openModal").hide();
    $(document).scrollTop(0);
});
function ScrollUp() {
    $('html, body').animate({ scrollTop: 0 }, '300');
}
$("#explore-btn").click(function () {
    $('html, body').animate({
        scrollTop: $("#section1").offset().top
    }, 1000);
});
$("#ShowModal").click(function(){
    $("#openModal").show();
})
//Newsletter Subscribe
$(function(){
    $('.one form .btn').on('click',function(){ 
       $(this).parents('.one').animate({
            top : '-500px'
          },500);
      
        $(this).parents('.one').siblings('.two').animate({
            top : '0px'
          },500);
      return false;
    });
  $('.two .close').on('click',function(){
    $(this).parent().animate({
     top : '-500px'
    },500);
    
    $(this).parent().siblings('.one').animate({
     top : '0px'
    },500);
    return false;
   });
  });