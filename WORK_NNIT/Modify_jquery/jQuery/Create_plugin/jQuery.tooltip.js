jQuery.fn.tooltip = function(option){
	var defaultOption = {
	txt:"test"
	}

	var ex = jQuery.extend(defaultOption,option);

	$(this).hover(function(e){
		var $left=e.pageX+10;
		var $top =e.pageY+10;
		$("#tooltip").html(ex.txt).css({"left":$left,"top":$top}).slideDown("slow");
	},function(){
		$("#tooltip").hide();
	});
}