<html>
	<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Register Form</title>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		//del
		$('.del').live("click",function(event){
			//alert(event.target.id);
			$.ajax({
				url:'server.php',
				type:'get',
				dataType:'JSON',
				cach:true,
				data:{'id':event.target.id,'action':'del'},
				success:function(data){
					
					if(data['result']=="success"){
					//alert("");
					requestData();
					}
				}
					
			});
		});

		//edit
		$(".edit").live("click",function(event){
			alert(event.target.id);
			$.ajax({
				url:'server.php',
				type:'get',
				dataType:'json',
				data:{'id':event.target.id,'action':'edit'},
				success:function(data){
					data['fullName']
					$("#fullName").val("");
					$("#email").val("");
					$("#tel").val("");
					$("textarea#address").text("");

					$("#fullName").val(data['fullName']);
					$("#email").val(data['email']);
					$("#tel").val(data['tel']);
					$("textarea#address").text(data['address']);
					var $id= data['id'];

					$("#action").val("editMange");
					$("#save").val("edit");
					var inputID="<input type='hidden' id='id' name='id' value='"+$id+"'>";
					$("input#id").remove();
					$("#action").after(inputID)
					//if(data['result'])
				}
			});
		});

		//alert("hello jquery");
			$("form#form1").submit(function(){
				
				$.ajax({
					url:'server.php',
					type:'post',
					dataType:'json',
					//data:{'data1':$("#fullname").val()}
					data:$(this).serialize(),
					success:function(data){
					//alert(data)
					alert(data['result']);
					requestData();
					}
				});
				return false;
			});
			//select data from database;
			var requestData = function(){
			$.ajax({
				url:'server.php',
				type:'post',
				dataType:'html',
				data:{"action":"select"},
				success:function(data){
				$("table#showData tbody").empty();
				$("table#showData tbody").append(data);
				
				}
			});
			}

			requestData();
		});
	</script>
	</head>
	<body>
	<table id="showData">
	<thead>

		<tr>
			<th>
			
			</th>
			<th>
			Full Name
			</th>
			<th>
			E-mail
			</th>
			<th>
			Tel
			</th>
			<th>
			Address
			</th>
			<th>
			Management
			</th>
		</tr>
	</thead>
	<tbody>
		
	</tbody>
	</table>
	<form id="form1">
	<table>
		<tr>
			<td>Full Name</td>
			<td>
			<input type="text" name="fullName" id="fullName">
			</td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td>
			<input type="text" name="email" id="email">
			</td>
		</tr>
		<tr>
			<td>Tel.</td>
			<td>
			<input type="text" name="tel" id="tel">
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
			<textarea name="address" id="address"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<input type="submit" id="save" value="Save">
			<input type="hidden" name="action" id="action" value="add">
			<input type="reset" id="clear" value="clear">
			</td>
			
		</tr>
	</table>
	</form>
	</body>
</html>