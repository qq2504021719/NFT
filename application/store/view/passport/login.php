<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>轻创开发网 - 后台管理系统</title>
    <link rel="icon" type="image/png" href="assets/common/i/favicon.ico"/>
    <link rel="stylesheet" href="assets/admin/css/login/style.css"/>
    <style type="text/css">
        .copyright {
            margin: -40px auto 0 auto;
            padding: 2px 0;
            width: 600px;
            color: #ccc;
        }

        .copyright a {
            color: #ccc;
        }
    </style>
</head>
<body class="page-login-v3">
<div class="container">
    <div id="wrapper" class="login-body">
        <div class="login-content">
            <div class="brand">
                <h2 class="brand-text">轻创开发网管理系统</h2>
            </div>
            <form id="login-form" class="login-form">
                <div class="form-group">
                    <input class="" name="User[user_name]" placeholder="请输入用户名" type="text" required>
                </div>
                <div class="form-group">
                    <input class="" name="User[password]" placeholder="请输入密码" type="password" required>
                </div>
                <div class="form-group">
                    <button id="btn-submit" type="submit">
                        登录
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="copyright">
        <span>Copyright ©2022 贵州猿创科技有限责任公司 版权所有 <a href="https://www.baidu.com/" target="_blank">粤ICP备18030800号-1</a></span>
    </div>
</div>
</body>
<script src="assets/common/js/jquery.min.js"></script>
<script src="assets/common/plugins/layer/layer.js"></script>
<script src="assets/common/js/jquery.form.min.js"></script>
<script>
    $(function () {
        // 表单提交
        var $form = $('#login-form');
        $form.submit(function () {
            var $btn_submit = $('#btn-submit');
            $btn_submit.attr("disabled", true);
            $form.ajaxSubmit({
                type: "post",
                dataType: "json",
                // url: '',
                success: function (result) {
                    $btn_submit.attr('disabled', false);
                    if (result.code === 1) {
                        layer.msg(result.msg, {time: 1500, anim: 1}, function () {
                            window.location = result.url;
                        });
                        return true;
                    }
                    layer.msg(result.msg, {time: 1500, anim: 6});
                }
            });
            return false;
        });
    });
</script>
</html>