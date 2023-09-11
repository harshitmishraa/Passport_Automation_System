<?php
  
         $servername ="localhost";
         $username = "root";
         $password = "";
         $databasename ="useraccount";
         $conn = mysqli_connect("localhost", "root", "", "useraccount");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 7 values from the form data(input)
        $first_name =  $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $passport_id = $_POST['passport_id'];
        $date_of_birth = $_POST['date_of_birth'];
        $email = $_POST['email'];
        $nationality = $_POST['nationality'];
        $gender =  $_POST['gender'];
       
          
        // Performing insert query execution
        // here our table name is renual
        $sql = "INSERT INTO renual(first_name,last_name,passport_id,date_of_birth,email,nationality,gender)  VALUES ('$first_name', 
            '$last_name','$passport_id','$date_of_birth','$email','$nationality','$gender')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$first_name\n $last_name\n "
                ."$passport_id\n $date_of_birth\n $email\n $nationality\n $gender");
                header('Location:document.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>