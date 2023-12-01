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
<<<<<<< HEAD
$sql = "DELETE FROM comment WHERE ID = '$id'"; 
=======
$sql = "DELETE FROM comments WHERE CommentId = '$id'"; 
>>>>>>> Thietnvph38815
$conn->query($sql); 
?>
    <script>
        window.location ="/Nhom09_WebBanHang_LoaPoly/myAdmin/_LayoutAdmin.php?myLayout=myComment";
    </script>
<?php
$conn->close(); 
?>