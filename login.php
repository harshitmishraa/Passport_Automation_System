
        <?php
        $conn = mysqli_connect("localhost", "root", "slohit123", "newaccount");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }


          

        if (isset($_POST['submit'])) {
            $Email = $_POST['Email'];
            $Password = ($_POST['Password']);
        
            $sql = "SELECT * FROM accountreg WHERE Email='$Email' AND Password='$Password'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['Firstname'] = $row['Firstname'];
                header("Location: button.html");
            } else {
                echo "<script>alert('Oops! Email or Password is Wrong.')</script>";
            }
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
