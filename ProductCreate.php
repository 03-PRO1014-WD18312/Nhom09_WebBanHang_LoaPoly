<?php
include 'ConnectDB.php';
if(!isset($_SESSION['Email'])){
    ?>
        <script>
            window.location="/MyWeb/WebPage/_LayoutWebPage.php?_LayoutWeb=Login";
        </script>
    <?php   
}
if(isset($_POST['submit'])){

$ProductName = $_POST['ProductName']; 
$Description = $_POST['Description'];
$OldPrice = $_POST['OldPrice']; 
$NewPrice = $_POST['NewPrice']; 
$Status = $_POST['Status']; 
$CategoryID = $_POST['CategoryID']; 
if($_FILES['Image']['name'] == ''){
    $error_Image = '<span style="color:red">(*)</span>';
}else{
    $Image = $_FILES['Image']['name']; 
    $tmp_name = $_FILES['Image']['tmp_name']; 
}

if(isset($ProductName) && isset($Description) && isset($OldPrice) && isset($NewPrice) && isset($Status)&&isset($CategoryID)
&& isset($Image)){
    move_uploaded_file($tmp_name,'../Assets/Image/'.$Image);
    $sql = "INSERT INTO product(ProductName,ProductDescription,OldPrice,NewPrice,ProductStatus,CategoryID,ProductImage)
     VALUES('$ProductName','$Description','$OldPrice','$NewPrice','$Status','$CategoryID','$Image')";
    if ($conn->query($sql) === TRUE) {
    ?>
        <script>
            window.location ="/MyWeb/myAdmin/_LayoutAdmin.php";
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
    <title>Add Product</title>
</head>

<form id="form" action="" method="POST" enctype="multipart/form-data">
     Name <input placeholder="Tên sản phẩm" type="Text" name="ProductName" require />
     Description <input placeholder="Mô tả sản phẩm" type="Text" name="Description" require/>
     Old Price <input placeholder="Giá cũ sản phẩm" type="number" name="OldPrice"  require/>
     New Price <input placeholder="Giá mới sản phẩm" type="number" name="NewPrice" require/>     
     Product Status <input placeholder="Trạng thái sản phẩm" type="Text" name="Status" require />
     Category ID <input placeholder="Danh mục sản phẩm (1->4)" type="number" name="CategoryID" require />
     Image <input type="file" name="Image" require /> 
    <input type="submit" name="submit" value="Create" />
</form>
</html>