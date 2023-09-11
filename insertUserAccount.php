<? php 
$email=$_POST['email'];
$password=$_POST['password'];


if (!empty($email)) || (!empty($password))  {

	$dbhost = "localhost";
	$dbemail = "root";
    $dbpassword = ""
    $dbname = "user account"

    $con = new mysqli($host,$dbemail,$dbpassword)
    if (mysqli_connect_error()){
    	die('connect error('. mysqli_connect_error().')'.mysqli_connect());

    }else{
    	$SELECT ="SELECT email FROM register WHERE email = ? limit 1";
    	$INSERT="INSERT Intp register(email,password)values(? ?)";
    
     $stmt = $conn-> prepare($SELECT);
     $stmt ->bind_param("s", $email);
     $stmt->execute();
     $stmt ->bind_result("s", $email);
     $stmt ->store_result();
     $rnum = $stmt->num_rows;

     if ($rnum==0) {
         $stmt -> close();


         $stmt = $conn->prepare($INSERT);
         $stmt->blind_param("ss", $email,$password)
         $stmt->execute();
         echo "new record inserted sucessfully";


     }else{
        echo "someone already register using this email";
     }
     $stmt->close();
     $conn->close();


    }
} else{
	echo"all field are required";
	die();
}


?>


