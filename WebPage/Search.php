  
    <div class="container-prod-cate">
    <div class="prod-category-wrapperr">
           <?php
            include '../Assets/ConnectDB.php';            
            if(isset($_POST['submit_search'])){
                $search = $_POST['search'];
                $sql = "SELECT * FROM `product` WHERE `ProductName` LIKE '%$search%'";
                $result = mysqli_query($conn,$sql);              
                if($result){
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            ?>
                            <p class="pull"></p>
                            <div class="electro__main-item discount_@item.ProductID" >
                     <a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Details&id=<?php echo $row['ProductID'] ?>"> <img width="100%" height="239" src="../Assets/Image/<?php echo $row['ProductImage'] ?>" class="attachment-199x239 size-199x239 wp-post-image" alt="" loading="lazy"></a>
                        <div class="Product__discount-name fashion__Product-name">
                            <span class="discount_ProductName"><?php echo $row['ProductName']?></span>
                        </div>
                        <div class="Product__discount-star">
                            <ul>
                                <li><i class="far fa-star Star-one"></i></li>
                                <li><i class="far fa-star Star-two"></i></li>
                                <li><i class="far fa-star Star-three"></i></li>
                                <li><i class="far fa-star Star-four"></i></li>
                                <li><i class="far fa-star Start-five"></i></li>
                            </ul>
                        </div>
                        <div class="Product__discount-price">
                            <span class="Product__price-des">$<?php echo $row['NewPrice']?>.00</span>
                            <span class="Product__price-init">$<?php echo $row['OldPrice']?>.00</span>
                        </div>
                        <div>
                            <ul class="Product__discount-options">
                                <li><i class="far fa-heart"></i></li>
                                <li onclick="crawData(@item.ProductID)"><i class="fas fa-search-plus"></i></li>
                                <li><a href="/Nhom09_WebBanHang_LoaPoly/WebPage/ProcessCart.php?id=<?php echo $row['ProductID']?>"> <i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="dcDescription">
                            <span class="discountDescription"><?php echo $row['ProductDescription']?></span>
                        </div>
                    </div>
                            <?php
                        }
                    }else{echo"No Record Found";};
                    
                }
            }
            ?>
</div>
</div>
    <style>

        .container-prod-cate{
        width: 1300px;
        height:auto;
        min-height:max-content;
        display: flex;
        flex-direction:column; 
        justify-content: center;
        align-items: center;
        margin:0 auto !important;
    }
    .prod-category-wrapperr{
        width: 100%;
        height:100%;
        padding: 50px 0;

    }
    </style>        
            
            