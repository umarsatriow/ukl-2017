
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Hide Password dengan Javascript | Jurnalweb.com</title>
	<meta name="description" content="Cara hide show password dengan javascript agar pengguna bisa melihat dan menyembunyikan teks password form login atau register"/>
	<meta name="keywords" content="html, javascript, coding, koding, pemrograman, show hide password, js"/>
	
	<style>
	header{
		margin: 30px auto;
		text-align: center;
		color: #333;
	}
	header h1{
		font-size: 20px;
	}
	header h4{
		font-size: 16px;
	}
	form{
		max-width: 300px;
		margin: 50px auto;
		padding: 20px;
		background: #f4f7f8;
		border-radius: 8px;
		border: 1px solid #d4f7f8;
	}
	input[type="text"],
	input[type="password"]{
		border: 1px solid #d4f7f8;
		padding: 15px;
		font-size: 17px;
	}
	input[type="button"]{
		margin-top: 10px;
		border: none;
		padding: 5px;
		font-size: 13px;
	}
	</style>
	<script>
	function ShowPassword()
	{
		if(document.getElementById("mypass").value!="")
		{
			document.getElementById("mypass").type="text";
			document.getElementById("show").style.display="none";
			document.getElementById("hide").style.display="block";
		}
	}
	function HidePassword()
	{
		if(document.getElementById("mypass").type == "text")
		{
			document.getElementById("mypass").type="password"
			document.getElementById("show").style.display="block";
			document.getElementById("hide").style.display="none";
		}
	}
	</script>

</head>
<body>
<header>
	<h1>Show Hide Password dengan Javascript</h1>
	<h4>Baca tutorialnya di <a href="http://www.jurnalweb.com/cara-show-hide-password-dengan-javascript">Jurnalweb.com</a></h4>
</header>
<form action="#" class="jw-form">
	<input type="text" value="" id="myuser" placeholder="Username"><br>
	<input type="password" value="" id="mypass" placeholder="Password"><br>
	<input type=button id="show" value="Show Password" onclick="ShowPassword()">
	<input type=button style="display:none" id="hide" value="Hide Password" onclick="HidePassword()">
</form>

</body>
</html>