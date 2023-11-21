<?php
ob_start(); 
    include '../Assets/ConnectDB.php'; 
    if(isset($_POST['submit'])){
        $userName = $_POST['yourName']; 
        $email = $_POST['email']; 
        $password = $_POST['password']; 
        $sql = "INSERT INTO user (UserName,Email,PassW,Role) VALUES ('$userName','$email','$password',1)"; 
        $conn->query($sql); 
        ?>
            <script>
                alert('You are register a account success ! Login now.');
                window.location = "/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Login"; 
            </script>
        <?php       
    }
?>