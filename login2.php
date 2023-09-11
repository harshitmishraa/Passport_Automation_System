<?php
    $connect=mysqli_connect("localhost","root","","newaccount") or die("Connection Failed");
    if(!empty($_POST['submit']))
    {
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $query="SELECT * FROM accountreg WHERE Email='$Email' and password='$Password' ";
        $result=mysqli_query($connect,$query);
        $count=mysqli_num_rows($result);
        if($count>0){
            if(isset($_POST['submit'])){
            }
            include 'C:\xampp\htdocs\project\button.html';
                echo '<script>alert("!..welome user..!")</script>';
        }else{
            include 'C:\xampp\htdocs\project\miniproject.html';
            echo '<script>alert("please enter valid email or password")</script>';
            exit;
        }
    }

    
?>