$(document).ready(function(){
	$("#icon-menu-responsive").click(function(){
		$('#site').toggleClass('open-respon-menu');
	});
	$(window).resize(function(){
		if($(document).width() >= 768){
			$('#site').removeClass('open-respon-menu');
		}
	});
});