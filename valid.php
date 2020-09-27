<!DOCTYPE html>
<html>
<head>
	<title>MY VALIDATION PAGE</title>
	<script type="text/javascript">
		function validate() 
		{
			var uname = document.forms["form"]["username"];
			var email=document.forms["form"]["email"];
			var password=document.forms["form"]["password"];
			var repassword=document.forms["form"]["repassword"];

			if(uname.value=="") 
			{
				window.alert("Enter username");
				uname.focus();
				return false;
			}

			if(email.value=="") 
			{
				window.alert("Enter email");
				email.focus();
				return false;
			}
			if (!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email.value)) 
			{
				window.alert("Enter valid email");
				email.focus();
				return false;
			}
			if(password.value=="") 
			{
				window.alert("Enter password");
				password.focus();
				return false;
			}
			var x=password.value;
			if (x.match(/[a-z]/g) && x.match (/[A-Z]/g) && x.match(/[0-9]/g) && x.match(/[^a-zA-Z\d]/g) && x.length >=8)
			 {
			 	window.alert("password should contain the things ");
				password.focus();
				return false;
			 }
			else if(repassword.value!= password.value) 
			{
				window.alert("password doesnt match");
				repassword.focus();
				return false;
			}
			return true;
		}



	</script>
</head>
<body>
<form name="form" action="" onsubmit="return validate()" method="post">
	USER NAME: <input type="text" name="username"> <br><br>
	E-MAIL   : <input type="text" name="email"><br><br>
	PASSWORD : <input type="password" name="pwd"><br><br>
	RE-PASSWORD: <input type="password" name="repwd"><br><br>
	<input type="submit" name="button" value="submit here">
</form>
</body>
</html>