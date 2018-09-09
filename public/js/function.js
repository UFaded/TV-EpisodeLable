function register()
{
    $("#regButton").attr({"disabled":"disabled"});

    var username = document.getElementById("inputName").value;
    var password = document.getElementById("inputPassword").value;
    var passwordRepeat = document.getElementById("PasswordRepeat").value;

    var regPwd = new RegExp("^\\w*$");
    var regName = new RegExp("'");

    if (!regPwd.test(password))
    {
        toastr.warning("密码含有非法字符", "警告");
        document.getElementById("inputPassword").focus();
        return false;
    }

    if(password!=passwordRepeat)
    {
        alert("两次密码不同");
        toastr.warning("两次密码输入不一致","警告");
        document.getElementById("PasswordRepeat").focus();
        return false;
    }
}