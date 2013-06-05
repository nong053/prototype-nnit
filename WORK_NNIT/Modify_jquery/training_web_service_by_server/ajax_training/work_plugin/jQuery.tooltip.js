jQuery.fn.tooltip = function(option){
	var $defaultOption={
		txt:"Default text"
	}
	var $ex = jQuery.extend($defaultOption,option);
	$(this).hover(function(e){
	var $left = e.pageX+10;
	var $top = e.pageY+10;
	$("#tooltip").html($ex.txt).css({"left":$left,"top":$top}).show("slow");
	},function(){
	$("#tooltip").hide("slow");
	});

}