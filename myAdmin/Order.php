<?php
if(!isset($_SESSION['Email'])){
    ?>
        <script>
            window.location="/Nhom09_WebBanHang_LoaPoly/WebPage/WebPage/_LayoutWebPage.php?_LayoutWeb=Login";
        </script>
    <?php   
}
include '../Assets/ConnectDB.php'; 

$sql = "SELECT * FROM orders inner join OrderDetail on Orders.OrderID = OrderDetail.OrderID where StatusOrderDetail = 1  "; 
$result = $conn->query($sql);
$conn->close();
?>




<style>
    #main-order{
        width: 90%;
        height:auto; 
        margin:0 auto; 
     
    }
    th,td{
        border:1px solid gray; 
        text-align:center;
        padding:10px;
    }
</style>
<table #id="main-order">
    <tr>
        <th>User ID</th>
        <th>Product ID</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Date</th>
        <th>Status<th>
    </tr>
    <?php 
     if ($result->num_rows > 0) 
     {
      while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $row['UserID'] ?></td>
            <td><?php echo $row['ProductID'] ?></td>
            <td><?php echo $row['Quantity'] ?></td>
            <td>$<?php echo $row['OrderTotal'] ?></td>
            <td><?php echo $row['OrderDate'] ?></td>
            <td><?php if($row['StatusOrderDetail'] == 1){
                echo "Paid";
            }else{
                echo "Unpaid";
            } ?></td>
        </tr>
    <?php
      }
    }
    ?>
</table>