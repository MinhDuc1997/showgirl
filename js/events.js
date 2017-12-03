
$(document).ready(function(){
	$(document).on("mouseover",".imgg",function(){
		$(this).animate({width: '144%'});
		//console.log($(this).attr('src'));
	})
	$(document).on("mouseout",".imgg",function(){
		$(this).animate({width: '124%'});
	})
	$(document).on("click",".imgg",function(){
		createdivshowimg($(window).height());
		$(".show").fadeIn(500);
		$(".show").css('height', ($(window).height() - 59)+ 'px');
		document.getElementsByClassName('img-show')[0].src = $(this).attr('src');
		$()
		/*console.log($(this).attr('src'));*/
		console.log($(window).height());
	})	
    $(document).on("click",".close",function(){
		$(".show").fadeOut(500);
	})
	/*$("img").mouseover(function(){
		console.log('ok');
	});*/
});