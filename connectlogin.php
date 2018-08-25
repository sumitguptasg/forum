<?php
session_start();
if (isset($_POST['submit'])) {
$email=$_POST['email'];
$passwd=$_POST['passwd'];
if(!empty($email) || !empty($passwd))
{
	$host="localhost";
	$dbname="root";
	$dbpassword="";
	$dbname="test";

	$conn=new mysqli($host,$dbname,$dbpassword,$dbname);

	if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli.maxdb_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
		$SELECT="SELECT passwd from user where email=? limit 1";
		
		//prepare statements
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($passwdquery);
		$stmt->store_result();
		$rnum=$stmt->num_rows;
		$stmt->fetch();
		if($rnum>1){
			echo "**********Duplicate User Detected**********";
			}
		elseif ($rnum==0) {
			echo "***********No User Found with this Email**************";
		}
		else{
				if($passwd==$passwdquery)
				{
					echo "**********Login Successfull***********";
					$_SESSION['login_user']=$email;
					header("location: profile.php");
				}
				else{
					echo("***********Invalid Password and Email Combination************");		
				}
			}
	}
}
else
{
	echo "All inputs are required";
	die();
}
}
?>