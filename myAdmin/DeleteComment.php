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
$sql = "DELETE FROM comments WHERE CommentId = '$id'"; 
$conn->query($sql); 
?>
    <script>
        window.location ="/Nhom09_WebBanHang_LoaPoly/myAdmin/_LayoutAdmin.php?myLayout=myComment";
    </script>
<?php
$conn->close(); 
?>