$(document).ready(function(){
  $('.pic-room a').click(function(){
      $('.first-pane').animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 800  );
      return false;
  });
  
  $(".button-collapse").sideNav();
});
