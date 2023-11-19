<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!isset($_SESSION['Email'])){
    ?>
        <script>
            window.location="/MyWeb/WebPage/_LayoutWebPage.php?_LayoutWeb=Login";
        </script>
    <?php   
}
include '../Assets/ConnectDB.php'; 
$id = $_GET['id']; 
$sql = "UPDATE orderdetail SET StatusOrderDetail = 1 WHERE OrderDetailID = '$id'";
$conn->query($sql); 
$conn->close(); 
header('location:/MyWeb/myAdmin/_LayoutAdmin.php?myLayout=Order');
?>