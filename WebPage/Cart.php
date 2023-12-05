<style>

    #Cart td{
        border-bottom:1px solid rgba(128, 128, 128, 0.478);;
    }
    #Cart{
        color:#333; 
        font-weight:bold;
        font-size:20px;
    }
</style>

<

<?php
include '../Assets/ConnectDB.php'; 
  //foreach ,while
 if(isset($_SESSION['Cart'])){
    if(isset($_POST['qt'])){
        foreach($_POST['qt'] as $IDProduct =>$qt){
            if($qt == 0){
                unset($_SESSION['Cart'][$IDProduct]); 
            }else if($qt > 0){
                $_SESSION['Cart'][$IDProduct] = $qt; 
            }
        }
    }
    $arrID = array(); 
    foreach($_SESSION['Cart'] as $IDProduct => $quantity){
        $arrID[] = $IDProduct; 
    }
    $strIDProduct = implode(',',$arrID); 
    if(!empty($strIDProduct)){
        $sql = "SELECT * FROM  product Where ProductID IN ($strIDProduct) ORDER BY ProductID DESC"; 
        $result = $conn->query($sql); 
    }
?>
    
        <div style="width:1200px;height:auto;margin:0 auto; position: relative;display:flex">
            <div style="width: 100%;text-align: center;margin-top:20px;height:auto">
                <h1 style="width:1200px;height:auto;margin:0 auto; background-color:gray;color:white">Your Cart</h1>
                    <form style="width:100%" id="Cart" action="" method="POST">
                        <table style="width:100%;text-align:center">
                            <?php
                            if(!empty($result)){

                                $totalPriceProduct = 0 ; 
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) {
                                       $totalPrice = $row['NewPrice'] * $_SESSION['Cart'][$row['ProductID']]; 
                                    ?>
                                   <tr>
                                       <td><img width="120" height="120" src="../Assets/Image/<?php echo $row['ProductImage'];?>" class="attachment-168x202 size-168x202 wp-post-image" alt="" loading="lazy">
                           </td>
                                       <td> <span class="cartItemName"><?php echo $row['ProductName']?></span></td>
                                       <td>$<?php echo $row['NewPrice']?>.00</td>
                                        <!-- hien thi so luong san pham -->
                                       <td> <input name = "qt[<?php echo $row['ProductID'];?>]" Type ="number" min= "1" value ="<?php echo $_SESSION['Cart'][$row['ProductID']]; ?>"></td>
                                       <!-- //update san pham -->
                                       <td>$<?php echo $totalPrice ?>.00</td>
                                       <td> <a onclick = "document.getElementById('Cart').submit()"  href="#" style="color:#333"?><i style="color:green" class="fa-solid fa-pen-to-square"></i></a>  
                                        <!-- //xoa san pham -->
                        <a style="color:#333" href ="/Nhom09_WebBanHang_LoaPoly/WebPage/DeleteCart.php?id=<?php echo $row['ProductID'] ?>"><i style="color:red" class="fa-solid fa-trash"></i></a></td>
                                   </tr>
                               <?php
                               $totalPriceProduct += $totalPrice;
                                    }
                            }
                            ?>
                        </table>
                    </form>
             </div>
             <div style="width: 1px;height:500px;background-color: white;"></div>
    </div>
            <h2 style="position:relative;left:1100px;margin-top:20px;margin-bottom:20px">Total: $<span><?php echo $totalPriceProduct ?></span>.00</h2>
          
 <?php
                                 }else {
                                    ?>
        <div style="width:1200px;height:500px;margin:0 auto;text-align:center;line-height:500px;color:gray">
            <h1>No thing here.</h1>
        </div>
      <?php
                                 }
        }
 else{
      ?>
        <div style="width:1200px;height:500px;margin:0 auto;text-align:center;line-height:500px;color:gray">
            <h1>No thing here.</h1>
        </div>
      <?php
 }
?>


<div style="width:1200px;height:auto;margin:0 auto;display:flex; align-items: center;
        justify-content: space-between">
    <div class="cartOptions">
        <i class="fas fa-angle-double-left"></i>
        <div class="gotoshop"><span><a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php">GO TO SHOP</a></span></div>
    </div>
    
    <div style="margin-left:700px" class="cartOptions">
        <div class="gotoshop"><span><a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Payment">CHECK OUT</a></span></div>
    </div>

</div>



