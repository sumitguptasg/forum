<?php
include('connectlogin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<html>
<head>
	<title>LOGIN HERE</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="container">
<img class="full-img" src="college.jpg">
<div id="reg-centre" >
	<img src="fr1.JPG" class="fr-avatar">
	<FORM method="post" action="connectlogin.php" id="box">

				<p>Email Id</p>
				<INPUT TYPE="Email" NAME="email" required>
			
			
				<p>Password:</p>
				<INPUT TYPE="Password" NAME="passwd" required>
			
				<div class="submit-btn">
					<input type="submit" name="submit" value="LOGIN"><br><p></p><p></p>
					<a class="link" href="signup.php">New User? Sign Up!</a>
				</div>
	</FORM>

</div>
</body>
</html>