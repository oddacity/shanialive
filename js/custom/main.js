var mastheadH = $('#masthead').outerHeight();

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - mastheadH
        }, 1000);
        return false;
      }
    }
  });
});

$(document).ready(function(){

	$(".lazy").lazyload({
        effect : "fadeIn",
        event : 'scroll load',
        threshold : 200,
    });

	$('.menu-toggle').click(function(){
		$('.main-navigation').toggleClass('toggled');
	});

});