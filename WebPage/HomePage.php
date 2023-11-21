
<?php
// goi file ket noi db
include '../Assets/ConnectDB.php'; 



$sqlDiscount = "SELECT * FROM product Where CategoryID = 1"; 
$sqlFashion = "SELECT * FROM product Where CategoryID = 2"; 
$sqlSport = "SELECT * FROM product Where CategoryID = 3"; 
$sqlElectric = "SELECT * FROM product Where CategoryID = 4"; 

// thuc hien truy van

$resultDiscount = $conn->query($sqlDiscount); 
$resultFashion = $conn->query($sqlFashion);
$resultElectric = $conn->query($sqlElectric);
$resultSport = $conn->query($sqlSport);
$conn->close();

?>


<div class="body">
    <div class="overlay">

        <div class="quickView__Product">
            <div class="quickView__item">

                <div class="quickImage ">
                    <img id="Main__quickImage" width="250px" height="300px" src="" class="attachment-168x202 size-168x202 wp-post-image" alt="" loading="lazy">
                </div>
                <div class="quickInfo">
                    <div class="quickName itemQuick">
                        <span id="Main__quickName"></span>
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="quickRateStar">
                        <ul>
                            <li><i class="far fa-star Star-one"></i></li>
                            <li><i class="far fa-star Star-two"></i></li>
                            <li><i class="far fa-star Star-three"></i></li>
                            <li><i class="far fa-star Star-four"></i></li>
                            <li><i class="far fa-star Start-five"></i></li>
                        </ul>
                    </div>
                    <div class="quickPrice ">
                        <span id="Main__quickPrice"></span>
                    </div>
                    <div class="quickHr"></div>
                    <div class="quickDescription itemQuick">
                        <span class="Main__quickDescription">With over 4 million digital pixels, the display is uniquely suited for scientific and technical applications such as visual7al data.</span>
                    </div>
                    <div class="quickHr"></div>
                    <div class="quickOption itemQuick">
                        <span>Tình Trạng  : <span class="quickStock">Còn Hàng </span></span>
                        <div class="quickAddCart">
                            <div>
                            <span class="quickDec"><i class="fas fa-minus"></i></span>
                            <span class="quickValue"><p id="quantityQuickCurrent">1</p></span>
                            <span class="quickInc"><i class="fas fa-plus"></i></span>
                            </div>

                            <div class="addK">
                                <span>Thêm vào giỏ hàng </span>
                            </div>
                            <!-- <div class="addK">
                                <span>Mua Ngay  </span>
                            </div> -->
                        </div>
           
                    </div>
                  
                    <div class="quickHr"></div>
                    <div class="quickCategory itemQuick">
                        <span>Categories: <span class="qcy">Sport, Sport Shoes</span></span><br>
                        <span>Tag: <span class="qcy">Sport</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="body__cateAndslice">
        <div class="body__category">
            <ul>
                <li class="body__category-title">
                    <div><i class="fas fa-bars"></i></div>
                    <div><h3>CATEGORIES</h3></div>
                </li>
                <li class="body__category-link">
                    <div><img width="23" height="26" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/02-menu-11.png" class="icon-image wp-post-image" alt="" loading="lazy"></div>
                    <div><span><a href="">LOA BLUETOOH</a></span></div>
                </li>
                <li class="body__category-link">
                    <div><img width="23" height="26" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/02-menu-1.png" class="icon-image wp-post-image" alt="" loading="lazy"></div>
                    <div><span><a href="">LOA Vi Tính </a></span></div>
                </li>
                <li class="body__category-link">
                    <div><a href="https://kuteshop.kutethemes.net/product-category/market/digital/smartphone-tablets/?demo=955" data-megamenu="463"><span class="icon icon-img"><img width="23" height="26" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/02-menu-2.png" class="icon-image wp-post-image" alt="" loading="lazy"></div>
                    <div><a href="">LOA KARAOKE</a></div>
                </li>
              
             
                <li class="body__category-link">
                    <div><a href="https://kuteshop.kutethemes.net/product-category/market/electronic/headphone-headset/?demo=955" data-megamenu="463"><span class="icon icon-img"><img width="23" height="26" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/02-menu-7.png" class="icon-image wp-post-image" alt="" loading="lazy"></div>
                    <div><a href="">TAI NGHE </a></div>
                </li>
                <li class="body__category-link">
                    <div><a href="https://kuteshop.kutethemes.net/product-category/market/digital/laptops-plus/?demo=955" data-megamenu="463"><span class="icon icon-img"><img width="23" height="26" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/02-menu-6.png" class="icon-image wp-post-image" alt="" loading="lazy"></div>
                    <div><a href="">HÀNG CŨ</a></div>
                </li>
                <!-- <li class="body__category-link">
                    <div><a href="https://kuteshop.kutethemes.net/product-category/market/jewelry/?demo=955" data-megamenu="463"><span class="icon icon-img"><img width="23" height="26" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/02-menu-8.png" class="icon-image wp-post-image" alt="" loading="lazy"></div>
                    <div><a href="">Jewelry & Watches</a></div>
                </li>
                <li class="body__category-link">
                    <div><a href="https://kuteshop.kutethemes.net/product-category/market/electronic/lights-lamps/?demo=955" data-megamenu="463"><span class="icon icon-img"><img width="23" height="26" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/02-menu-9.png" class="icon-image wp-post-image" alt="" loading="lazy"></div>
                    <div><a href="">Lights & Lamps</a></div>
                </li>
                <li class="body__category-link near_end">
                    <div><a href="https://kuteshop.kutethemes.net/product-category/market/digital/cameras-photo/?demo=955" data-megamenu="463"><span class="icon icon-img"><img width="23" height="26" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/02-menu-10.png" class="icon-image wp-post-image" alt="" loading="lazy"></span></a></div>
                    <div><a href="">Cameras & Photo</a></div>
                </li> -->
                <li class="body__category-link ">
                    <div><a href="">+ All categories</a></div>
                </li>
            </ul>
        </div>
        <div class="body__slice-wrap">
            <div class="body__slice">
                <div style="width:100%" class="body__slice-search">
                    <input type="text" placeholder="Type search here...">
                    <div class="Slice__search"><i class="fas fa-search"></i></div>
                </div>
            </div>
            <div class="body__slice-main">
                <div class="slice__wrap">
                    <img class="body__slice-item" width="924" height="450" src='../Assets/WebPage/imagefrontend/banner-amthanhdaily.jpg' alt="">
                    <img class="body__slice-item" width="924" height="450" src="../Assets/WebPage/imagefrontend/banner-giai-phap-am-thanh-dong-bo-chuyen-nghiep.jpg" alt="">
                    <img class="body__slice-item" width="924" height="450" src="../Assets/WebPage/imagefrontend/sam-loa-bluetooth-mung-dai-le-800x600.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="Body__Advertisement">
    <div class="Advertisement__item">
    <img width="100%" height="120" src="../Assets/WebPage/imagefrontend/banner-loa-bluetooth.jpg" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="../Assets/WebPage/imagefrontend/banner-loa-bluetooth.jpg 585w, ../Assets/WebPage/imagefrontend/banner-loa-bluetooth.jpg 84w, ../Assets/WebPage/imagefrontend/banner-loa-bluetooth.jpg 64w, ../Assets/WebPage/imagefrontend/banner-loa-bluetooth.jpg 300w, ../Assets/WebPage/imagefrontend/banner-loa-bluetooth.jpg220w" sizes="(max-width: 585px) 100vw, 585px">
    </div>
    <div class="Advertisement__item">
        <img width="100%" height="120" src="../Assets/WebPage/imagefrontend/phu-kien-am-thanh-giam-soc-den-50-sam-loa-va-tai(2)-800x200.jpg" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="../Assets/WebPage/imagefrontend/phu-kien-am-thanh-giam-soc-den-50-sam-loa-va-tai(2)-800x200.jpg 585w, ../Assets/WebPage/imagefrontend/phu-kien-am-thanh-giam-soc-den-50-sam-loa-va-tai(2)-800x200.jpg 84w, ../Assets/WebPage/imagefrontend/phu-kien-am-thanh-giam-soc-den-50-sam-loa-va-tai(2)-800x200.jpg 64w, ../Assets/WebPage/imagefrontend/phu-kien-am-thanh-giam-soc-den-50-sam-loa-va-tai(2)-800x200.jpg 300w, ../Assets/WebPage/imagefrontend/phu-kien-am-thanh-giam-soc-den-50-sam-loa-va-tai(2)-800x200.jpg220w" sizes="(max-width: 585px) 100vw, 585px">
    </div>
