$(document).ready(function(){
  $('.pic-room a').click(function(){
      $('.first-pane').animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 800  );
      return false;
  });

  $(".button-collapse").sideNav();

  $("#arrow-top-1").click(function(){
      $("#triple-room").addClass("room-home-show").removeClass("room-home-hidden");
      $("#suite-room").addClass("room-home-hidden");
  });

  $("#arrow-bottom-1").click(function(){
      $("#single-room").addClass("room-home-show").removeClass("room-home-hidden");
      $("#suite-room").addClass("room-home-hidden");
  });

  $("#arrow-top-2").click(function(){
      $("#suite-room").addClass("room-home-show").removeClass("room-home-hidden");
      $("#single-room").addClass("room-home-hidden");
  });

  $("#arrow-bottom-2").click(function(){
      $("#double-room").addClass("room-home-show").removeClass("room-home-hidden");
      $("#single-room").addClass("room-home-hidden");
  });

  $("#arrow-top-3").click(function(){
      $("#single-room").addClass("room-home-show").removeClass("room-home-hidden");
      $("#double-room").addClass("room-home-hidden");
  });

  $("#arrow-bottom-3").click(function(){
      $("#triple-room").addClass("room-home-show").removeClass("room-home-hidden");
      $("#double-room").addClass("room-home-hidden");
  });

  $("#arrow-top-4").click(function(){
      $("#double-room").addClass("room-home-show").removeClass("room-home-hidden");
      $("#triple-room").addClass("room-home-hidden");
  });

  $("#arrow-bottom-4").click(function(){
      $("#suite-room").addClass("room-home-show").removeClass("room-home-hidden");
      $("#triple-room").addClass("room-home-hidden");
  });

  $('.slider').slider({full_width: true});
  $('.parallax').parallax();
  $('#gallery').galereya();

});
