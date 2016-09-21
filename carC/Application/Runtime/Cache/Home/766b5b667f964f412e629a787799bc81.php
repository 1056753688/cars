<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>南鑫-注册</title>
    <link rel="stylesheet" href="/carC/Public/css/style.css" />
    <link href="/carC/Public/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/carC/Public/js/uploadify/uploadify.css"/>
    <script src="/carC/Public/css/bootstrap/js/jquery-1.11.1.min.js"></script>
    <script src="/carC/Public/js/HomeRegister.js"></script>
    <script src="/carC/Public/css/bootstrap/js/bootstrap.min.js"></script>
    <script src="/carC/Public/js/uploadify/jquery.uploadify.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    	var Url= '<?php echo U("personRegister","","");?>';
    	var compUrl='<?php echo U("companyRegister","","");?>';
    	var upImage='<?php echo U("upImage","","");?>';
    	var loginUrl ='<?php echo U("Login/index","","");?>';
    	var toUrl= '<?php echo U("Index/index","","");?>';
    	var numUrl= '<?php echo U("num","","");?>';
    	var public ="/carC/Public";
    </script>
</head>
<body>
	<!--<img src=" /carC/Public/upload/2016-09-18/57deac4069143.jpg" />-->
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
                <li><a href="<?php echo U("Login/index","","");?>" class="loginLink">登录</a></li>
                <li><a href="<?php echo U("index","","");?>" class="regLink">注册</a></li>
                <li><div class="dvdLogin"></div></li>
                <li><p>预约热线:010-111111111</p></li>
            </ul>
        </div>
        <div class="contacTime">09:00-19:00(节假日除外)</div>
    </div>
    <div class="headNav">
        <div class="logo">
            <a href="home.html"><img src="/carC/Public/imgs/logo.png"/></a>
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
                <li><a href="home.html">首页</a></li>
                <li><a>我要买车</a></li>
                <li><a>我要卖车</a></li>
                <li><a>我要评估</a></li>
                <li><a>关于我们</a></li>
            </ul>
        </div>
        <span class="good100">100%真实车源*****</span>
    </div>
</div>
<div class="advertisement">
    <a href=" "><img src="/carC/Public/imgs/ad.jpg" /></a>
    <button id="closeAdvance" type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
</div>
<div class="regContentBg">
    <div class="regNav">
        <p>您当前的位置：首页 > <span>注册账号</span></p>
    </div>
    <div class="regMessage">
        <div class="regMain">
            <div class="regTitle">
                <a><div id="CompanyRegTitle" class="col-xs-6">商家注册</div></a>
                <a><div id="userRegTitle" class="col-xs-6">个人用户注册</div></a>
                <!--<a class="RegisterRole" value="1"></a>-->
            </div>
            <div id="userReg" >
	            <form id="userRegister" >
	                <div class="inpGrounp">
	                    <label for="userPhone">手机号</label>
	                    <input name="userPhone" class="form-control phone" placeholder="请输入手机号..." />
	                </div>
	                <div class="inpGrounp">
	                    <label for="realName">真实姓名</label>
	                    <input name="realName" class="form-control" placeholder="请输入您的真实姓名..." />
	                </div>
	                <div class="inpGrounp">
	                    <label>性别</label>
	                    <form>
	                        <div class="sexMan"><input id="inpRadio" name="sex" type="radio"  /><span>男</span></div>
	                        <div class="sexFamle"><input id="inpFam" name="sex" type="radio" /><span>女</span></div>
	                      	<input name="sex1" class="form-control" style="display: none;"/>
	                    </form>
	                </div>
	                <div class="inpGrounp">
	                    <label for="userPass">密码</label>
	                    <input name="userPass" type="password" class="form-control" placeholder="请输入密码..." />
	                </div>
	                <div class="inpGrounp">
	                    <label for="userSure">确认密码</label>
	                    <input name="userSure" type="password" class="form-control" placeholder="请再次输入密码..." />
	                </div>
	                <div class="inpGrounp">
	                    <label for="userRegCode">验证码</label>
	                    <input name="userRegCode" type="password" class="form-control" placeholder="请输入验证码..." />
	                    <a class="sentCode">发送验证码</a>
	                </div>
	                <div class="inpGrounp">
	                	<input name="RegisterRole" class="form-control" value="0" style="display: none;"/>
	                </div>
	                <button class="PerRegBtn">确认注册</button>
	                <div class="agreeBox">
	                    <input type="checkbox" checked/><span>我同意遵守《南鑫二手车协议》</span>
	                </div>
	            </form>
            </div>
            <form  class="companyReg"  method="post">
            	<div class="inpGrounp">
	                	<input name="RegisterRole" class="form-control" value="1" style="display: none;"/>
	            </div>
                <div class="inpGrounp">
                    <label for="cont">用户名</label>
                    <input name="cont" class="form-control" placeholder="请输入用户名..." />
                </div>
                <div class="inpGrounp">
                    <label for="phoneNum">手机号</label>
                    <input name="phoneNum" class="form-control" placeholder="请输入手机号..."/>
                </div>
                <div class="inpGrounp">
                    <label for="companyName">公司名称</label>
                    <input name="companyName" class="form-control" placeholder="请输入公司名称..." />
                </div>
                <div class="inpGrounp">
                    <label for="address">地址</label>
                    <input name="address" class="form-control" placeholder="请输入地址..." />
                </div>
	            <div class="inpPhoto">
	                    <label>上传经营证照</label>
	                <span id="uploadImg1">
	                    <button class="upPicBtn" type="button">上传图片</button><p>(限1M以内)（非必填）</p>
	                    <input type="file" name="file1" id="file1"/>
	                    <input  name="path" hidden="hidden"/>
	                </span>
	            </div>
                <div class="inpGrounp">
                    <label for="shopNum">营业执照</label>
                    <input name="shopNum" class="form-control" placeholder="请输入营业执照号..." /><p>(非必填)</p>
                </div>
                <div class="inpGrounp">
                    <label for="preside">负责人姓名</label>
                    <input name="preside" class="form-control" placeholder="请输入负责人姓名..." /><p>(非必填)</p>
                </div>
                <div class="inpGrounp">
                    <label for="pass">密码</label>
                    <input name="pass" type="password" class="form-control" placeholder="请输入密码..." />
                </div>
                <div class="inpGrounp">
                    <label for="rePass">确认密码</label>
                    <input name="rePass" type="password" class="form-control" placeholder="请再次输入密码..." />
                </div>
                <div class="inpGrounp">
                    <label for="regCode">验证码</label>
                    <input id="regCode" type="password" class="form-control" placeholder="请输入验证码..." />
                    <a class="sCode">发送验证码</a>
                </div>
                <button class="ComRegBtn" type="button">确认注册</button>
                <div class="agreeBox">
                    <input type="checkbox" checked/><span>我同意遵守《男信二手车协议》</span>
                </div>
            </form>
        </div>
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
<!--<script type="text/javascript" src="/carC/Public/js/myJs.js"></script>-->
</body>
</html>