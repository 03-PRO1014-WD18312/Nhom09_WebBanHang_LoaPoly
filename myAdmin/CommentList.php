
<style>
    #comment input:focus{
        border:3px solid orange
    }
    #main-comment{
        width:90%;
        height:auto; 
        text-align:center;
        margin:0 auto;
        margin-top:30px
    }

    th,td{
        border:1px solid gray
    }
   
</style>

<?php


$sql = "SELECT * FROM comment"; 
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
            <th>Phone</th>
            <th>Comment</th>
            <th>Date</th>
            <th>Options</th>
        </tr>
        <?php
        // if( isset($_POST['submit'])){
            // $id = $_POST['ProductID']; 
            // $sql = "SELECT * FROM comment Where ProductID = '$id'"; 
            // $result = $conn->query($sql); 
        
    if ($result->num_rows > 0) 
            {
             while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row['Names'] ?></td>
                            <td><?php echo $row['Phone'] ?></td>
                            <td><?php echo $row['Comments'] ?></td>
                            <td><?php echo $row['Dates'] ?></td>
                            <td><a href ="/Nhom09_WebBanHang_LoaPoly/myAdmin/DeleteComment.php?id=<?php echo $row['ID'] ?>">[DELETE]</a></td>
                        </tr>
                        <?php
                }
            }
        
    ?>
        
    </table>
</div>