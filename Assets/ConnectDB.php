<?php 
$conn = new mysqli('localhost', 'root','', 'my_shop');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
?>