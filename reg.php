<?php
        $conn = mysqli_connect("localhost", "root", "", "userapl");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        if(!empty($_POST['submit']))
        {
        $firstname = $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $dob = $_REQUEST['dob'];
        $add = $_REQUEST['address'];
        $ph = $_REQUEST['number'];
        $email = $_REQUEST['email'];
        $state = $_REQUEST['state'];
        $city = $_REQUEST['city'];
        $gender = $_REQUEST['m'];
        $gender = $_REQUEST['f'];
        $pincode = $_REQUEST['pc'];

          

        $sql = "INSERT INTO apl VALUES ('$firstname','$lastname', 
            'dob','address','number','$email','$state','$city',$'m',$'f',$'pc')";

//         if($Password!=$ConfirmPassword){
           
//             echo "<script>alert('Passwords do not match!')</script>";    
//                     }
//                 else{
        if(mysqli_query($conn, $sql)){
                        // include 'C:\xampp\htdocs\project\registeration.html';
			echo "<script>alert('MESSAGE: details updated sucessfuly...go for payment ')</script>";
	}
	else
	{
                include 'C:\xampp\htdocs\project\newaccount.html';
        echo "<script>alert('cant connect')</script>";
	}
}
// }
          
        // Close connection
        mysqli_close($conn);
        ?>
