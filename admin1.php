<?php
    $email = $_POST["e"];
    $password=$_POST["p"];

    $con = new mysqli("localhost","root","","login");
    if($con-> connect_error){
        die("failed to connect : ".con-> connect_error);
    }
    else{
        $stmt= $con->prepare("SELECT * from adminlogin where Email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result =$stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] == $password){
                header('Location:test.php');
            }
            else{
                include 'C:\xampp\htdocs\project\admin.html';
                echo '<script>alert("Wrong Password")</script>';
            }
        }
        // else{
        //     include 'C:\xampp\htdocs\project\admin.html';
        //     echo '<script>alert("Wrong Password1111")</script>';
        // }
    }
?>