<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
		ทดสอบการใช้งาน jsonp
		
		</title>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				//url:'http://www.workphp.com/sample/D-Cash/json.php'+'?callback=?',
				url:'server_jsonp.php?callback=?',
				type:'get',
				dataType:'json',
				success:function(data){
					//console.log(data['key1']);

					$.each(data,function(entryIndex,entry){

						console.log(entry[0]);
						console.log(entry[1]);
						console.log(entry[2]);
						console.log(entry[3]);
						console.log(entry[4]);
						console.log("--------------------");
					});
				//$("#content").append(data);
				}
			});
		});
	</script>
	</head>
	<body>

	<div id="content">
		Hello world
	</div>
	</body>
</html>