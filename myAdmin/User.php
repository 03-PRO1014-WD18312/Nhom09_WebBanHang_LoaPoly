<?php
if(!isset($_SESSION['Email'])){
    ?>
        <script>
            window.location="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Login";
        </script>
    <?php   
}
include '../Assets/ConnectDB.php'; 
$sql = "SELECT * FROM `user` "; 
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
        <title>User list</title>
    </head>
    <body>
     
        <Table>
            <tr id="tr">
                <th>User ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Pass Word</th>
                <th>Role</th>
                <th>Change Role</th>
            </tr>
            <?php
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                    <td><?php echo $row['UserID'] ?></td>
                    <td><?php echo $row['UserName'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td><?php echo $row['PassW'] ?></td> 
                    <td><?php if($row['Role']==0){$row['Role'] = "Admin";}else{$row['Role']  = "User";};echo $row['Role']; ?></td> 
                    <td>[<a href="?myLayout=AdminRole&id=<?php echo $row['UserID'] ?>">Admin</a>]
                    [<a href="?myLayout=UserRole&id=<?php echo $row['UserID'] ?>">User</a>]</td>
                </tr>
                <?php
                }  
            } 
            ?>
            
        </Table>
    </body>
    
</html>