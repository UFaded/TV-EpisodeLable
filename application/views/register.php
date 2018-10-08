
<div class="login first grey" style="padding-top: 30px;">
    <div class="container">
        <div class="box-wrapper">
            <div class="box box-border">
                <div class="box-body">
                    <h4>注册</h4>
                    <?php echo validation_errors(); ?>
                    <form action="/index.php/UserController/toCurrentHot" method="GET" onsubmit="return register()">
                        <div class="form-group">
                            <label for="inputPhone">手机号码</label>
                            <input type="text" id="inputPhone" name="inputPhone" class="form-control" placeholder="请输入您的手机号" required>
                        </div>
                        <div class="form-group">
                            <label for="inputName">用户名</label>
                            <input type="text" name="username" class="form-control" id="inputName" placeholder="4-8位用户名" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">密  码</label>
                            <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="6-16位密码" required>
                        </div>
                        <div class="form-group">
                            <label for="PasswordRepeat">确认密码</label>
                            <input type="password" id="PasswordRepeat" name="PasswordRepeat" class="form-control" placeholder="请再次输入密码" required>
                        </div>
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

