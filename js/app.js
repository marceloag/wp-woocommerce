// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

jQuery(document).ready(function($) {  

	// site preloader -- also uncomment the div in the header and the css style for #preloader
	jQuery(window).load(function(){
		jQuery('#preloader').fadeOut('slow',function(){jQuery(this).remove();});
	});

	setTimeout(function(){
	// var postURL='https://www.facebook.com/benditopan.puntaarenas';
	// document.getElementById('facebookLikeBox').innerHTML="<iframe allowTransparency='true' class='facebooklike' frameborder='0' scrolling='no' src='http://www.facebook.com/plugins/like.php?href='"+postURL+"'&layout=box_count&show_faces=false&width=450&action=like&colorscheme=light'></iframe>";

	}, 8000);

});