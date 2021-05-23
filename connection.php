<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
	echo "";
}
else
{
	//die("Connection Failed because".mysqli_connect_error());
	echo "Connection Failed";
}
?>
