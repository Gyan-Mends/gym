<?php
// database details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ttu_fitness_app";
$con = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to the database: " . mysqli_connect_error();
}
?>