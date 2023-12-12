<style>  
    *{
        font-family: sans-serif;
    }
    .myOrder{
        width: 1200px;
        height: auto;
        margin: 0 auto;
    }
    .myOrder a{
        text-decoration:none; 
    }

    .nav-myOrder{
        width: 100%;
        display: flex;
        justify-content: flex-start;
        height: auto;
    }
    .morder-item{
        margin-left: 30px;
    }
    .s-order-hr{
        width: 1px;
        height: 550px;
        background-color: white;
    }
    #activeOrder{
        background-color: orangered;
        color: white;
    }
    .main-order-cart{
        width: 1200px;
        height: auto;
        display: flex;
        margin-top: 30px;
    }
    #Cancel:hover{
        cursor: pointer;
    }
    #tb-order{
        width: 100%;
    
    }
    .nav-myOrder a{
        width: 120px;
        height: 40px;
        color: orangered;
        font-weight: bold;
        text-align: center;
        line-height: 40px;
        border: 1px solid red;
    }
    .myOrder-item{
        margin-left: 20px;
    }
</style>

<?php
include '../Assets/ConnectDB.php'; 
if(isset($_SESSION['ID'])){
    $UserID = $_SESSION['ID']; 
    $sqlListOrder = "SELECT * FROM orders Where UserID =  '$UserID'";
    $resultAllOrder = $conn->query($sqlListOrder); 
    $sqlListOrders = "SELECT * FROM orders Where UserID =  '$UserID'";
    $resultAllOrders = $conn->query($sqlListOrders); 
    ?>
<div class="myOrder">
            <ul class="nav-myOrder">
                <a id="pendingBtn" class=" myOrder-item " href="#">Pending</a>
                <a id="activeOrder" class=" myOrder-item " href="#">ALL</a>
            </ul>
             <!--Pending-->
             <div id="pending" class="main-order-cart">
            <ul style="width: 100%;height: auto;">
            <?php
                    while($rowOrder = $resultAllOrders->fetch_assoc()){
                        $OrderID = $rowOrder['OrderID'];
                        $sqlOrderDetails = "SELECT * FROM orderdetail Where OrderID = '$OrderID' AND StatusOrderDetail = 0"; 
                        $rsOrderDetail = $conn->query($sqlOrderDetails); 
                        while($rowOrderDetail = $rsOrderDetail->fetch_assoc()){
                            $ProductID = $rowOrderDetail['ProductID']; 
                            $sqlProductOrder = "SELECT * FROM product Where ProductID = '$ProductID'"; 
                            $rsProductOrder = $conn->query($sqlProductOrder); 
                            while($rowProductOrder = $rsProductOrder->fetch_assoc()){
                                $PriceAProduct = $rowOrderDetail['OrderTotal'] / $rowOrderDetail['Quantity']; 
                                ?>
                                 <li style="display: flex;justify-content: space-around;border-bottom: 1px solid rgba(128, 128, 128, 0.185);">
                        <div style="display: flex;">
                            <img width="120" height="120" src="../Assets/Image/<?php echo $rowProductOrder['ProductImage'] ?>" alt="">
                            <div style="margin-left: 20px;margin-top:20px">
                                <span style="font-size:20px;font-weight: bold;"><?php echo $rowProductOrder['ProductName'] ?></span><br>
                                <span style="font-size: 20px;font-weight: bold;position:relative;top:5px">x <?php echo $rowOrderDetail['Quantity'] ?></span>
                            </div>
                        </div>
                        <div style="display: flex; flex-direction: column;justify-content: space-around;">
                            <span style="font-size:20px;font-weight: bold;">$<?php echo $PriceAProduct ?>.00</span>
                            <span style="font-size:23px;font-weight: bold;color:red;">Total :$<?php echo $rowOrderDetail['OrderTotal'] ?>.00</span>
                            <span id="Cancel" style="width: 120px;height:40px;background-color:orange;text-align: center;line-height: 40px;" ><a style="font-size:20px;font-weight: bold;color: white" 
                            href="/Nhom09_WebBanHang_LoaPoly/WebPage/PendingDelete.php?id=<?php echo $rowOrderDetail['OrderDetailID'] ?>">Cancel</a></span>
                        </div>
                    </li>
                                <?php
                            }
                        } 
                    }            
                ?>
                <div class="s-order-hr">
                    
                    </div>
            </div>
            <!--ALL-->
            <div id="all" class="main-order-cart">
                <ul style="width: 100%;height:auto;">
                <?php
                    while($rowOrder = $resultAllOrder->fetch_assoc()){
                        $OrderID = $rowOrder['OrderID'];
                        $sqlOrderDetails = "SELECT * FROM orderdetail Where OrderID = '$OrderID' AND StatusOrderDetail = 1"; 
                        $rsOrderDetail = $conn->query($sqlOrderDetails); 
                        while($rowOrderDetail = $rsOrderDetail->fetch_assoc()){
                            $ProductID = $rowOrderDetail['ProductID']; 
                            $sqlProductOrder = "SELECT * FROM product Where ProductID = '$ProductID'"; 
                            $rsProductOrder = $conn->query($sqlProductOrder); 
                            while($rowProductOrder = $rsProductOrder->fetch_assoc()){
                                $PriceAProduct = $rowOrderDetail['OrderTotal'] / $rowOrderDetail['Quantity']; 
                                ?>
                                 <li style="display: flex;justify-content: space-around;border-bottom: 1px solid rgba(128, 128, 128, 0.185);">
                        <div style="display: flex;">
                            <img width="120" height="120" src="../Assets/Image/<?php echo $rowProductOrder['ProductImage'] ?>" alt="">
                            <div style="margin-left: 20px;margin-top:20px">
                                <span style="font-size:20px;font-weight: bold;"><?php echo $rowProductOrder['ProductName'] ?></span><br>
                                <span style="font-size: 20px;font-weight: bold;position:relative;top:5px">x <?php echo $rowOrderDetail['Quantity'] ?></span>
                            </div>
                        </div>
                        <div style="display: flex; flex-direction: column;justify-content: space-around;">
                            <span style="font-size:20px;font-weight: bold;">$<?php echo $PriceAProduct ?>.00</span>
                            <span style="font-size:20px;font-weight: bold;color:red;">Total :$<?php echo $rowOrderDetail['OrderTotal'] ?>.00</span>
                           
                        </div>
                    </li>
                                <?php
                            }
                        } 
                    }            
                ?>
                </ul>
                <div class="s-order-hr">

                </div>
            </div>
            
             <!--delivery-->
            <div id="delivery" class="main-order-cart">
                <ul style="width: 100%;height: auto;">
                <?php
                    while($rowOrder = $resultAllOrders->fetch_assoc()){
                        $OrderID = $rowOrder['OrderID'];
                        $sqlOrderDetails = "SELECT * FROM orderdetail Where OrderID = '$OrderID' AND StatusOrderDetail = 2"; 
                        $rsOrderDetail = $conn->query($sqlOrderDetails); 
                        while($rowOrderDetail = $rsOrderDetail->fetch_assoc()){
                            $ProductID = $rowOrderDetail['ProductID']; 
                            $sqlProductOrder = "SELECT * FROM product Where ProductID = '$ProductID'"; 
                            $rsProductOrder = $conn->query($sqlProductOrder); 
                            while($rowProductOrder = $rsProductOrder->fetch_assoc()){
                                $PriceAProduct = $rowOrderDetail['OrderTotal'] / $rowOrderDetail['Quantity']; 
                                ?>
                                 <li style="display: flex;justify-content: space-around;border-bottom: 1px solid rgba(128, 128, 128, 0.185);">
                        <div style="display: flex;">
                            <img width="120" height="120" src="../Assets/Image/<?php echo $rowProductOrder['ProductImage'] ?>" alt="">
                            <div style="margin-left: 20px;margin-top:20px">
                                <span style="font-size:20px;font-weight: bold;"><?php echo $rowProductOrder['ProductName'] ?></span><br>
                                <span style="font-size: 20px;font-weight: bold;position:relative;top:5px">x <?php echo $rowOrderDetail['Quantity'] ?></span>
                            </div>
                        </div>
                        <div style="display: flex; flex-direction: column;justify-content: space-around;">
                            <span style="font-size:20px;font-weight: bold;">$<?php echo $PriceAProduct ?>.00</span>
                            <span style="font-size:23px;font-weight: bold;color:red;">Total :$<?php echo $rowOrderDetail['OrderTotal'] ?>.00</span>
                            <span id="Cancel" style="width: 120px;height:40px;background-color:orange;text-align: center;line-height: 40px;" ><a style="font-size:20px;font-weight: bold;color: white" href="">Cancel</a></span>
                        </div>
                    </li>
                                <?php
                            }
                        } 
                    }            
                ?>
                </ul>
                <div class="s-order-hr">

                </div>
            </div>

        </div>

        <script>
            let x = document.getElementsByClassName('myOrder-item'); 
        let temp; 
        for(let i =0; i<x.length; i++){
        x[i].addEventListener('click',()=>{
            temp = i; 
            x[temp].style.backgroundColor= 'orangered'; 
            x[temp].style.color = 'white'; 
            for(let y =0 ; y< x.length; y++){
                if(y != temp){
                    x[y].style.backgroundColor = 'white'; 
                    x[y].style.color = 'red';
                    x[y].style.border = '1px solid red'; 
                }
            }
        })
    }

    let all = document.getElementById('all');
    let pending = document.getElementById('pending');
    let delivery = document.getElementById('delivery');
    
    let allBtn = document.getElementById('activeOrder'); 
    let pendingBtn = document.getElementById('pendingBtn'); 
    let deliveryBtn = document.getElementById('deliveryBtn'); 

    all.style.display='none';
    delivery.style.display='none';
    pendingBtn.addEventListener('click',function(){
        pending.style.display='block'; 
        all.style.display='none';
        delivery.style.display='none';
    })
    
    allBtn.addEventListener('click',function(){
        all.style.display='block'; 
        pending.style.display='none';
        delivery.style.display='none';
    })


    deliveryBtn.addEventListener('click',function(){
        delivery.style.display='block'; 
        pending.style.display='none';
        all.style.display='none';
    })



        </script>


    <?php
}else{
    ?>
       
            <h1 style="margin:0 auto;width:500px;height:500px;text-align:center; line-height:500px;color:gray">No thing here.</h1>
       
    <?php
}
?>



