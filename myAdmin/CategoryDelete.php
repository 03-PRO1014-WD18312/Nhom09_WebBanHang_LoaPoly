
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

    include '../Assets/ConnectDB.php'; 
    $id = $_GET['id'];
    $sql = "DELETE FROM category Where CategoryID = '$id'"; 
    $conn->query($sql);    
    $conn->close();
    ?>
      <script>
          window.location = "/Nhom09_WebBanHang_LoaPoly/myAdmin/_LayoutAdmin.php?myLayout=listCate"   
      </script>
    <?php
?>

