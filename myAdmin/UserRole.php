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
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$role = $row['Role'];
$sql = "UPDATE `user` SET `Role` = 1 WHERE `UserID` = '$id'";
    $conn->query($sql); 
    $conn->close(); 
?>
<script>
        alert("Cập nhật thành công !")
            window.location = "/Nhom09_WebBanHang_LoaPoly/myAdmin/_LayoutAdmin.php?myLayout=User"
</script>
        