<?php 
$hostname="localhost";
$username="root";
$password="mysql";
$database_name="NIIT";
// @ is used with die keyword
$conn = new mysqli($hostname,$username,$password,$database_name);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



 ?>