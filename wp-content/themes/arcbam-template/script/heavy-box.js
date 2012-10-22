$(function () {
	
	$('div.marketting div.parentli .text a').click(function(){
		$('div.dark').css({
			display:'block',
			'background-image' : 'url(' + $(this).attr('href') + ')'
		},600).animate({
			opacity:1
			},600).click(function(){
			$(this).animate({
				opacity : 0
			},600,'ease-out',function(){
				$(this).css({display : 'none'});
			})
		})
		return false;
	});
});
