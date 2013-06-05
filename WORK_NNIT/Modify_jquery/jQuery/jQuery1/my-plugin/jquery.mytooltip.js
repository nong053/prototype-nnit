// JavaScript Document
jQuery.fn.mytooltip = function(option){
	var opt = jQuery.extend({'colorBg':'#FF0000'},option)
	var title;
	title = $(this).attr("title");
	$(this).hover(function(){
						   
	$("#tipmsg").css({'background-color':opt.colorBg});
	
	$(this).attr("title","");
	$("#tipmsg").html(title);
	$("#tipmsg").slideDown(1000);
	
	},function(){
	$(this).attr("title",title);
	$("#tipmsg").slideUp(1000);
	});
	//e variable is get event
	$(document).mouseover(function(e){
		//console.log(e.pageX);
		var x,y;
		x = e.pageX+2; y = e.pageY+2;
		$("#tipmsg").css("left",x+"px").css("top",y+"px");
	});
	
	
	
}