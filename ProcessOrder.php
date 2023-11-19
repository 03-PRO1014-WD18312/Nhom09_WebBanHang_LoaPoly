

<style>
    #OrderItem{
        display:flex; 
        align-items:center; 
        justify-content: space-around;
    }
    #OrderItem li{
        list-style: none;
        font-size:20px;
        font-weight:bold; 
    }
  .info{
      font-size:20px;
      font-weight:bold;
      color:gray
  }
  
</style>


<?php
include '../Assets/ConnectDB.php'; 
$sql = "SELECT * FROM orders where OrderStatus = 0";
$result = $conn->query($sql);
 
while($row = $result->fetch_assoc()) {
    $infoCustomer; 
    $infoProduct; 
    $infoOrderDetail;
    $UserID = $row['UserID']; 
    $sqlCustomer = "SELECT * FROM customer Where UserID = '$UserID'"; 
    $infoCustomer = $conn->query($sqlCustomer); 
    $OrderID = $row['OrderID']; 
    $sqlOrderDetail = "SELECT * FROM orderdetail Where OrderID = '$OrderID' AND StatusOrderDetail = 0"; 
    $infoOrderDetail = $conn->query($sqlOrderDetail);  
    
    while($rowCustomer = $infoCustomer->fetch_assoc()){
    while($rowOrder = $infoOrderDetail->fetch_assoc()) {
          $productID = $rowOrder['ProductID']; 
          $sqlProduct = "SELECT * FROM product Where ProductID = '$productID'"; 
          $infoProduct = $conn->query($sqlProduct); 
          while($rowProduct = $infoProduct->fetch_assoc()) {
                ?>
                    <div class="ProductCartItem" style="width:100%;height:auto;border-bottom:1px solid rgba(128, 128, 128, 0.26);">
                        <ul id="OrderItem">
                            <li><img width="180" height="180" src="../Assets/Image/<?php echo $rowProduct['ProductImage'] ?>"/></li>
                            <li><?php echo $rowProduct['ProductName'] ?></li>
                            <li>Qty: <?php echo $rowOrder['Quantity'] ?></li>
                            <li>$<?php echo $rowOrder['OrderTotal'] ?>.00</li>
                        </ul>
                        <div style="margin-left: 205px;display:flex">
                             <ul>
                                 <li class="info">Name: <?php echo $rowCustomer['CustomerName'] ?></li>
                                 <li class="info">Tel: <?php echo $rowCustomer['Phone'] ?></li>
                                 <li class="info">Address: <?php echo $rowCustomer['CustomerAddress'] ?></li>
                             </ul>
                             <a id="confirm-btn" href="/MyWeb/MyAdmin/ProcessConfirmOrder.php?id=<?php echo $rowOrder['OrderDetailID'] ?>" style="font-size:18px;font-weight:bold;width:120px;height:40px;background-color:blue;text-align:center;line-height:40px;color:white;border-radius:5px;margin-left:1000px;margin-top:60px;text-decoration:none;position:relative">Confirm</a>
                        </div>
                    </div>
                <?php
            }
        }
    }
}


$conn->close();
?>


<script>
    document.getElementById('confirm-btn').onlick = ()=>{
        alert('Confirm order success !');
    }
</script>






