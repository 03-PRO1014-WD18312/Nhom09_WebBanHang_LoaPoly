
<?php
 if(isset($_SESSION['Email'])){
     ?>
        <script>
            window.location = "/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php"; 
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


<script>
    function validate(){

        var yourName = document.getElementById('yourName').value;
        var error_name = document.getElementById('error_name');
        var regexName = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; 
        // Tối thiểu tám ký tự, ít nhất một chữ cái và một số
        
        if(yourName == '' || yourName == null){
            error_name.innerHTML = "Họ tên ko được để trống";
        }else if(!regexName.test(yourName)){
            error_name.innerHTML = "Tối thiểu tám ký tự, ít nhất một chữ cái và một số";
            yourName = '';
        }else{error_name.innerHTML = "";};


        var email =document.getElementById('email').value;
        var error_email=document.getElementById('error_email');
        var regexEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(email == '' || email == null){
            error_email.innerHTML = " Email không được để trống";
        }else if(!regexEmail.test(email)){
            error_email.innerHTML = " Email nhập vào không hợp lệ";  
            email ='';
        }else{error_email.innerHTML = "";};

        var password =document.getElementById('password').value;
        var error_pass =document.getElementById('error_pass');
        var regexPass = /(?=^.{8,}$)/;

        if(password == '' || password == null){
            error_pass.innerHTML = " Password không được để trống";
        }else if(!regexPass.test(password)){
            error_pass.innerHTML = "Password Tối thiểu tám ký tự";  
            password = '';
        }else{error_pass.innerHTML = "";};
        
        if(yourName && email && password){
            return true;
        }else{            
            document.getElementById('form-2').addEventListener("form-2",function(e){
                e.preventDefault();
            })
    }return false;
    }


    function vaLogin(){

        var eLogin =document.getElementById('eLogin').value;
        var error_eLogin=document.getElementById('error_eLogin');
        var regexeLogin = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(eLogin == '' || eLogin == null){
            error_eLogin.innerHTML = " Email không được để trống";
        }else if(!regexeLogin.test(eLogin)){
            error_eLogin.innerHTML = " Email nhập vào không hợp lệ";  
            eLogin ='';
        }else{error_eLogin.innerHTML = "";};

        var pLogin =document.getElementById('pLogin').value;
        var error_pLogin =document.getElementById('error_pLogin');
        var regexpLogin = /(?=^.{8,}$)/;

        if(pLogin == '' || pLogin == null){
            error_pLogin.innerHTML = " Password không được để trống";
        }else if(!regexpLogin.test(pLogin)){
            error_pLogin.innerHTML = "Password Tối thiểu tám ký tự";  
            pLogin = '';
        }else{error_pLogin.innerHTML = "";};
        
        if(eLogin && pLogin){
            return true;
        }else{            
            document.getElementById('form').addEventListener("form",function(e){
                e.preventDefault();
            })
    }return false;

    }
</script>
<div class="main__login">
    <div id="wrap__login">
        <form id="form" action="ProcessLogin.php" method="POST" onsubmit="return vaLogin();">
            <h2 class="login__tt">Login</h2>
            <div id="data__login">
                <div>
                    <Label>Email address<span style="color: red;" id="error_eLogin"></Label>
                    <input id="eLogin" type="email" placeholder="Your email" name="Email" >
                </div>
                <div>
                    <label>Password<span style="color: red;" id="error_pLogin"></label>
                    <input id="pLogin" type="password" placeholder="Your password" name="Password" >
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
                <input type="submit" name="submit" value="LOGIN">
            </div>
        </form>
    </div>

    <div id="wrap__register">
    
        <form id="form-2"  method ="POST" action="/Nhom09_WebBanHang_LoaPoly/WebPage/Register.php" onsubmit="return validate();">
            <h2 class="register__tt">Register</h2>
            <div id="data__register">
                <div>
                    <Label>Username <span style="color: red;" id="error_name"></Label></span>
                    <input id="yourName" name="yourName" type="text" placeholder="Your user name" >
                </div>
                <div>
                    <label>Email adress<span style="color: red;" id="error_email"></label>
                    <input id="email" name="email" type="text" placeholder="Example@gmail.com" >
                </div>
                <div>
                    <label for="">Password<span style="color: red;" id="error_pass"></label>
                    <input id="password" name="password" type="password" placeholder="Your password" >
                </div>
                <div><span>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</span></div>
            </div>
            <div id="register__submit">
                <input id="submit-2" type="submit" name="submit" value="REGISTER">
            </div>
        </form>
    </div>
</div>

