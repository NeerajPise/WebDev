<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	$name = $_POST['name'];
	$clg_name = $_POST['clg_name'];
	if (isset($_POST['mobile']))
	{		
		$mobile = $_POST['mobile'];
	}
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['confirmpassword'];
	
	if($password != $cpassword)
	{
         $msg = "passwords doesn't match";
	echo $msg;
    	}

	else
{
	
	$conn = new mysqli('127.0.0.1:3307', 'neeraj', 'somneeraj99', 'college');
	$sql = "INSERT INTO user_details(name, clg_name, mobile, email, password)
	values(?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
			
	$stmt->bind_param("ssiss", $name, $clg_name, $mobile, $email, $password);
	$stmt->execute();
	echo "registration   successful";
	$stmt->close();
	$conn->close();
}
	
?>