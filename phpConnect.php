<?php
$servername = "localhost";
$username = "root";
$password = "";
$name='product_list';

// Create connection
$conn = new mysqli($servername, $username, $password,$name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}