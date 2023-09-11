<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
         <link rel="stylesheet" href="d.css">
    </head>
    <body>
         <form method="post" enctype="multipart/form-data">
        <div class="container">
        <div class="input-group">
            <label>Title</label>
            <input type="text" name="title" required><br><br>
            </div>
            <div class="input-group">
            <label>File Upload</label>
            <input type="File" name="file" required><br><br>
            <input type="submit" name="submit" required><br><br>
            </div>
        
            
            
        </form>
        
        </div>
    </body>
</html>

<?php
  
         $servername ="localhost";
         $username = "root";
         $password = "";
         $databasename ="file";
         $conn = mysqli_connect($servername,$username,$password,$databasename);
          

         if (isset($_POST['submit']))
         {
             $title=$_POST["title"];
             

             $pname=rand(1000,1000)."-".$_FILES["file"]["name"];

             $tname=$_FILES["file"]["tmp_name"];
        

             move_uploaded_file($_FILES["file"]["tmp_name"],"upload/$pname");

             $sql="INSERT into fileup(file,image)VALUES('$title','$pname')";

             if(mysqli_query($conn,$sql))
             {

                echo '<script>alert("File Successfully uploaded go for payment page...")</script>';
                header('Location:payment1.html');

              }
             else
             {
                 echo "Error";
                }
             
         }
?>

