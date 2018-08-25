
<!DOCTYPE HTML>
<HEAD>
	<TITLE>REGISTER HERE</TITLE>
	<link rel="stylesheet" type="text/css" href="signup.css">
</HEAD>
<BODY>
	<div class="container">
<img class="full-img" src="college.jpg" >
<div id="reg-centre" >
	<img src="fr1.JPG" class="fr-avatar">
	<FORM method="post" action="insert.php" id="box">
		
			
				<p>Name:</p>
				<INPUT TYPE="TEXT" NAME="name" required>
			
			
				<p>Email:</p>
				<INPUT TYPE="Email" NAME="email"required>
			
			
				<div class="radio-box">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="user_type" value="s" checked>Student &nbsp; &nbsp;&nbsp;
  				<input type="radio" name="user_type" value="t">Teacher &nbsp; &nbsp;&nbsp;
  				<input type="radio" name="user_type" value="a">Alumni &nbsp; &nbsp;<br>
				
				<p>Password:</p>
				<INPUT TYPE="Password" NAME="passwd" required>

				<p>Phone No:</p>
				<INPUT TYPE="number" NAME="phone" required>

				<div class="radio-box">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="branch" value="i" checked>IT &nbsp; &nbsp;
  				<input type="radio" name="branch" value="c">COMPS &nbsp;&nbsp;
  				<input type="radio" name="branch" value="e">ELEX &nbsp;&nbsp;
  				<input type="radio" name="branch"value="p">PROD &nbsp;<br>
				
				</div>
				<div class="submit-btn"><input type="SUBMIT" value="REGISTER"></div>
	</FORM>
</div>
</div>
</BODY>
</HTML>