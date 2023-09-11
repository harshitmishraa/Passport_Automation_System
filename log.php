<?php
session_start();
$name=$_POST['Email'];
$password=$_POST['Password'];
$con=new mysqli("localhost","root"," ","newaccount");
if($con->connect_error){
	die("Failed to connect:".$con->connect_error);
	
}else{
	$stmt=$con->prepare("select * from accountreg where Email=?");
	$stmt->bind_param("s",$Email);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();
		if($data['Password']===$Password){
			
	        header("Location:button.html");
		}else{
			$_SESSION['message']="Invalid Password";
            header("location:miniproject.html");
            
		}
		}else{
			
		$_SESSION['message']="Invalid Email or Password";
        header("location: miniproject.php");
            
		}
	}
	