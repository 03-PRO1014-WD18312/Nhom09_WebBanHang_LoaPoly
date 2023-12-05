<?php
if(!isset($_SESSION['Email'])){
    ?>
        <script>
            window.location="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Login";
        </script>
    <?php   
}
include '../Assets/ConnectDB.php'; 
$sql = "SELECT * FROM category"; 
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
        <title>Category List</title>
    </head>
    <body>
     
        <Table>
            <tr id="tr">
                <th>Category ID</th>
                <th>Name</th>
                <!-- <th>Status</th> -->
                <th>Options</th>
            </tr>
            <?php
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                   
                    <td><?php echo $row['CategoryID'] ?></td>
                    <td><?php echo $row['CategoryName'] ?></td>
                    <!-- <td><?php echo $row['CategoryStatus'] ?></td>   -->
            
                    <td>[<a href="?myLayout=CategoryCreate">Create</a>]
                    [<a href="?myLayout=CategoryUpdate&id=<?php echo $row['CategoryID'] ?>">Update</a>]
                    [<a href="?myLayout=CategoryDelete&id=<?php echo $row['CategoryID'] ?>">Delete</a>]</td>
                </tr>
                <?php
                }  
            } 
            ?>
            
        </Table>
    </body>
    
</html>