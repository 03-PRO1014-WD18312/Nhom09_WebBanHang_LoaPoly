
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
    $sql = "DELETE FROM category Where CategoryID = '$id'"; 
    $conn->query($sql);    
    $conn->close();
    ?>
      <script>
          window.location = "/MyWeb/myAdmin/_LayoutAdmin.php?myLayout=listCate"   
      </script>
    <?php
?>

