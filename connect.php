<?php
// paymnet

                 $cardname = $_POST['cardname'];
                 $cardnumber = $_POST['cardnumber'];
                 $expmonth = $_POST['expmonth'];
                 $expyear = $_POST['expyear'];
                 $cvv = $_POST['cvv'];
                 $amount =$_POST['amount'];
                
                 //database connection
                 $conn = new mysqli('localhost','root','','payment');
                 if($conn->connect_error){
                     die('connection failed : '.$conn->connection_error);
                 }
                 else{
                     $stmt = $conn->prepare("insert into pay(cardname, cardnumber, expmonth, expyear, cvv,amount) values(?, ?, ?, ?, ?, ?)");
                     $stmt->bind_param("siiiii",$cardname, $cardnumber, $expmonth, $expyear, $cvv, $amount);
                     $stmt->execute();
                     echo "<script> alert('payment is successful..!')</script>";
                     include 'C:\xampp\htdocs\project\button.html';
                     $stmt->close();
                     $conn->close();
                 }

?>