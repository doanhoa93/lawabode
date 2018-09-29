<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo $base_assets_url;?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo $base_assets_url;?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo $base_assets_url;?>css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bg-black">

<div class="form-box" id="login-box">
    <div class="header">Sign In</div>
    <?php
    $attributes = array('id' => 'loginForm',);
    ?>
    <?php echo form_open("users/signin",$attributes);?>
    <div class="body bg-gray">
        <?php echo message_box(validation_errors(),'danger'); ?>
        <?php echo $this->session->flashdata('message');?>
        <div class="form-group">
            <input type="text" name="identity" id="username" class="form-control" placeholder="Email"/>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
        </div>
        <div class="form-group">
            <input type="checkbox" name="rememberMe" id="rememberMe"/> <label for="rememberMe">Remember me</label>
            <input type="checkbox" name="remember" value="1" checked="checked" style="display: none" />
        </div>
    </div>
    <div class="footer">
        <button type="button" class="btn bg-olive btn-block" onclick="loginAction()">Sign me in</button>
        <p><a href="<?php echo site_url('forgot_password')?>">I forgot my password ?</a></p>
    </div>
    <?php echo form_close();?>
</div>

<!-- jQuery 2.0.2 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $base_assets_url;?>js/bootstrap.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        var usernameCookies = getCookie('COOKIES_USERNAME');
        var passwordCookies = getCookie('COOKIES_PASSWORD');
        var remembermeCookies = getCookie('COOKIES_REMEMBERME');
        if(remembermeCookies.toString() == 'true'){
            $('#username').val(usernameCookies);
            $('#password').val(passwordCookies);
            $('#rememberMe').prop('checked', true);
        }
    });

    /*function checkCookie() {
        var user = getCookie("username");
        if (user != "") {
            alert("Welcome again " + user);
        } else {
            user = prompt("Please enter your name:", "");
            if (user != "" && user != null) {
                setCookie("username", user, 365);
            }
        }
    }*/

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function deleteCookie(name) { setCookie(name, '', -1); }

    function loginAction() {
        var username = $('#username').val();
        var password = $('#password').val();
        var rememberMe = $('input[type=checkbox]').prop('checked');
        if(rememberMe.toString() == 'true'){
            setCookie('COOKIES_USERNAME',username,30);
            setCookie('COOKIES_PASSWORD',password,30);
            setCookie('COOKIES_REMEMBERME',rememberMe,30);
        }else{
            deleteCookie('COOKIES_USERNAME');
            deleteCookie('COOKIES_PASSWORD');
            deleteCookie('COOKIES_REMEMBERME');
        }
        $("#loginForm").submit();
        /*$("#loginForm").submit(function(){
        alert("Submitted");
        });*/
    }
</script>

</body>
</html>
