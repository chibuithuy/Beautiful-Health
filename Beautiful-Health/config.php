<?php
$servername="localhost";
$username="root";
$password="";
$dbname="beautiful-health";
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn, 'set names utf8');
if($conn-> connect_error) {
    die("connection failed: " . $conn->connect_error);
}
?>