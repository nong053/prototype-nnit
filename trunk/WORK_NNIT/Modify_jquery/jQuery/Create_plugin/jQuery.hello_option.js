jQuery.fn.hello_option = function(option){

	var optionDefault = {
		txt:"defalult text"
	}
	var ex = jQuery.extend(optionDefault,option);

	return alert(ex.txt);
}