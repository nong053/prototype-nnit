// JavaScript Document
jQuery.fn.hello = function(msg,option){
	var opt = jQuery.extend({'colorFont':'#FF0000','fontSize':'44px'},option)
	$(this).click(function(){
	//alert(opt.colorFont);
	//alert(opt.fontSize);
	$(this).css({'color':opt.colorFont,'font-size':opt.fontSize}).val(msg);
	});
}