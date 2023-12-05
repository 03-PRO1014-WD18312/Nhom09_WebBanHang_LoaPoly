
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
    $sql = "SELECT * FROM category Where CategoryID = $id"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc(); 
 if(isset($_POST['submit'])){
$CategoryName = $_POST['CategoryName']; 
// $CategoryStatus = $_POST['CategoryStatus'];

if(isset($CategoryName) ){

    $sql = "Update category set CategoryName = '$CategoryName' Where CategoryID = '$id'";
    if ($conn->query($sql) === TRUE) {
        ?>
            <script>
                alert("Cập nhật thành công !")
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
    }

    input {
        margin-top: 20px;
    }
</style>

<html>
<head>
    <title>Update Product</title>
</head>

    <form id="form" method="POST" enctype="multipart/form-data">
         Name <input type="Text" name="CategoryName" value="<?php echo $row['CategoryName']?>" require />
         <!-- Status <input type="Text" name="CategoryStatus" value="<?php echo $row['CategoryStatus']?>" require />      -->
        <input type="submit" name="submit" value="Update" />
    </form>
</html>