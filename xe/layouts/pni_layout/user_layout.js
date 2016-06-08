jQuery(function($) {
	$( ".gnbMenu>li" ).bind({
		  mouseenter : function() {
		  	if(!$(this).hasClass("active")){
		  		$(".gnbMenu>li.active>.subMenu").css("display","none");
		  	}
		  },
		  mouseleave : function() {
		  	if(!$(this).hasClass("active")){
		  		$(".gnbMenu>li.active>.subMenu").css("display","block");
		  	}		  	
		  }
	});
});