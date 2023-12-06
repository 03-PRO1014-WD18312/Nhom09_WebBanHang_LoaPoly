
<style>
    #comment input:focus{
        border:3px solid orange
    }
    #main-comment{
        width:100%;
        height:100%; 
        text-align:center;
        margin:0 auto;
    }

    th,td{
        border:1px solid gray
    }
    th{
        background-color: rgb(218, 206, 206);
    }
   
</style>

<?php


$sql = "SELECT * FROM comments"; 
$result = $conn->query($sql); 

if(!isset($_SESSION['Email'])){
    ?>
        <script>
            window.location="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Login";
        </script>
    <?php   
}
include '../Assets/ConnectDB.php';
 

?>
<div>
    <!-- <form id="comment" style="width:90%;height:100px;margin:0 auto;margin-top:20px" action="" method="POST">
        <input style="width:100%;height:40px;outline:none; padding-left:20px" name = "ProductID" type = "number" placeholder="Product ID" required/>
        <input style="width:120px;height:40px;margin-top:20px;font-weight:bold" name="submit" type ="submit" value= "Find"/>
    </form> -->
    <table id="main-comment">
        <tr>
            <th>Name Customer</th>
            <th>Comment</th>
            <th>Date</th>
            <th>Options</th>
        </tr>
        <?php
        
        
    if ($result->num_rows > 0) 
            {
             while($row = $result->fetch_assoc()) {
                $userId = $row['UserId'];
                $sqlUser = "SELECT * FROM user inner join comments on user.UserID = '$userId'"; 
                $sqlResult = $conn->query($sqlUser); 
                $name = '';
                while($rowUser = $sqlResult->fetch_assoc()) {
                    $name = $rowUser['UserName'];
                    
                }
                        ?>
                        <tr>
                            <td><?php echo $name  ?></td>
                            <td><?php echo $row['Content'] ?></td>
                            <td><?php echo $row['Dates'] ?></td>
                            <td><a href ="/Nhom09_WebBanHang_LoaPoly/myAdmin/DeleteComment.php?id=<?php echo $row['CommentId'] ?>">[DELETE]</a></td>
                        </tr>
                        <?php
                }
            }
        
    ?>
        
    </table>
</div>