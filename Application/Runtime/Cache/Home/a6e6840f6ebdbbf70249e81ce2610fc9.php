<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>共享论文上传</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <div class="btn-group" role="group" aria-label="..." style="margin-left:1230px" navbar-static-top >
        <?php if(empty($username)): ?><button type="button" class="btn btn-default"><a href="/stockbbs/index.php/User/login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><strong>登录</strong></button>
            <button type="button" class="btn btn-default" ><a href="/stockbbs/index.php/User/regisiter"><strong>注册</strong></button>

            <?php else: ?>
            <div style='float:left' ><strong>欢迎你：<?php echo ($username); ?>||<a href='/stockbbs/index.php/User/logout'>退出</strong></a></div><?php endif; ?>

    </div>
    <br><br>
    <ul class="nav nav-pills nav-justified navbar-static-top">
        <li role="presentation" class=""><a href="/stockbbs/index.php/Index/index2"><strong>首页</strong></a></li>
        <li role="presentation" class="active"><a href="/stockbbs/index.php/Tie/uploadTie"><strong>共享信息上传</strong></a></li>
        <li role="presentation" class="active"><a href="/stockbbs/index.php/Tie/download"><strong>浏览共享信息</strong></a></li>

        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <strong>用户中心</strong> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li role="presentation" ><a href="/stockbbs/index.php/User/changeupsw">账号管理<span class="glyphicon glyphicon-cog" aria-hidden="true"></a></li>
                <li role="presentation" ><a href="/stockbbs/index.php/User/grade">积分中心<span class="glyphicon glyphicon-usd" aria-hidden="true"></a></li>
                <li role="presentation" ><a href="/stockbbs/index.php/User/logout">用户注销<span class="glyphicon glyphicon-off" aria-hidden="true"></a></li>
            </ul>
        </li>
    </ul>
</head>
<body>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<br>
<br>
<br>
<br>
<form action="/stockbbs/index.php/User/touxiang1" enctype="multipart/form-data" method="post" >
    <li role="presentation" >自定义图片：</li>
    <input type="file" name="image"class="form-control"  style="margin-left:100px;width:200px">
    <br>
    <div class="col-xs-4" style="margin-left:100px;width:300px">
        <button type="submit" class="btn btn-primary btn-block btn-flat">上传</button>
    </div><!-- /.col -->
</form>


</body>
<footer id="footer"style="margin-left:550px;" >
</footer>
</html>