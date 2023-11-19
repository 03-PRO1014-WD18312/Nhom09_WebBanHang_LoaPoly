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
$sql = "DELETE FROM comment WHERE ID = '$id'"; 
$conn->query($sql); 
?>
    <script>
        window.location ="/MyWeb/myAdmin/_LayoutAdmin.php?myLayout=Comment";
    </script>
<?php
$conn->close(); 
?>