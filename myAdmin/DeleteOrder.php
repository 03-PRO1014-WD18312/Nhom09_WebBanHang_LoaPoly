<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!isset($_SESSION['Email'])){
    ?>
        <script>
            window.location="/Nhom09_WebBanHang_LoaPoly/WebPage/WebPage/_LayoutWebPage.php?_LayoutWeb=Login";
        </script>
    <?php   
}
include '../Assets/ConnectDB.php'; 
$id = $_GET['id']; 
$sql = "DELETE FROM orderdetail WHERE OrderDetailID = '$id'";
$conn->query($sql); 
$conn->close(); 
header('location:/Nhom09_WebBanHang_LoaPoly/WebPage/myAdmin/_LayoutAdmin.php?myLayout=ProcessOrder');
?>