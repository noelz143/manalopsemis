<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
if (isset($_POST['submit'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	#$regex ="/^(?=.*[a-z])\S{6,20}$/";
if (!preg_match("/^[a-zA-Z\s]+$/", $firstname)) {
	echo '<script>alert("invalid firstname characters only")</script>';
	
}
elseif (!preg_match("/^[a-zA-Z\s]+$/", $lastname)) {
	echo '<script>alert("invalid lastname characters only")</script>';
	# code...
}
elseif (!preg_match("/^(?=^.{6,20}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$/",$password)) {
	echo ' Password complexity must contain 1 lowercase, 1 uppercase 1 digit number, a combination of special
characters, min=6 and max=20, must not contain spaces. or textfiled must only contain characters only';
		
}
else{
	echo "congratulations ";
}
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label>Firstname</label>
<input type="text" name="firstname" required>
<label>Lastname</label>
<input type="text" name="lastname" required>
<label>Email</label>
<input type="email" name="email" required>
<label>PASSWORD</label>
<input type="password" name="password">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>