</div>
<div class="Body__Porduct-discount">
    <div class="Product__countdown">
        <div class="Product__countdown-info">
            <ul>
                <li>H</li>
                <li>O</li>
                <li>T</li>
                <li>D</li>
                <li>E</li>
                <li>A</li>
                <li>L</li>
            </ul>
        </div>
        <div class="Product__countdown-time">
            <ul>
                <li>
                    <div class="time_info">
                        <span id="Day">01</span><br>
                        <div class="horizontal"></div>
                        <span>Days</span>
                    </div>
                </li>
                <li>
                    <div class="time_info">
                        <span id="Hour">14</span><br>
                        <div class="horizontal"></div>
                        <span>Hours</span>
                    </div>
                </li>
                <li>
                    <div class="time_info">
                        <span id="Min">22</span><br>
                        <div class="horizontal"></div>
                        <span>Mins</span>
                    </div>
                </li>
                <li>
                    <div class="time_info">
                        <span id="Second">0</span><br>
                        <div class="horizontal"></div>
                        <span>Secs</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="Exchange__Product">
            <ul>
                <li><i class="fas fa-chevron-right"></i></li>

                <li><i class="fas fa-chevron-left"></i></li>
            </ul>
        </div>
    </div>
    <div class="Product__discount">
        <div class="Product__discount-wrap">
        <?php
            if ($resultDiscount->num_rows > 0) 
            {
                while($row = $resultDiscount->fetch_assoc()) {
                ?>
                    <div  id="myProduct__Discount" class="Product__discount-item discount_@item.ProductID ">
                   <a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Details&id=<?php echo $row['ProductID'] ?>"><img width="100%" height="202" src="../Assets/Image/<?php echo $row['ProductImage'] ?>" class="attachment-168x202 size-168x202 wp-post-image" alt="" loading="lazy"></a>
                    <div class="Product__discount-name">
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
                            <li onclick="crawData(<?php echo $row['ProductID']?>)" ><i class="fas fa-search-plus"></i></li>
                            <li><a href="/Nhom09_WebBanHang_LoaPoly/WebPage/ProcessCart.php?id=<?php echo $row['ProductID']?>"> <i class="fas fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="dcDescription">
                        <span class="discountDescription"><?php echo $row['ProductDescription']?></span>
                    </div>
                </div>
                <?php
                }  
            } 
            ?>
           

        </div>
    </div>
