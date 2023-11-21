
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!isset($_SESSION['Email'])){
    ?>
        <script>
            window.location="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Login";
        </script>
    <?php   
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


