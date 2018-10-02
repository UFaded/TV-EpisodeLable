function register()
{

    var flag = false;
    var phoneNumber = document.getElementById("inputPhone").value;
    var userName = document.getElementById("inputName").value;
    var pwd = document.getElementById("inputPassword").value;
    var pwdRepeat = document.getElementById("PasswordRepeat").value;

    var regPwd = new RegExp("^\\w*$");
    var regPh = new RegExp("^\\d{11,}$");
    var regName = /^[a-zA-Z0-9_-]{4,8}$/;

    if(!regName.test(userName))
    {
        toastr.warning("昵称含非法字符","警告");
        document.getElementById("inputName").focus();
        return false;
    }

    if (!regPh.test(phoneNumber))
    {
        toastr.warning("手机号不符合规范", "警告");
        document.getElementById("inputPhone").focus();
        return false;
    }

    if(pwd.length <6)
    {
        toastr.warning("密码不符合规范","警告");
        document.getElementById("inputPassword").focus();
        return false;
    }

    if (!regPwd.test(pwd))
    {
        toastr.warning("密码含有非法字符", "警告");
        document.getElementById("inputPassword").focus();
        return false;
    }

    if(pwd!=pwdRepeat)
    {
        toastr.warning("两次密码输入不一致","警告");
        document.getElementById("PasswordRepeat").focus();
        return false;
    }


    data = {
        'u_name':userName,
        'u_phone':phoneNumber,
        'u_passwd':pwd,
    };
    console.log(data);
    $.ajax({
        type:'POST',
        url:'/index.php/UserController/ajaxRegister',
        data:data,
        async:false,
        error: function(XMLHttpRequest, textStatus, errorThrown)
        {
            alert(XMLHttpRequest.status);
            alert(XMLHttpRequest.readyState);
            alert(textStatus);
            toastr.error("网络错误", "错误");
        },
        success:function (result) {
            if(result == "Insert the success")
            {
                toastr.success("注册成功","信息");
                flag = true;
            }
            else if(result == "Password duplicated")
            {
                toastr.error("该手机号码已被占用","错误");
                flag = false;
            }
            else
            {
                toastr.info(result,"DEBUG");
                toastr.error("参数错误","错误");
                flag = false;
            }
        }
    });
    return flag;//返回值很重要
}