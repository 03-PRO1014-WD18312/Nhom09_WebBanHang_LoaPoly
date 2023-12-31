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
                <span>BLUTOOH</span>
            </div>
            <div id="fs__nav" class="fashion__nav">
                <div class="fashion__slice">
                    <div class="fashion__nav-item">
                        <ul>
                            <li><a href="">- Go 3</a></li>
                            <li><a href="">- Flic 6</a></li>
                            <li><a href="">- Charge 5</a></li>
                            <li><a href="">- Xtreme 3</a></li>
                            <li><a href="">- Bombox 3</a></li>
                            <li><a href="">- Pulse 5</a></li>
                        </ul>
                    </div>
                    <div class="fashion__nav-item fs__nav">
                        <ul>
                            <li><a href="">- Party box 110</a></li>
                            <li><a href="">- Party box Go</a></li>
                            <li><a href="">- Party box 310</a></li>
                            <li><a href="">- Party box 710</a></li>
                            <li><a href="">- Tune 3</a></li>
                            <li><a href="">- Clip 6</a></li>
                        </ul>
                    </div>
                    <div class="fashion__nav-item fs__nav">
                        <ul>
                            <li><a href="">- JBL Bar 300</a></li>
                            <li><a href="">- JBL Bar 500</a></li>
                            <li><a href="">- JBL Stage 180</a></li>
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
                    <span>ELECTRIC</span>
                    <div class="sport__vertical"></div>
                </div>
                <div id="fs__nav" class="fashion__nav">
                <div class="fashion__slice">
                    <div class="fashion__nav-item">
                        <ul>
                            <li><a href="">- Go 3</a></li>
                            <li><a href="">- Flic 6</a></li>
                            <li><a href="">- Charge 5</a></li>
                            <li><a href="">- Xtreme 3</a></li>
                            <li><a href="">- Bombox 3</a></li>
                            <li><a href="">- Pulse 5</a></li>
                        </ul>
                    </div>
                    <div class="fashion__nav-item fs__nav">
                        <ul>
                            <li><a href="">- Party box 110</a></li>
                            <li><a href="">- Party box Go</a></li>
                            <li><a href="">- Party box 310</a></li>
                            <li><a href="">- Party box 710</a></li>
                            <li><a href="">- Tune 3</a></li>
                            <li><a href="">- Clip 6</a></li>
                        </ul>
                    </div>
                    <div class="fashion__nav-item fs__nav">
                        <ul>
                            <li><a href="">- JBL Bar 300</a></li>
                            <li><a href="">- JBL Bar 500</a></li>
                            <li><a href="">- JBL Stage 180</a></li>
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
                        <span>SOUND BAR</span>
                    </div>
                    <div id="fs__nav" class="fashion__nav">
                <div class="fashion__slice">
                    <div class="fashion__nav-item">
                        <ul>
                            <li><a href="">- Go 3</a></li>
                            <li><a href="">- Flic 6</a></li>
                            <li><a href="">- Charge 5</a></li>
                            <li><a href="">- Xtreme 3</a></li>
                            <li><a href="">- Bombox 3</a></li>
                            <li><a href="">- Pulse 5</a></li>
                        </ul>
                    </div>
                    <div class="fashion__nav-item fs__nav">
                        <ul>
                            <li><a href="">- Party box 110</a></li>
                            <li><a href="">- Party box Go</a></li>
                            <li><a href="">- Party box 310</a></li>
                            <li><a href="">- Party box 710</a></li>
                            <li><a href="">- Tune 3</a></li>
                            <li><a href="">- Clip 6</a></li>
                        </ul>
                    </div>
                    <div class="fashion__nav-item fs__nav">
                        <ul>
                            <li><a href="">- JBL Bar 300</a></li>
                            <li><a href="">- JBL Bar 500</a></li>
                            <li><a href="">- JBL Stage 180</a></li>
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
                        <span>Pay with the world’s most secure payment methods.</span>
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

