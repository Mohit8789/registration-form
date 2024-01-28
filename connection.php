<?php  
$servername= "localhost";
$username = "root";
$password = "";
$database = "user";


$conn = new mysqli($servername, $username, $password, $database); 

if ($conn->connect_error) { 
    die("Connection failure: " 
    . $conn->connect_error); 
}  
?>