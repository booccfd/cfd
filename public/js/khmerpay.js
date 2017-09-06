// JavaScript Document

$(document).ready(function(){
	
	/* animation goTop */
	$('body').delegate('.btn_gotoTop','click',function(){
		$('html, body').animate({scrollTop : 0},500);
		return false;
	});
	/* //action */

	/*$('.menu_wrap li a').click(function(e) {
		$(this).parents('li').addClass('on').siblings('li').removeClass('on');
		var Text = $(this).attr("href");
            Text = Text.toLowerCase();
            Text = Text.replace(/[\s]+/g,'');
            $(this).attr("href", Text);
	});*/

});