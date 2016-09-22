<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link href="/carC/Public/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/carC/Public/css/style.css" rel="stylesheet">
    <script src="/carC/Public/js/lib/jquery-1.11.1.min.js"></script>
    <script src="/carC/Public/css/bootstrap/js/bootstrap.min.js"></script>
    <script src="/carC/Public/js/HomeLogin.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    	var loginUrl= '<?php echo U("Login/loginModel","","");?>';
    	var toUrl= '<?php echo U("Index/index","","");?>';
    </script>
</head>
<body>
<div class="scrollBtn">
    <button>在线咨询</button>
    <button>在线地图</button>
    <button class="returnTop"><img src="/carC/Public/imgs/top.png" /></button>
</div>
<div class="header">
    <div class="helloWord">
        <span>欢迎光临南鑫二手车！</span>
        <div class="rightMessage">
            <ul class="userUl">
                <li><div class="imgHead"><img src="/carC/Public/imgs/gg.jpg" /></div></li>
                <li><a href="<?php echo U("index");?>" class="loginLink">登录</a></li>
                <li><a href="<?php echo U("Register/index");?>" class="regLink">注册</a></li>
                <li><div class="dvdLogin"></div></li>
                <li><p>预约热线:010-111111111</p></li>
            </ul>
        </div>
        <div class="contacTime">09:00-19:00(节假日除外)</div>
    </div>
    <div class="headNav">
        <div class="logo">
            <a href="<?php echo U("Index/index");?>"><img src="/carC/Public/imgs/logo.png"/></a>
            <div class="sel">
                <select class="dress">
                    <option>绵阳</option>
                    <option>成都</option>
                    <option>北京</option>
                </select>
            </div>
        </div>
        <div class="navBar">
            <ul class="navUl">
                <li><a href="/carC/Public/content/home.html">首页</a></li>
                <li><a>我要买车</a></li>
                <li><a href="/carC/Public/content/saleCar.html">我要卖车</a></li>
                <li><a>我要评估</a></li>
                <li><a>关于我们</a></li>
            </ul>
        </div>
        <span class="good100">100%真实车源*****</span>
    </div>
</div>
<div class="imgBigHead">
    <img src="/carC/Public/imgs/pear.jpg">
</div>
<div class="Loginbox">
    <div class="loginTitle">
        <p href="#" class="companyLogin">商家登录</p>
        <p href="#" class="userLogin">个人登录</p>
    </div>
    <div class="loginCompany">
        <form id="companyLog">
            <div class="loginInput">
                <input type="text" class="form-control" placeholder="★  请输入手机号..." name="username"/>
                <input type="password" class="form-control" placeholder="★  请输入密码..." name="password"/>
                <input type="text" name="Log" value="1" hidden="hidden"/>
            </div>
            <div>
                <button class="compLogBtn" type="button">登录</button>
            </div>
        </form>
    </div>
    <div id="loginUser">
        <form id="personLog">
            <div class="loginInput">
                <input type="text" class="form-control" placeholder="★  请输入手机号..." name="username"/>
                <input type="password" class="form-control" placeholder="★  请输入密码..." name="password"/>
                <input  type="text" name="Log" value="0"/>
                
            </div>
            <div>
                <button class="perlogBtn" type="button">登录</button>
            </div>
        </form>
    </div>
    <div class="loginBr1"></div>
    <div class="loginOr">or</div>
    <div class="loginBr2"></div>
    <div class="lefts">第三方登录</div>
    <div class="thirdLogin">
        <a href="#"><img src="/carC/Public/imgs/qq.png"/></a>&nbsp;&nbsp;
        <a href="#"><img src="/carC/Public/imgs/weixin.png"/></a>
        <a href="#" class="regNow">立即注册</a>
        <span class="brLogin">|</span>
        <a href="#" class="forgetPwd">忘记密码</a>
    </div>
</div>
<div class="southFooter">
    <div class="contFooter">
        <div class="footerLogo">
            <img src="/carC/Public/imgs/logoWhite.png">
        </div>
        <div class="about1">
            <li><p class="startTile">关于我们</p></li>
            <li><a href="">企业简介</a></li>
            <li><a href="">服务功能</a></li>
            <li><a href="">经营理念</a></li>
            <li><a href="">资质荣誉</a></li>
            <li><a href="">联系我们</a></li>
        </div>
        <div class="about1">
            <li><p class="startTile">合作发展</p></li>
            <li><a href="">合作伙伴</a></li>
            <li><a href="">合作招商</a></li>
        </div>
        <div class="about1">
            <li><p class="startTile">服务中心</p></li>
            <li><a href="">服务宗旨</a></li>
            <li><a href="">服务热线</a></li>
            <li><a href="">常见问题</a></li>
            <li><a href="">在线咨询</a></li>
            <li><a href="">投诉电话</a></li>
        </div>
        <div class="about1">
            <li><p class="startTile">最新公告</p></li>
            <li><a href="">热门公告</a></li>
        </div>
        <div class="about1">
            <li><p class="startTile">关注南鑫二手车公众号</p></li>
            <li><img src="/carC/Public/imgs/public.png"></li>
        </div>
        <div class="rightPhone">
            <div class="phoneNum">
                <img src="/carC/Public/imgs/phone.png">
            </div>
            <div class="phoneContact">
                <p class="footerPhone">10-11111111</p>
                <p class="footerP2">免费咨询（咨询、建议、投诉）</p>
                <p class="footerP3">09:00-17:00(节假日除外)</p>
            </div>
        </div>
        <div class="footSuch">
            <p>友情链接 : </p>
            <ul class="footUl">
                <li><a href="">xx二手车</a></li>
                <li><a href="">xx二手车</a></li>
                <li><a href="">xx二手车</a></li>
                <li><a href="">xx二手车</a></li>
            </ul>
        </div>
    </div>
    <div class="thisEnd">
        <p>Copyright 2013 车辆交易网 版权所有.京ICP备8888888号</p>
        <p>电话 : 010-11111111 地址 : 北京天津</p>
    </div>
</div>
<script type="text/javascript">
    $('.companyLogin').click(function(){
        $('#loginUser').css({display:'none'});
        $('.loginCompany').css({display:'block'});
        $('.companyLogin').css({borderBottom:'solid 1px #52BBD9'});
        $('.userLogin').css({borderBottom:'1px solid #d1d1d1'});
    })
    $('.userLogin').click(function(){
        $('.loginCompany').css({display:'none'});
        $('#loginUser').css({display:'block'});
        $('.companyLogin').css({borderBottom:'1px solid #d1d1d1'});
        $('.userLogin').css({borderBottom:'solid 1px #52BBD9'});
    })
</script>
</body>
</html>