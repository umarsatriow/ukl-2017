<!DOCTYPE html>
<html>
<head>
	<title>Show Hide Form Password Dengan JQuery | www.malasngoding.com</title>	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styleshow-hidepassword2.css">
</head>
<body>
	<h1>Show Hide Form Password Dengan JQuery <br/> www.malasngoding.com</h1>	
 
	<div class="kotak">
		<form>
			<input class="form-password" type="password">
			<br/>
			<br/>
			<input type="checkbox" class="form-checkbox"> Show password
			<br/>
			<br/>			
			<input class="form-submit" type="submit" value="Login">
		</form>
	</div>
 
</body>
<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script>
</html>