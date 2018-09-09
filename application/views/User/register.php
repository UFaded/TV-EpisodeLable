<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/26
 * Time: 下午10:04
 */?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">

    <meta name="keyword" content="magz, html5, css3, template, magazine template">
    <title>Magz &mdash; Responsive HTML5 &amp; CSS3 Magazine Template</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">
    <link rel="stylesheet" href="../../../public/css/style1.css">
    <script type="text/javascript" src="../../../public/js/toastr/toastr.js"></script>
</head>

<body>
<div class="login first grey" style="padding-top: 30px;">
    <div class="container">
        <div class="box-wrapper">
            <div class="box box-border">
                <div class="box-body">
                    <h4>注册</h4>
                    <?php echo validation_errors(); ?>
                    <form action="<?php echo site_url('UserController/register');?>" method="post">
                        <div class="form-group">
                            <label for="inputName">用户名</label>
                            <input type="text" name="username" class="form-control" id="inputName" placeholder="4-8位用户名" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">邮  箱</label>
                            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="请输入您的邮箱" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">密  码</label>
                            <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="6-16位密码" required>
                        </div>
                        <div class="form-group">
                            <label for="PasswordRepeat">确认密码</label>
                            <input type="password" id="PasswordRepeat" name="PasswordRepeat" class="form-control" placeholder="请再次输入密码" required>
                        </div>
<!--                        <div class="form-group">-->
<!--                            <label for="ChaptCha">验证码</label>-->
<!--                            <input type="text" id="ChaptCha" class="form-control" placeholder="点击图片可更换验证码" required>-->
<!--                            <img src="/TvEpisodeLable/index.php/UserController/getcode" id="ChaptCha_img" alt="图片加载失败，点击重新加载">-->
<!--                        </div>-->
                        <div class="form-group text-right">
                            <button class="btn btn-orange btn-block" style="color:white;" type="submit" id="regButton">注册</button>
                        </div>
                        <div class="form-group text-center">
                            <span class="text-muted">已经有账号?</span> <a href="/index.php/UserController/tologin">登录</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    echo "<script type='text/javascript' src='../../../public/js/function.js'></script>";
?>
</body>
</html>
