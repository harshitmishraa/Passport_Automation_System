       <?php
        $conn = mysqli_connect("localhost", "root", "", "newaccount");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        $Firstname = $_REQUEST['Firstname'];
        $Lastname = $_REQUEST['Lastname'];
        $Email = $_REQUEST['Email'];
        $Password = $_REQUEST['Password'];
        $ConfirmPassword = $_REQUEST['ConfirmPassword'];


          

        $sql = "INSERT INTO accountreg VALUES ('$Firstname','$Lastname', 
            '$Email','$Password','$ConfirmPassword')";

        if($Password!=$ConfirmPassword){
           
            echo "<script>alert('Passwords do not match!')</script>";    
                    }
                else{
        if(mysqli_query($conn, $sql)){
                        include 'C:\xampp\htdocs\project\miniproject.html';
			echo "<script>alert('Registration Successful!')</script>";
	}
	else
	{
                include 'C:\xampp\htdocs\project\newaccount.html';
        echo "<script>alert('Sorry! Email Already Exists.')</script>";
	}
}
          
        // Close connection
        mysqli_close($conn);
        ?>
