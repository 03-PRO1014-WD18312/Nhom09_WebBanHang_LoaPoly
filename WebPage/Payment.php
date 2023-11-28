

<?php
include '../Assets/ConnectDB.php';
if(isset($_SESSION['Email'])){
if(isset($_SESSION['Cart'])){
    $arrID = array(); 
    foreach($_SESSION['Cart'] as $IDProduct => $quantity){
        $arrID[] = $IDProduct; 
    }
    $strIDProduct = implode(',',$arrID); 
    $sql = "SELECT * FROM  product Where ProductID IN ($strIDProduct) ORDER BY ProductID DESC"; 
    $result = $conn->query($sql); 
}

$CusID; 
if(isset($_SESSION['ID'])){
    $CusID = $_SESSION['ID']; 
}
    if(isset($_POST['submit'])){
        $name = $_POST['Name'];
        $email = $_POST['Email']; 
        $phone = $_POST['Phone']; 
        $add = $_POST['Add']; 
        if(isset($name) && isset($email) && isset($phone) && isset($add)){
            if(isset($_SESSION['Cart'])){
                $sqlCustomerInfo  = "INSERT INTO customer(UserID,CustomerName,Phone,Email,CustomerAddress) VALUES('$CusID','$name','$phone','$email','$add')";
                $conn->query($sqlCustomerInfo); 
                $sqlCustomerID = "SELECT * From customer Where Email = '$email'"; 
                $rsCustomer = $conn->query($sqlCustomerID);
                $CId;  
                while($row = $rsCustomer->fetch_assoc()){
                     $CId = $row['UserID']; 
                }


                $datetime = new DateTime();
                $dateOrder =  $datetime->format('m/d/Y g:i A');
                $sqlOrder = "INSERT INTO orders (UserID,OrderDate,OrderStatus) VALUES('$CId','$dateOrder',0)"; 
                $conn->query($sqlOrder); 

                $sqlOrderID = "SELECT * From orders Where UserID = '$CId'"; 
                $rsOrderID = $conn->query($sqlOrderID);
                $OId ; 
                while($row = $rsOrderID->fetch_assoc()){
                    $OId = $row['OrderID']; 
                }

                $arrID = array(); 

                foreach($_SESSION['Cart'] as $IDProduct => $quantity){
                    $arrID[] = $IDProduct; 
                }
                $strIDProduct = implode(',',$arrID); 
                $sql = "SELECT * FROM  product Where ProductID IN ($strIDProduct) ORDER BY ProductID DESC"; 
                $result = $conn->query($sql);   
                
                while($row = $result->fetch_assoc()){
                   $totalPrice = $row['NewPrice']*$_SESSION['Cart'][$row['ProductID']];
                   $quantity = $_SESSION['Cart'][$row['ProductID']]; 
                   $productID = $row['ProductID']; 
                   $sqlOrderDetail = "INSERT INTO orderdetail (OrderID,ProductID,Quantity,OrderTotal,StatusOrderDetail)                  
                   VALUES('$OId','$productID','$quantity','$totalPrice',0)"; 
                   $conn->query($sqlOrderDetail);
                }
                
            }

   
    if(5 >10){
    
    }
    else{  
      ?>
        <script>
           window.location= "/Nhom09_WebBanHang_LoaPoly/WebPage/DeleteCartPayment.php?id=0";
        </script>
      <?php
    }
        }
    } 
?>

<style>
      #Payment{
        width: 1200px;
        height: 500px;
        margin: 0 auto;
        margin-top:50px;
    }
    #tableP{
        width: 100%;
        border-collapse: collapse;
        text-align:center;
    }
    th,td{
        padding: 20px;
        border:1px solid rgba(128, 128, 128, 0.553)
    }
    table,th,tr{
        border:1px solid rgba(128, 128, 128, 0.553)
    }
    #info-customer{
        width: 100%;
        height: auto;
        float: left;
        margin-top: 50px;
    }
    #info-customer div{
        width: 100%;
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }
    #info-customer div input{
        width: 1000px;
        height: 40px;
        outline: none;
        padding-left:20px;
        border:1px solid rgba(128, 128, 128, 0.553)
    }
    #info-customer div input:focus{
        border-color:orange;
    }
    #paymentBtn{
        margin-left: 200px; 
        width: 120px;
        height: 40px;
        margin-top: 20px;
    }
    h1{
        width: 1200px;
        height:auto,
        margin:0 auto;
        text-align:center 
    }
</style>

    <div id="Payment">
        <table id="tableP">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <?php
                       $totalPriceProduct = 0 ; 
                   if(isset($_SESSION['Cart'])){
                     if ($result->num_rows > 0) 
                     {
                         while($row = $result->fetch_assoc()) {
                            $totalPrice = $row['NewPrice'] * $_SESSION['Cart'][$row['ProductID']]; 
                         ?>
                <tr>
                    <td><?php echo $row['ProductName'] ?></td>
                    <td>$<?php echo $row['NewPrice'] ?>.00</td>
                    <td><?php echo $_SESSION['Cart'][$row['ProductID']] ?></td>
                    <td>$<?php echo $totalPrice ?>.00</td>
                </tr>
                <?php
                           $totalPriceProduct += $totalPrice;
                         }
                         
                     }
                   }else{
                       echo "<h1>Cart Empty</h1>";
                   }
                 ?>
        </table>
        <h3>Total Bill : $<?php echo $totalPriceProduct?>.00</h3>
        <form id="info-customer" method="POST">
            <div>
                <label for="">Name Customer</label>
                <input type="text" name="Name" placeholder="Your Name" required>
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="Email" placeholder="Your Email" required>
            </div>
            <div>
                <label for="">Phone</label>
                <input type="text" name="Phone" placeholder="Your Phone" required>
            </div>
            <div>
                <label for="">Adress</label>
                <input type="text" name="Add" placeholder="Your Address" required>
            </div>
            
                <input style="font-size:18px;font-weight:bold,border:1px solid rgba(128, 128, 128, 0.553);margin-bottom:5px " id="paymentBtn" type="submit" name="submit" value="Order Now">
         
        </form>
    </div>

<?php
 }else{
    ?>
        <script>
            window.location = "/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=lgPayment";
        </script>
    <?php
 }
?>           

   
