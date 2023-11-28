<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
    if(isset($_GET['id'])){
        $id = $_GET['id']; 
        if($id == 0){
            session_destroy(); 
        }
    }
    header('location:/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Login');
?>