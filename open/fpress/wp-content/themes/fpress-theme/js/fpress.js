//funções javascript
jQuery(document).ready(function($) {


   $("#navToggle").click(function(){
      $('body,html').animate({
         scrollTop: 0
      }, 300);
      $(".navbar").slideToggle(300);
      $(this).toggleClass("fa-bars fa-times", 1000);
   });


});
