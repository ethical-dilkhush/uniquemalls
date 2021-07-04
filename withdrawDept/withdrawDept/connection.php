<?php

$servername = "localhost";
$username = "uniquemall";
$password = "Cracker@22";
$dbname = "uniquemall";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn);

else
{
die("connection failed because".mysqli_connect_error());
}




?>
