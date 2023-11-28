<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Assets/WebPage/Css/css.css">
    <link rel="stylesheet" href="../Assets/WebPage/IconWeb/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    #view-cart-option{
        display:none; 
    }
    #cart-option:hover #view-cart-option{
        display:block; 
    }
</style>
<body>
    <div class="App">
        <div class="header">
            <div class="header__first">
                <div class="header__first_item">
                    <ul class="header__list-1">
                        <li><a href="">00-66-77-88-99</a></li>
                        <div class="header__vertical"></div>
                        <li><a href="">Liên hệ với chúng tôi ngay !</a></li>
                        <div class="header__vertical"></div>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""> <i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="header__first_item">
                    <ul class="header__list-2">
                        <li id="myTitleAccount"><a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Login"><?php
                         if(isset($_SESSION['Email'])){
                            echo ($_SESSION['Email']);
                        }else{
                            echo  "My Account";
                        }
                        ?></a>
                            <?php if(isset($_SESSION['Email'])){
                                ?>
                                     <span style="width:120px;height:30px;background-color:orange;text-align:center;font-weight:bold;line-height:30px" id="myLogout"><a href="/Nhom09_WebBanHang_LoaPoly/WebPage/ProcessLogout.php?id=0">Logout</a></span>
                                <?php
                            } ?>
                           
                        </li>
                        <div class="header__vertical-2"></div>
                        <li><a href="">Service</a></li>
                        <div class="header__vertical-2"></div>
                        <li><a href="">Support</a></li>
                        <div class="header__vertical-2"></div>
                        <li id="cart-option" style="position:relative" ><a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Cart"><i class="fas fa-shopping-cart"></i></a>
                        <ul id="view-cart-option" style="position:absolute" style="width:100px;height:300px">
                            <li style="width:120px;height:30px;background-color:orange;text-align:center;font-weight:bold"><a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Cart">Giỏ Hàng </a></li>
                            <li style="width:120px;height:30px;background-color:orange;text-align:center;font-weight:bold;margin-top:3px"><a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Order">View Order</a></li>
                    </ul>
                        </li>
                        <span class="header__cart-quantity">
                        <?php
                            if(isset($_SESSION['Cart'])){
                                echo count($_SESSION['Cart']);
                            }else{
                                echo 0;
                            }
                        ?></span>
                    </ul>
                </div>
            </div>
            <div class="header__Second-wrap">
                <div class="header__Second">
                    <div class="header__logo">
                        
                     <h1 style="color:white"> LOA FOLY</h1>
                    </div>
                    <div class="header__nav">
                        <ul>
                            <li><span><a href="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php" style="color:white">HOME</a></span></li>
                            <li>SHOP</li>
                            <li>BLOG</li>
                            <li>PAGE</li>
                            <li>PURCHASE THIS THEME!</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header__three-wrap">
                <div class="header__three">
                    <div class="header__three-item">
                        <ul>
                            <li><img width="54" height="54" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/04-img-1.png" class="attachment-full size-full wp-post-image" alt="" loading="lazy"></li>
                            <li>WORLDWIDE DELIVERY</li>
                        </ul>
                    </div>
                    <div class="header__three-item">
                        <ul>
                            <li><img width="54" height="54" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/04-img-2.png" class="attachment-full size-full wp-post-image" alt="" loading="lazy"></li>
                            <li>24/7 HELP CENTER</li>
                        </ul>
                    </div>
                    <div class="header__three-item">
                        <ul>
                            <li><img width="54" height="54" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/04-img-3.png" class="attachment-full size-full wp-post-image" alt="" loading="lazy"></li>
                            <li>SHOP WITH CONFIDENCE</li>
                        </ul>
                    </div>
                    <div class="header__three-item">
                        <ul>
                            <li><img width="54" height="54" src="https://kuteshop.kutethemes.net/wp-content/uploads/2021/08/04-img-4.png" class="attachment-full size-full wp-post-image" alt="" loading="lazy"></li>
                            <li>SAFE PAYMENT</li>
                        </ul>
                    </div>
                </div>
                   
            </div>
        </div>
        <!--Body-->
        <?php   
                        if(isset($_GET["_LayoutWeb"])){
                            switch($_GET["_LayoutWeb"]){
                                case 'Login':include_once './Login.php';
                                break; 
                                case 'Details':include_once './DetailProduct.php';
                                break;
                                case 'Cart':include_once './Cart.php';
                                break;
                                case 'Payment':include_once './Payment.php'; 
                                break; 
                                case 'Order':include_once './myOrder.php';
                                break;
                                case 'lgPayment':include_once './loginPayment.php';
                                break; 
                                case 'OrderSS':include_once './OrderSuccess.php'; 
                                break; 
                                case 'ProductByCategory':include_once './ProductByCategory.php'; 
                                break; 
                            }
                        }else{
                            include_once './HomePage.php'; 
                        }          
                    
                    ?>

         <div class="footer">
                    <div class="footer__wrap">
                        <div class="footer__list-option">
                            <ul>
                                <li><span>LOA FOLY</span></li>
                                <li><span>Condimentum adipiscing vel neque dis nam parturient orci at scelerisque neque dis nam parturient.</span></li>
                                <li>
                                    <span>
                                        Address:
                                        Example Street 68, Mahattan,
                                        New York, UK
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        Phone:
                                        (+800) 123 456 7891
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        Email:
                                        kuteshopsupport@gmail.com
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div class="footer__list-options">
                            <ul>
                                <li><span>Company</span></li>
                                <li><span>About us</span></li>
                                <li><span>Testimonials</span></li>
                                <li><span>Affiliate Program</span></li>
                                <li><span>Terms & Conditions</span></li>
                                <li><span>Contact Us</span></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="footer__list-options">
                            <ul>
                                <li><span>My Account</span></li>
                                <li><span>My Order</span></li>
                                <li><span>My Wishlist</span></li>
                                <li><span>My Credit Slip</span></li>
                                <li><span>My Addresses</span></li>
                                <li><span>My Personal Info</span></li>
                            </ul>
                        </div>
                        <div class="footer__list-options">
                            <ul>
                                <li><span>Supports</span></li>
                                <li><span>New User Guide</span></li>
                                <li><span>Help Center</span></li>
                                <li><span>Refund Policy</span></li>
                                <li><span>Report Spam</span></li>
                                <li><span>FAQs</span></li>
                            </ul>
                        </div>
                        <div class="footer__list-options">
                            <ul>
                                <li><span>Newsletter</span></li>
                                <li class="footer__input">
                                    <input type="text" placeholder="Your email address" />
                                    <div><span>OK</span></div>
                                </li>
                                <li class="footer__social"><span>Lest’s Socialize</span></li>
                                <li class="footer__icon-social">
                                    <div class="footer__face"><i class="fab fa-facebook-f"></i></div>
                                    <div class="footer__twitter"><i class="fab fa-twitter"></i></div>
                                    <div class="footer__youtobe"><i class="fab fa-youtube"></i></div>
                                    <div class="footer__instagram"><i class="fab fa-instagram"></i></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="footer__CoppyRight">
                    <ul>
                        <li><span>Copyrights © KuteShop eCommerce. All Rights Reserved.</span></li>
                        <li><span>Made with <i class="fas fa-heart"></i>  by Kutetheme!</span></li>
                    </ul>
                </div>
            </div>
        </div>
</body>
</html>
<script src="../Assets/WebPage/Js/index-2.js" ></script>
<script src="../Assets/WebPage/Js/index.js"></script>