</div>
<div class="main__wrap-product">
    <div class="product__fashion">
        <div class="product__fashion-category">
            <div class="fashion__title">
                <span>LOA BLUTOOH</span>
            </div>
            <div id="fs__nav" class="fashion__nav">
                <div class="fashion__slice">
                    <div class="fashion__nav-item">
                        <ul>
                            <li><a href="">- Bags & Shoes</a></li>
                            <li><a href="">- Blouses</a></li>
                            <li><a href="">- Casual Dresses</a></li>
                            <li><a href="">- For Men</a></li>
                            <li><a href="">- For Women</a></li>
                            <li><a href="">- For Children</a></li>
                        </ul>
                    </div>
                    <div class="fashion__nav-item fs__nav">
                        <ul>
                            <li><a href="">- Hair Accesories</a></li>
                            <li><a href="">- Jacket</a></li>
                            <li><a href="">- Jumpsuits</a></li>
                            <li><a href="">- Kid Fashion</a></li>
                            <li><a href="">- Scarves</a></li>
                            <li><a href="">- Skirts</a></li>
                        </ul>
                    </div>
                    <div class="fashion__nav-item fs__nav">
                        <ul>
                            <li><a href="">- Summer Dresses</a></li>
                            <li><a href="">- Sunglasses</a></li>
                            <li><a href="">- T-Shirt</a></li>
                        </ul>
                    </div>
                </div>
                <div class="fashion__direction">
                    <div class="fashion__direction-item fs__d-one"><i class="fas fa-long-arrow-alt-left"></i></div>
                    <div class="fashion__direction-item fs__d-two"><i class="fas fa-long-arrow-alt-right"></i></div>
                </div>
            </div>
            <div class="fashion__advertive">
                <img src="../Assets/WebPage/imagefrontend/loa-jbl-kp-6012-xeiqk.jpg" width="374px" height="335px">
            </div>
        </div>
        <div class="product__fashion-item">
            <div class="product_fashion-type">
                <ul>
                    <li id="typeOne" onclick="changeType('fsTypeOne')">Best Sellers </li>
                    <li id="typeTwo" onclick="changeType('fsTypeTwo')">Specials</li>
                    <li id="typeThree" onclick="changeType('fsTypeThree')">New Arriavls</li>
                    <li id="typeFour" onclick="changeType('fsTypeFour')">Most Reviews</li>
                </ul>
                <i class="fas fa-caret-up"></i>

                <li id="chevron-up"><i class="fas fa-chevron-up"></i></li>
                <li id="chevron-down"><i class="fas fa-chevron-down"></i></li>

            </div>
            <div class="fashion__main-product">
                <div class="fashion__main-wrap">
                <?php
            if ($resultFashion->num_rows > 0) 
            {
                while($row = $resultFashion->fetch_assoc()) {                 
                ?>
                     <div class="fashion__main-item discount_@item.ProductID" >
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
                }  
             
            ?>
                   
                    

                </div>

            </div>
        </div>
    </div>

    <!--Sport-->
    <div class="main__wrap-product">
        <div class="product__fashion">
            <div class="product__fashion-item">
                <div class="product_fashion-type">
                    <ul>
                        <li id="typeOne" onclick="changeType('fsTypeOne')">Best Sellers </li>
                        <li id="typeTwo" onclick="changeType('fsTypeTwo')">Specials</li>
                        <li id="typeThree" onclick="changeType('fsTypeThree')">New Arriavls</li>
                        <li id="typeFour" onclick="changeType('fsTypeFour')">Most Reviews</li>
                    </ul>
                    <i class="fas fa-caret-up"></i>

                    <li id="chevron__sport-up"><i class="fas fa-chevron-up"></i></li>
                    <li id="chevron__sport-down"><i class="fas fa-chevron-down"></i></li>

                </div>
                <div class="fashion__main-product">
                    <div class="fashion__main-wrap sport__main-wrap">
                    <?php
            if ($resultSport->num_rows > 0) 
            {
                while($row = $resultSport->fetch_assoc()) {
                ?>
                        <div class="sport__main-item discount_@item.ProductID">
                        <a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Details&id=<?php echo $row['ProductID'] ?>">  <img  width="100%" height="239" src="../Assets/Image/<?php echo $row['ProductImage'] ?>" class="attachment-199x239 size-199x239 wp-post-image" alt="" loading="lazy"></a>
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
                                    <li onclick="crawData(<?php echo $row['ProductID']?>)"><i class="fas fa-search-plus"></i></li>
                                    <li><a href="/Nhom09_WebBanHang_LoaPoly/WebPage/ProcessCart.php?id=<?php echo $row['ProductID']?>"> <i class="fas fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="dcDescription">
                                <span class="discountDescription"><?php echo $row['ProductDescription']?></span>
                            </div>
                        </div>
                <?php
                }  
            } 
            ?>


                    </div>

                </div>
            </div>
            <div class="product__fashion-category">
                <div class="fashion__title fs__title-sport">
                    <span><i class="fas fa-futbol"></i></span>
                    <span>LOA VI TÍNH</span>
                    <div class="sport__vertical"></div>
                </div>
                <div id="fs__nav" class="fashion__nav">
                    <div class="fashion__slice slice__sport">
                        <div class="item__sport">
                            <ul>
                                <li><a href="">- Bags & Shoes</a></li>
                                <li><a href="">- Blouses</a></li>
                                <li><a href="">- Casual Dresses</a></li>
                                <li><a href="">- For Men</a></li>
                                <li><a href="">- For Women</a></li>
                                <li><a href="">- For Children</a></li>
                            </ul>
                        </div>
                        <div class="item__sport fs__nav">
                            <ul>
                                <li><a href="">- Hair Accesories</a></li>
                                <li><a href="">- Jackets</a></li>
                                <li><a href="">- Jumpsuits</a></li>
                                <li><a href="">- Kid Fashion</a></li>
                                <li><a href="">- Scarves</a></li>
                                <li><a href="">- Skirts</a></li>
                            </ul>
                        </div>
                        <div class="item__sport fs__nav">
                            <ul>
                                <li><a href="">- Summer Dresses</a></li>
                                <li><a href="">- Sunglasses</a></li>
                                <li><a href="">- T-Shirt</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="fashion__direction">
                        <div class="fashion__direction-item fs__d-oneSport"><i class="fas fa-long-arrow-alt-left"></i></div>
                        <div class="fashion__direction-item fs__d-twoSport"><i class="fas fa-long-arrow-alt-right"></i></div>
                    </div>
                </div>
                <div class="fashion__advertive">
                    <img width="370" height="334" src="../Assets/WebPage/imagefrontend/loa-jbl-kp-6012-xeiqk.jpg" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="../Assets/WebPage/imagefrontend/loa-jbl-kp-6012-xeiqk.jpg" sizes="(max-width: 370px) 100vw, 370px">
                </div>
            </div>
        </div>
        <!--Electrolux-->

        <div class="main__wrap-product">
            <div class="product__fashion">
                <div class="product__fashion-category">
                    <div class="fashion__title product__electronic">
                        <span><i class="fas fa-star-of-david"></i></span>
                        <span>HÀNG CŨ </span>
                    </div>
                    <div id="electro__nav" class="fashion__nav">
                        <div class="fashion__slice electro__slice ">
                            <div class="electro__item">
                                <ul>
                                    <li><a href="">- Bags & Shoes</a></li>
                                    <li><a href="">- Blouses</a></li>
                                    <li><a href="">- Casual Dresses</a></li>
                                    <li><a href="">- For Men</a></li>
                                    <li><a href="">- For Women</a></li>
                                    <li><a href="">- For Children</a></li>
                                </ul>
                            </div>
                            <div class="electro__item">
                                <ul>
                                    <li><a href="">- Hair Accesories</a></li>
                                    <li><a href="">- Jackets</a></li>
                                    <li><a href="">- Jumpsuits</a></li>
                                    <li><a href="">- Kid Fashion</a></li>
                                    <li><a href="">- Scarves</a></li>
                                    <li><a href="">- Skirts</a></li>
                                </ul>
                            </div>
                            <div class="electro__item">
                                <ul>
                                    <li><a href="">- Summer Dresses</a></li>
                                    <li><a href="">- Sunglasses</a></li>
                                    <li><a href="">- T-Shirt</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="fashion__direction">
                            <div class="fashion__direction-item direction__electro-left"><i class="fas fa-long-arrow-alt-left"></i></div>
                            <div class="fashion__direction-item direction__electro-right"><i class="fas fa-long-arrow-alt-right"></i></div>
                        </div>
                    </div>
                    <div class="fashion__advertive">
                        <img width="374" height="334" src="../Assets/WebPage/imagefrontend/PHONEB.png" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/04-img-9.jpg 370w, https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/04-img-9-84x76.jpg 84w, https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/04-img-9-64x58.jpg 64w, https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/04-img-9-300x271.jpg 300w, https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/04-img-9-171x154.jpg 171w" sizes="(max-width: 370px) 100vw, 370px">
                    </div>
                </div>
                <div class="product__fashion-item">
                    <div class="product_fashion-type">
                        <ul>
                            <li id="typeOne" onclick="changeType('fsTypeOne')">Best Sellers </li>
                            <li id="typeTwo" onclick="changeType('fsTypeTwo')">Specials</li>
                            <li id="typeThree" onclick="changeType('fsTypeThree')">New Arriavls</li>
                            <li id="typeFour" onclick="changeType('fsTypeFour')">Most Reviews</li>
                        </ul>
                        <i class="fas fa-caret-up"></i>

                        <li id="chevron__electro-up"><i class="fas fa-chevron-up"></i></li>
                        <li id="chevron__electro-down"><i class="fas fa-chevron-down"></i></li>

                    </div>
                    <div class="fashion__main-product">
                        <div class="fashion__main-wrap electro__main-wrap">
                        <?php
            if ($resultElectric->num_rows > 0) 
            {
                while($row = $resultElectric->fetch_assoc()) {
                ?>
                     <div class="electro__main-item discount_@item.ProductID">
                     <a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Details&id=<?php echo $row['ProductID'] ?>">   <img  width="100%" height="239" src="../Assets/Image/<?php echo $row['ProductImage'] ?>" class="attachment-199x239 size-199x239 wp-post-image" alt="" loading="lazy"></a>
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
                                        <li onclick="crawData(<?php echo $row['ProductID']?>)"><i class="fas fa-search-plus"></i></li>
                                        <li><a href="/Nhom09_WebBanHang_LoaPoly/WebPage/ProcessCart.php?id=<?php echo $row['ProductID']?>"> <i class="fas fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dcDescription">
                                    <span class="discountDescription"><?php echo $row['ProductDescription']?></span>
                                </div>
                            </div>

                <?php
                }  
            } 
            ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Logo__Producer">
            <div class="logo__wrap">
                <div class="logo__item">
                    <ul>
                        <li><img width="50" height="48" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/03-icon-1.png" class="attachment-full size-full wp-post-image" alt="" loading="lazy"></li>
                        <li> <span>GREATE VALUE</span></li>
                    </ul>
                    <div>
                        <span>We offer competitive prices on our 100M items</span>
                    </div>
                </div>
                <div class="logo__item">
                    <ul>
                        <li><img width="50" height="48" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/03-icon-2.png" class="attachment-full size-full wp-post-image" alt="" loading="lazy"></li>
                        <li> <span>WORLDWIDE DELIVERY</span></li>
                    </ul>
                    <div>
                        <span>With sites in 5 languages, we ship to over all the world</span>
                    </div>
                </div>
                <div class="logo__item">
                    <ul>
                        <li><img width="50" height="48" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/03-icon-3.png" class="attachment-full size-full wp-post-image" alt="" loading="lazy"></li>
                        <li> <span>SAFE PAYMENT</span></li>
                    </ul>
                    <div>
                        <span>Pay with the world's most secure payment methods.</span>
                    </div>
                </div>
            </div>
            <div class="logo__wrap">
                <div class="logo__item">
                    <ul>
                        <li class="confidence__img"><img width="47" height="48" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/03-icon-4.png" class="attachment-full size-full wp-post-image" alt="" loading="lazy"></li>
                        <li class="confidence__logo"> <span>SHOP WITH CONFIDENCE</span></li>
                    </ul>
                    <div>
                        <span class="confidence__info">Our buyer protection covers your purchase</span>
                    </div>
                </div>
                <div class="logo__item">
                    <ul>
                        <li><img width="47" height="48" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/03-icon-5.png" class="attachment-full size-full wp-post-image" alt="" loading="lazy"></li>
                        <li> <span>24/7 HELP CENTER</span></li>
                    </ul>
                    <div>
                        <span>Our assistance for a smooth shopping experience.</span>
                    </div>
                </div>
                <div class="logo__item">
                    <ul>
                        <li><img width="47" height="48" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/03-icon-6.png" class="attachment-full size-full wp-post-image" alt="" loading="lazy"></li>
                        <li><span>SHOP ON-THE-GO</span></li>
                    </ul>
                    <div>
                        <span>Download the app and get the world at your fingertips.</span>
                    </div>
                </div>
            </div>
        </div>

