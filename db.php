<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
  // Remove the leading space before 'hospital_system_management'
  $conn = new PDO("mysql:host=$servername;dbname=hotel_system_management", $username, $password);
  
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
