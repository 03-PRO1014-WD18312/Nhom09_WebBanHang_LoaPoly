
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
    include '../Assets/ConnectDB.php'; 
    $id = $_GET['id']; 

    $sql = "DELETE FROM product Where ProductID = '$id'"; 

    if ($conn->query($sql) === TRUE) {
        ?>      
        <script>
          window.location="/Nhom09_WebBanHang_LoaPoly/myAdmin/_LayoutAdmin.php?/myLayout=ProductList";
        </script>
        <?php

    } 
     
    $conn->close();
?>


