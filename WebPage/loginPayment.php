<?php 
  if(isset($_SESSION['Email'])){
    ?>
        <script>
            window.location("/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php");
        </script>
    <?php
}

?>

<style>
    #form-2{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    height: auto;
}
</style>

<div class="main__login">
    <div id="wrap__login">
        <form id="form" action="/Nhom09_WebBanHang_LoaPoly/WebPage/processPaymentLogin.php" method="POST">
            <h2 class="login__tt">Login</h2>
            <div id="data__login">
                <div>
                    <Label>Username or email address</Label>
                    <input type="email" placeholder="Your email" name="Email" required>
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" placeholder="Your password" name="Password" required>
                </div>
            </div>
            <div id="optionsLogin">
                <div>
                    <input type="checkbox">
                    <span>Remember me</span>
                </div>
                <div>
                    <span><a href="">Your lose password ?</a></span>
                </div>
            </div>
            <div id="login__submit">
                <input type="submit"name="submit" value="LOGIN">
            </div>
        </form>
    </div>

    <div id="wrap__register">
        <form id="form-2" action="/Nhom09_WebBanHang_LoaPoly/WebPage/Register.php" method ="POST">
            <h2 class="register__tt">Register</h2>
            <div id="data__register">
                <div>
                    <Label>Username</Label>
                    <input type="text" placeholder="Your user name" name="yourName" required>
                </div>
                <div>
                    <label>Email adress</label>
                    <input type="text" placeholder="Example@gmail.com" name="Email" required>
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password" placeholder="Your password" name="Password" required>
                </div>
                <div><span>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</span></div>
            </div>
            <div id="register__submit">
                <input type="submit" name="submit" value="REGISTER">
            </div>
        </form>
    </div>
</div>