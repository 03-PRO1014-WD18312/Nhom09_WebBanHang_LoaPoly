<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include '../Assets/ConnectDB.php';

if(isset($_POST['submit'])){
$CategoryName = $_POST['CategoryName']; 
// $CategoryStatus = $_POST['Status'];
if(isset($CategoryName) && isset($CategoryStatus)){
    $sql = "INSERT INTO category(CategoryName,CategoryStatus)
     VALUES('$CategoryName','$CategoryStatus')";
    if ($conn->query($sql) === TRUE) {
        ?>
            <script>
                alert("Tạo danh mục thành công !")
                window.location = "/Nhom09_WebBanHang_LoaPoly/myAdmin/_LayoutAdmin.php?myLayout=listCate"
            </script>
        <?php
      } 
      $conn->close();      
}
}
?>

<style>
    * {
        font-family: sans-serif;
    }

    body {
        text-align: left;
    }

    #form {
        display: flex;
        flex-direction: column;
        width: 70%;
        margin: 0 auto;
    }

    #form input {
        outline: none
    }

    h2 {
        color: dodgerblue;
        font-weight: bold;
        margin: 0 auto;
        position: relative;
        left: 750px;
    }

    input {
        margin-top: 20px;
    }
</style>

<html>
<head>
</head>

<form id="form" action="" method="POST" enctype="multipart/form-data">
     Name <input type="Text" name="CategoryName" require />
     <!-- Status<input type="Text" name="Status" require/> -->
    <input type="submit" name="submit" value="Create" />
</form>
</html>