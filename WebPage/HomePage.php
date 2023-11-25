
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
                    <div><a href="">TAI NGhE </a></div>
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

<!-- search san pham -->
        <div class="body__slice">               
                <div style="width:100%" class="body__slice-search">
                <form action="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_HomePage=Search" method="post">
                    <input type="text" name="search" placeholder="Type search here...">
                    <button name="submit_search" class="Slice__search">
                    <a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_HomePage=Search"><i class="fas fa-search"></i></a>
                </button>                           
                    </form>                
                </div>
            </div>
<!-- het search san pham -->

            <div class="body__slice-main">
                <div class="slice__wrap">
                    <img class="body__slice-item" width="926" height="484" src='../Assets/WebPage/imagefrontend/banner-amthanhdaily.jpg' alt="">
                    <img class="body__slice-item" width="926" height="484" src="../Assets/WebPage/imagefrontend/banner-giai-phap-am-thanh-dong-bo-chuyen-nghiep.jpg" alt="">
                    <img class="body__slice-item" width="926" height="484" src="../Assets/WebPage/imagefrontend/sam-loa-bluetooth-mung-dai-le-800x600.jpg" alt="">
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

<?php
if(isset($_POST['submit_search'])){
    $finding = $_POST['search'];
    if($finding ==null){$finding = 0;}else{$finding=1;}
    switch($finding){
        case 0: include_once './Body.php';
        break;
        case 1: include_once './Search.php'; 
        break;
    }}else{include_once './Body.php';}   

  
?>