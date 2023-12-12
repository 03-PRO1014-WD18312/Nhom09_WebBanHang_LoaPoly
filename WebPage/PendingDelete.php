
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
    $sql = "DELETE  FROM orderdetail Where OrderDetailID = '$id'"; 
    $conn->query($sql);    
    $conn->close();
    ?>
      <script>
          window.location = "http://localhost/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Order#"   
      </script>
    <?php
?>

