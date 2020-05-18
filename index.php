<!DOCTYPE html>
<html>
<head>
	<title>Chuck Severance's Login Page</title>
</head>
<body>
<div class="container">
	<h1>Please Log In</h1>
	<form method="POST" action="login.php">
		<label for="email">Email</label>
		<input type="text" name="email" id="email"></br>
		<label for="id_1723">Password</label>
		<input type="password" name="pass" id="id_1723"></br>
<input type="submit" onclick="return doValidate();" value="Log In">
<input type="submit" name="cancel" value="Cancel">
	</form>
	<p>
		For a password hint, view source and final an account and password hint
		in the html comments.
	</p>
	<script>
		function doValidate(){
			console.log('Validating...');
			try{
				addr = document.getElementById('email').value;
				pw =document.getElementById('id_1723').value;
				console.log("Validating addr="+addr+" pw="+pw);
				if (addr == null || addr == "" || pw == null || pw == "") {
					return false;
				}
				if(addr.indexof('@') == -1){
					alert("Invalid email address");
					return false;
				}
				return true;
			}catch(0){
				return false;
			}
			return false;
		}
		else{
			 alert("Invalid email address");
			}
			function check(form)/*function to check userid & password*/
{
 the following code checkes whether the entered userid and password are matching*/
 
}
	</script>
</div>

</body>
</html>
