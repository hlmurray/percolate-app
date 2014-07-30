var $nav = $(".nav-toggle"),
    $masthead = $('.masthead');
 
$(document).ready(function(){
	$masthead.on('click', '.navbar-wrapper', (function(e) {
		$nav.slideToggle("slow");
	}))
});
 
$(function(){
     $(window).resize(function(){
         if($(this).width() >= 870){
             $nav.css('display', '');
         }
      })
      .resize();
});