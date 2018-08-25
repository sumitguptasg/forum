<HTML>
<HEAD>
	<TITLE></TITLE>
</HEAD>
<BODY>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$passwd=$_POST['passwd'];
$user_type=$_POST['user_type'];
$branch=$_POST['branch'];
$phone=$_POST['phone'];
if(!empty($name) || !empty($email) || !empty($user_type) || !empty($passwd) || !empty($branch) || !empty($phone))
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
		$SELECT="SELECT email from user where email=? limit 1";
		$INSERT="INSERT into user (name,email,user_type,passwd,branch,phone) values (?,?,?,?,?,?)";
		
		//prepare statements
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum=$stmt->num_rows;

		if($rnum==0){
			$stmt->close();

			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("sssssi",$name,$email,$user_type,$passwd,$branch,$phone);
			$stmt->execute();
			if(!mysqli_connect_error()){
				echo("Your Account was Created Successfully");
				echo "<script type='text/javascript'>if (window.confirm('Account created Successfully! Head to the Login page.'))
				{
    				window.location = 'login.php';
				};</script>";
				
				
			}

		}
		else{
			echo("User is already registered with this Email-ID");
		}

	}
}
else
{
	echo "All inputs are required";
	die();
}
?>