
<div class="login first grey" style="padding-top: 50px;">
    <div class="container">
        <div class="box-wrapper">
            <div class="box box-border">
                <div class="box-body">
                    <h4>登录</h4>
                    <?php echo validation_errors(); ?>
                    <form action="/index.php/UserController/toCurrentHot" method="GET" onsubmit="return login()">
                        <div class="form-group">
                            <label>手机号码</label>
                            <input type="text" name="inputPhone" id="inputPhone" class="form-control" value="" placeholder="请输入手机号码" required>
                        </div>
                        <div class="form-group">
                            <label class="fw">密码
                                <a href="" class="pull-right">忘记密码?</a>
                            </label>
                            <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="请输入密码" required>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-orange btn-block" style="color:white;" type="submit">登录</button>
                        </div>
                        <div class="form-group text-center">
                            <span class="text-muted">没有账号?</span> <a href="/index.php/UserController/toregister">注册</a>
                        </div>
                        <div class="title-line">
                            or
                        </div>
                        <a href="" class="btn btn-social btn-block facebook"> 返回上一页</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>