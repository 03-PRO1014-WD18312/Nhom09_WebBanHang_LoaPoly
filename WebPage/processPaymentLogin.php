<?php 
ob_start(); 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
       include '../Assets/ConnectDB.php';
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $sql = "SELECT * FROM user Where Email = '$email' AND PassW = '$password'";
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) {
               $idUser = $row['UserID']; 
               $_SESSION['Email'] = $email;
               $_SESSION['ID'] = $row['UserID'];
               ?>
                 <script>
                    window.location= "/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Payment"
                 </script>
         <!-- header('/MyWeb/WebPage/_LayoutWebPage.php?_LayoutWeb=Payment'); -->
               <?php
            }
        }  
        else{
            ?>
                    <script>
                        window.location = "/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb =lgPayment"
                    </script>
            <?php
        
        }
    
    $conn->close(); 
?>