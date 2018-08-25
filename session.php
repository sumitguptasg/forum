<?php

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
session_start();
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$SELECT="SELECT * from user where email=? limit 1";
		
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$user_check);
		$stmt->execute();
		$stmt->bind_result($username,$email,$user_type,$passwd,$phone,$branch);
		$stmt->store_result();
		$rnum=$stmt->num_rows;
		$stmt->fetch();
?>