

<style>
   
    #OrderItem{
        width: 100%;
        display:flex; 
        align-items:center; 
    }

    #OrderItem li{
        
        list-style: none;
        font-size:20px;
        font-weight:bold; 
        margin-left: 150px;
    }
  .info{
      font-size:20px;
      font-weight:bold;
      color:gray
  }

  .ProductCartItem{

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
                    <div class="ProductCartItem">
                        <ul id="OrderItem">
                            <li><img width="100" height="100" src="../Assets/Image/<?php echo $rowProduct['ProductImage'] ?>"/></li>
                            <li><?php echo $rowProduct['ProductName'] ?></li>
                            <li>Qty: <?php echo $rowOrder['Quantity'] ?></li>
                            <li>$<?php echo $rowOrder['OrderTotal'] ?>.00</li>
                        </ul>
                        <div style="margin-left: 205px;display:flex">
                             <ul style="width:200px">
                                 <li class="info">Name: <?php echo $rowCustomer['CustomerName'] ?></li>
                                 <li class="info">Tel: <?php echo $rowCustomer['Phone'] ?></li>
                                 <li class="info">Address: <?php echo $rowCustomer['CustomerAddress'] ?></li>
                             </ul>
                             <a id="confirm-btn" href="/Nhom09_WebBanHang_LoaPoly/MyAdmin/ProcessConfirmOrder.php?id=<?php echo $rowOrder['OrderDetailID'] ?>" style="font-size:18px;font-weight:bold;width:120px;height:40px;background-color:#A9A9A9;text-align:center;line-height:40px;color:white;border-radius:5px;margin-top:60px;text-decoration:none;margin-left:450px; position:relative">CONFIRM</a>
                             <a id="confirm-btn" href="/Nhom09_WebBanHang_LoaPoly/MyAdmin/DeleteOrder.php?id=<?php echo $rowOrder['OrderDetailID'] ?>" style="font-size:18px;font-weight:bold;width:120px;height:40px;background-color:#A9A9A9;text-align:center;line-height:40px;color:white;border-radius:5px;margin-top:60px;text-decoration:none;margin-left:60px;position:relative">DELETE</a>
                            </div>
                    </div>
                    <hr>
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






