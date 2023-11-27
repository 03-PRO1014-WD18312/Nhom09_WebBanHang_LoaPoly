
// luu gio hang trong session
<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $id = $_GET['id']; 
    if(isset($_SESSION['Cart'][$id])){
        $_SESSION['Cart'][$id]  =  $_SESSION['Cart'][$id] + 1; 
    }else{
        $_SESSION['Cart'][$id] = 1; 
    }
    header('location:/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Cart'); 
?>