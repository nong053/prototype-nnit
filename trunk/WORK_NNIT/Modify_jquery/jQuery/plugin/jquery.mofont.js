jQuery.fn.mofont = function(options){
 var defaults={
	color:"red",
	opacity:0.5
 };
 var opts = $.extend(defaults,options);
 return $(this).css({"color":opts.color,"opacity":opts.opacity});
}