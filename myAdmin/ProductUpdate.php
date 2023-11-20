
<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 

    include '../Assets/ConnectDB.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM product Where ProductID = $id"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc(); 
if(isset($_POST['submit'])){ 
        $ProductName = $_POST['ProductName']; 
        $Description = $_POST['Description'];
        $OldPrice = $_POST['OldPrice']; 
        $NewPrice = $_POST['NewPrice']; 
        $Status = $_POST['Status']; 
        $CategoryID = $_POST['CategoryID']; 
        if($_FILES['Image']['name'] == ''){
            $Image = $_POST['Image']; 
        }else{
            $Image = $_FILES['Image']['name']; 
            $tmp_name = $_FILES['Image']['tmp_name']; 
    }

if(isset($ProductName) && isset($Description) && isset($OldPrice) && isset($NewPrice) && isset($Status)&&isset($CategoryID)){
    move_uploaded_file($tmp_name,'../Assets/Image/'.$Image);
    $sql = "Update product set ProductName = '$ProductName',ProductDescription='$Description',OldPrice='$OldPrice',NewPrice = '$NewPrice',ProductStatus='$Status',CategoryID = '$CategoryID',ProductImage = '$Image' Where ProductID = '$id'";
    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
              window.location="/Nhom09_WebBanHang_LoaPoly/myAdmin/_LayoutAdmin.php?/myLayout=ProductList";
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


    <form id="form"  method="POST" enctype="multipart/form-data">
         Name <input type="Text" name="ProductName" value="<?php echo $row['ProductName']?>" require />
         Description <input type="Text" name="Description" value="<?php echo $row['ProductDescription']?>" require />
         Old Price <input type="number" name="OldPrice" value="<?php echo $row['OldPrice']?>" require />
         New Price <input type="number" name="NewPrice" value="<?php echo $row['NewPrice']?>" require />
         Status <input type="Text" name="Status"  value="<?php echo $row['ProductStatus']?>" require/>
         Category <input type="Text" name="CategoryID" value="<?php echo $row['CategoryID']?>" require/>
         <input type="hidden" name="Image" value="<?php echo $row['ProductImage']?>" require />
         Image <input type="file" name="Image"  />
        <input type="submit" name='submit' value="Update" />
    </form>
</html>