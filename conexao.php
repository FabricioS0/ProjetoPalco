<?php
$servername = "db";  // Nome do serviço no docker-compose
$database = "bd_projpalco";
$username = "root";
$password = "root";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
//mysqli_close($conn);
?>