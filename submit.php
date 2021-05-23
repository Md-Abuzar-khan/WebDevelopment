<?php
include('connection.php');
error_reporting(0);
    
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['Email'];
$mobno = $_POST['mobile'];
$password = $_POST['password'];

$query = "INSERT INTO mydata VALUES ('$fname','$lname','$email','$mobno','$password')";
   $sql = mysqli_query($conn,$query);
    if ($sql){
        echo "";
?>
        
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registered</title>
        <link rel="stylesheet" href="sub.css">
    </head>

    <body>
        <div class="subm">
            <h1>Hello! <br> You Have Submitted <br> Form <br> Successfully <br> Thanks For Registration </h1>
        </div>
    </body>

    </html>
    <?php
    
    }
   else{
     echo "Data not Inserted";
   }


?>