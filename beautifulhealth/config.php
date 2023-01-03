<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_beautifulhealth";
//ket noi CSDL
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,'set names utf8');
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);}
?>
