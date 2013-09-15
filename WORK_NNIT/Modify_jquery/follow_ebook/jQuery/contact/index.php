<html>
	<head>
	<title>Contact Form</title>
	<style>
	.req-label{
	font-weight:bold;
	}
	</style>
	<!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	</head>
	<body>
		<script>
			$(document).ready(function(){

			
				//alert("jquery");
				/*$('legend').each(function(){
					$(this).replaceWith('<h3>'+$(this).text()+'<h3>');
				});*/

					$('legend').replaceWith('<h3>'+$('legend').text()+'<h3>');
				

				var requiredFlag="*";
				var conditionalFlag="**";

				var requiredKey = $('.required:first').next().text();
				var conditionalKey =$('.conditional:first').next('span').text();
				//alert(requiredKey +'\n' +conditionKey);

				requiredKey = requiredFlag +requiredKey.replace(/^\((.+)\)$/ ,'$1');
				conditionalKey = conditionalFlag + conditionalKey.replace(/^\((.+)\)$/,'$1');
				$('<p></p>')
					.addClass('field-key')
					.append(requiredKey +'<br />')
					.append(conditionalKey)
					.css('background','#cccccc')
					.insertBefore('form');
				
				//alert(requiredKey);
				//alert(conditionKey)

				$('form :input')
					.filter('.required')
						.next('span').text(requiredFlag).end()
						.prev('label').addClass('req-label').end()
					.end()
					.filter('.conditional')
						.next().text(conditionalFlag).end();
					

			//Comment ทำการตรวจสอบการติ๊ก check box	

			$('input.conditional').next('span').andSelf().hide().end().end()
			.each(function(){
				var $thisInput = $(this);
				var $thisFlag = $thisInput.next('span');
				//alert($thisFlag);
				$thisInput.prev('label').find(':checkbox')
					.attr('checked',false)
					.click(function(){
					if(this.checked){
					$thisInput.show().addClass('required');
					$thisFlag.show();
					$(this).parent('label').addClass('req-label');
					}else{
					$thisInput.hide().removeClass('required').blur();
					$thisFlag.hide();
					$(this).parent('label').removeClass('req-label');
					}

				});
			});
				
			//comment ตรวจสอบค่าใน tag input
			$('form :input').blur(function(){
				$(this).parents('li:first').removeClass('warning')
				.find('span.error-message').remove();

				if($(this).hasClass('required')){
				var $listItem = $(this).parents('li:first');
					if(this.value ==''){
					var errorMessage = 'This is arequired field';

					if($(this).hasClass('conditional')){
						errorMessage += ',when its related '+ 'checkbox is checked';
					}


					$('<span></span>')
					.addClass('error-message')
					.text(errorMessage)
					.appendTo($listItem);
				$listItem.addClass('warning');
					}
				}

				//Check mail
				if(this.id =='email'){
				var $listItem = $(this).parents('li:first');
					if($(this).is(':hidden')){
						this.value ='';
					}
					if(this.value != '' && !/.+@.+\.[a-zA-Z]{2,4}$/ .test(this.value)){
					var errorMessage = 'Please use proper e-mail format' +'(e.g. joe@example.com)';
					
					$('<span></span>')
					.addClass('error-message')
					.text(errorMessage)
					.appendTo($listItem);
					$listItem.addClass('warning');
					}

				}

			});
			//


			});
		</script>
	
	<form>
	<fieldset>
		<legend>Personal Info</legend>
		<ol>
			<li>
			<label for="first-name">First Name</label>
			<input class="required" type="text" name="first-name" id="first-name">
			<span>(required)</span>
			</li>
			<li>
			<label for="first-name">Last Name</label>
			<input class="required" type="text" name="last-name" id="last-name">
			<span>(required)</span>
			</li>
			<li>
			How would you like to be contacted?(choose at least one method)
				<ul>
					<li>
						<label for="by-email">
							<input type="checkbox" name="by-contact-type" value="E-mail" id="by-email">
							by E-Mail
						</label>
						<input class="conditional" type="text" name="email" id="email">
						<span>(required when corresponding checkbox checked)</span>
					</li>
					<li>
						<label for="by-phone">
							<input type="checkbox" name="by-contact-type" value="Phone" id="by-phone">
							by Phone
						</label>
						<input class="conditional" type="text" name="phone" id="phone">
						<span>(required when corresponding checkbox checked)</span>
					</li>
					<li>
						<label for="by-fax">
							<input type="checkbox" name="by-contact-type" value="Fax" id="by-fax">
							by Fax
						</label>
						<input class="conditional" type="text" name="fax" id="fax">
						<span>(required when corresponding checkbox checked)</span>
					</li>
				</ul>
			</li>
		</ol>
	</fieldset>
	</form>
	</body>
</html>