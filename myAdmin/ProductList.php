<?php

if(!isset($_SESSION['Email'])){
    ?>
        <script>
            window.location="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Login";
        </script>
    <?php   
}

include '../Assets/ConnectDB.php'; 
$sql = "SELECT * FROM product inner join Category on Product.CategoryID = Category.CategoryID"; 
$result = $conn->query($sql);
$conn->close();
?>



<style>
    *{
        font-family:sans-serif; 
    }
    table{
        width:100%;
    }
    table,th,td{
        border:1px solid black; 
        text-align:center;
    }
    th{
        height:70px; 
        width: 10px;
        background-color: rgb(218, 206, 206);
    }
    #tr th{
        font-size:20px; 
        font-weight:bold;
    }
    h1{
        font-weight:bold; 
    }


</style>
<html>
    <head>
        <title>Product List</title>
    </head>
    <body>
      
        <Table>
            <tr id="tr">
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>DetailedDescription</th>
                <th>Price</th>
                <th>Category</th>
                <th>Options</th>
            </tr>
            <?php
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                    <td> <img width="140" height="140" src="../Assets/Image/<?php echo $row['ProductImage'] ?>"/></td>
                    <td><?php echo $row['ProductName'] ?></td>
                    <td><?php echo $row['ProductDescription'] ?></td>
                    <td><?php echo $row['DetailedDescription'] ?></td>
                    <td><?php echo $row['OldPrice'] ?></td>  
                    <td><?php echo $row['CategoryName'] ?></td>               
                    <td>[<a href="../myAdmin/_LayoutAdmin.php?myLayout=ProductCreate">Create</a>]
                    [<a href="../myAdmin/_LayoutAdmin.php?myLayout=ProductUpdate&id=<?php echo $row['ProductID'] ?>">Update</a>]
                    [<a href="../myAdmin/_LayoutAdmin.php?myLayout=ProductDelete&id=<?php echo $row['ProductID'] ?>">Delete</a>]</td>
                </tr>
                <?php
                }  
            } 
            ?>
            
        </Table>
    </body>
    
</html>

 