<style>
.category-link{
    width: 100%;
    color:#333;
    height:100%;
    display:flex;
    flex-direction:column
}


.category-link li{
    height:45px;
    line-height:45px;
    width: 100%;
    background-color:white;
    color:black;
    text-align:center;
    font-size:20px;
    font-weight:bold;
    border: 1px solid rgba(128, 128, 128, 0.178);  
    cursor:pointer;  
}

.category-link li a{
    color:inherit; 
    cursor:pointer;
}
</style>


<?php
// goi file ket noi db
include '../Assets/ConnectDB.php'; 


$sqlDiscount = "SELECT * FROM product Where CategoryID = 1"; 
$sqlFashion = "SELECT * FROM product Where CategoryID = 2"; 
$sqlSport = "SELECT * FROM product Where CategoryID = 3"; 
$sqlElectric = "SELECT * FROM product Where CategoryID = 4"; 
$sqlCategory = "SELECT * FROM category";

// thuc hien truy van

$resultDiscount = $conn->query($sqlDiscount); 
$resultFashion = $conn->query($sqlFashion);
$resultElectric = $conn->query($sqlElectric);
$resultSport = $conn->query($sqlSport);
$resultCategory = $conn->query($sqlCategory);
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
                        <span class="Main__quickDescription">JBL PartyBox is a quality product from the JBL brand with powerful sound quality and unique lighting effects. JBL PartyBox promises to bring users a great sound experience.</span>
                    </div>
                    <div class="quickHr"></div>
                    <div class="quickOption itemQuick">
                        <span>Status  : <span class="quickStock"> In stock </span></span>
                        <div class="quickAddCart">
                            <div>
                            <span class="quickDec"><i class="fas fa-minus"></i></span>
                            <span class="quickValue"><p id="quantityQuickCurrent">1</p></span>
                            <span class="quickInc"><i class="fas fa-plus"></i></span>
                            </div>

                            <div class="addK">
                                <span>ADD TO CART </span>
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
            <ul class="category-link">
             <?php 
              if ($resultCategory->num_rows > 0) 
              {
                  while($row = $resultCategory->fetch_assoc()) {
                  ?>
                     <li>
                     <a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=ProductByCategory&id=<?php echo $row['CategoryID'] ?>"><?php echo $row['CategoryName'] ?></a>
                    </li>
                  <?php
                  }  
              } 
             ?>              
            </ul>
        </div>
        <div class="body__slice-wrap">


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