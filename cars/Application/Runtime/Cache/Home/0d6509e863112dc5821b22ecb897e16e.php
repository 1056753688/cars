<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>南鑫二手车</title>
    <link rel="stylesheet" href="/cars/Public/css/style.css" />
    <link href="/cars/Public/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/cars/Public/js/nivo/nivo-slider.css" rel="stylesheet">
    <link href="/cars/Public/js/nivo/themes/default/default.css" rel="stylesheet">
    <script src="/cars/Public/css/bootstrap/js/jquery-1.11.1.min.js"></script>
    <script src="/cars/Public/js/HomeLogin.js" type="text/javascript" charset="utf-8"></script>
    <script src="/cars/Public/css/bootstrap/js/bootstrap.min.js"></script>
    <script src="/cars/Public/js/nivo/jquery.nivo.slider.js"></script>
    <script src="/cars/Public/js/myJs.js"></script>
</head>
<body>
<div class="scrollBtn">
    <button>在线咨询</button>
    <button>在线地图</button>
    <button class="returnTop"><img src="/cars/Public/imgs/top.png" /></button>
</div>
    <div class="header">
        <div class="helloWord">
            <span>欢迎光临南鑫二手车！</span>
            <div class="rightMessage">
                <ul class="userUl">
                    <li><div class="imgHead"><img src="/cars/Public/imgs/gg.jpg" /></div></li>
                    <li class="username"><a href="?<?php echo ($username); ?>" class="uName"><?php echo ($username); ?></a></li>
                    <li><a href="#" class="loginLink" style="display: block;">登录</a></li>
                    <li><a href="<?php echo U("Register/index");?>" class="regLink" style="display: block;">注册</a></li>
                    <li><div class="dvdLogin"></div></li>
                    <li><p>预约热线:010-111111111</p></li>
                </ul>
            </div>
            <div class="contacTime">09:00-19:00(节假日除外)</div>
        </div>
        <div class="headNav">
            <div class="logo">
                <a href="home.html"><img src="/cars/Public/imgs/logo.png"/></a>
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
    <div class="slider">
        <div id="page" class="slider-wrapper theme-default">
            <div class="nivoSlider">
                <img src="/cars/Public/imgs/slider1.jpg" data-thumb="../imgs/slider1.jpg"  data-transition="fold" />
                <img src="/cars/Public/imgs/slider2.jpg" data-thumb="../imgs/slider2.jpg"  data-transition="fold" />
                <img src="/cars/Public/imgs/slider3.jpg" data-thumb="../imgs/slider3.jpg"  data-transition="fold" />
            </div>
        </div>
    </div>
    <div class="slideContent">
        <div class="leftBtns">
            <a href=""><div class="slidBtn">交易过户</div></a>
            <a href=""><div class="slidBtn">金融保险</div></a>
            <a href=""><div class="slidBtn">拍卖寄卖</div></a>
            <a href=""><div class="slidBtn">代办年审</div></a>
            <a href=""><div class="slidBtnd">汽车养护</div></a>
        </div>
        <div class="searchGroup">
            <form>
                <input placeholder="请输入您感兴趣的品牌、车系..." />
                <button class="searchBtn">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </form>
            <div class="simpleWord">
                <p>预约过户</p>
                <p>交易过户代理服务</p>
                <p>VIP通道</p>
                <p>预约电话 : 0816-6395126</p>
            </div>
        </div>
    </div>
    <div class="saleCarsBg">
        <div class="conWidth">
            <div class="leftSelect">
                <div class="carTitle">
                    <img src="/cars/Public/imgs/fiveStart.png"/>
                    <select class="brandSel">
                        <option>品牌</option>
                        <option>大众</option>
                        <option>宝马</option>
                    </select>
                </div>
                <div class="choose">
                    <div class="carLogo">
                        <img src="/cars/Public/imgs/brand/logo_03.png"/>
                        <a>大众</a>
                    </div>
                    <div class="carLogo">
                        <img src="/cars/Public/imgs/brand/logo_07.png"/>
                        <a>宝马</a>
                    </div>
                    <div class="carLogo">
                        <img src="/cars/Public/imgs/brand/logo_05.png"/>
                        <a>奥迪</a>
                    </div>
                </div>
                <div class="carTitle">
                    <img src="/cars/Public/imgs/fiveStart.png"/>
                    <span>价格</span>
                    <div class="choose overDown">
                        <a>3万以下</a>
                        <a>3-5万</a>
                        <a>5-8万</a>
                    </div>
                </div>
                <div class="carTitle">
                    <img src="/cars/Public/imgs/fiveStart.png"/>
                    <span>车型</span>
                    <div class="choose overDown">
                        <a>微型车</a>
                        <a>小型车</a>
                        <a>紧凑型车</a>
                        <a>中型车</a>
                    </div>
                </div>

                <div class="carTitle">
                    <img src="/cars/Public/imgs/fiveStart.png"/>
                    <span>年龄</span>
                    <div class="choose overDown">
                        <a>1年以内</a>
                        <a>2年以内</a>
                        <a>3年以内</a>
                    </div>
                </div>

                <div class="carTitle">
                    <img src="/cars/Public/imgs/fiveStart.png"/>
                    <span>其他</span>
                    <div class="choose overDown">
                        <select>
                            <option>车龄</option>
                            <option>1年</option>
                        </select>
                        <select>
                            <option>国别</option>
                            <option>1年</option>
                        </select>
                        <select>
                            <option>里程</option>
                            <option>1年</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="rightBuy">
                <div class="upBuy">
                    <p><img src="/cars/Public/imgs/radio.png"> 高级评估师免费股价</p>
                    <p><img src="/cars/Public/imgs/radio.png"> 线上和线下同步销售</p>
                    <p><img src="/cars/Public/imgs/radio.png"> 一站式办理交易过户</p>
                </div>
                <div class="buyCarBtn">
                    <button class="wantCar">我要卖车</button>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="topContent">
            <div class="recommend">
                <div class="recodTitle">
                    <h3>推荐车辆</h3>
                    <a>more <img class="findMore" src="/cars/Public/imgs/more.png"/></a>
                </div>
                <div class="scrollPic">
                    <a id="tunLeft"><div class="turnLeft"></div></a>
                    <div class="mainBorder">
                        <div class="main">
                            <img src="/cars/Public/imgs/data/22.png" />
                            <img src="/cars/Public/imgs/data/33.png" />
                            <img src="/cars/Public/imgs/data/44.png" />
                            <img src="/cars/Public/imgs/data/55.png" />
                            <img src="/cars/Public/imgs/gg.jpg" />
                            <img src="/cars/Public/imgs/data/44.png" />
                        </div>
                    </div>
                    <a id="tunRight"><div class="turnRight"></div></a>
                </div>
                <p><a class="allRemer">查看全部商家<img class="findMore" src="/cars/Public/imgs/more.png"/></a></p>
            </div>
            <div class="joinCompany">
                <button class="joinBtn">加入二手车商家</button>
            </div>
            <div class="southPush">
                <h3>南鑫推荐</h3>
                <div class="pushTitle">
                    <a>新品上架</a>
                    <a>降价急售</a>
                    <a>准新车</a>
                    <a>品牌认证</a>
                    <a>MPV/SUV</a>
                </div>
                <a>more <img class="findMore" src="../imgs/more.png"/></a>
            </div>
        </div>
        <div class="manyCars">
            <div class="thisBorder">
                <div class="imgTop">
                    <img src="/cars/Public/imgs/shop/10.jpg" />
                </div>
                <div class="simplePrice">
                    <h3>哈弗H6 2014款 运动版1.5T</h3>
                    <p>2013/6上牌 11.00万公里</p>
                    <div class="prize">
                        <span>￥</span><h3>13.00</h3><span>万</span>
                    </div>
                    <h5>发布时间:2016-03-25</h5>
                    <div class="twoShang">
                        <div>商</div>
                        <div>审</div>
                    </div>
                </div>
                <div class="Remafooter">
                    <input type="checkbox" /><span class="joinCompare">加入对比</span>
                    <img src="/cars/Public/imgs/starWhite.png" /> <span class="getin">加入收藏</span>
                </div>
            </div>
            <div class="thisBorder">
                <div class="imgTop">
                    <img src="/cars/Public/imgs/shop/10.jpg" />
                </div>
                <div class="simplePrice">
                    <h3>哈弗H6 2014款 运动版1.5T</h3>
                    <p>2013/6上牌 11.00万公里</p>
                    <div class="prize">
                        <span>￥</span><h3>13.00</h3><span>万</span>
                    </div>
                    <h5>发布时间:2016-03-25</h5>
                    <div class="twoShang">
                        <div>商</div>
                        <div>审</div>
                    </div>
                </div>
                <div class="Remafooter">
                    <input type="checkbox" /><span class="joinCompare">加入对比</span>
                    <img src="/cars/Public/imgs/starWhite.png" /> <span class="getin">加入收藏</span>
                </div>
            </div>
            <div class="thisBorder">
                <div class="imgTop">
                    <img src="/cars/Public/imgs/shop/10.jpg" />
                </div>
                <div class="simplePrice">
                    <h3>哈弗H6 2014款 运动版1.5T</h3>
                    <p>2013/6上牌 11.00万公里</p>
                    <div class="prize">
                        <span>￥</span><h3>13.00</h3><span>万</span>
                    </div>
                    <h5>发布时间:2016-03-25</h5>
                    <div class="twoShang">
                        <div>商</div>
                        <div>审</div>
                    </div>
                </div>
                <div class="Remafooter">
                    <input type="checkbox" /><span class="joinCompare">加入对比</span>
                    <img src="/cars/Public/imgs/starWhite.png" /> <span class="getin">加入收藏</span>
                </div>
            </div>
            <div class="thisBorder">
                <div class="imgTop">
                    <img src="/cars/Public/imgs/shop/10.jpg" />
                </div>
                <div class="simplePrice">
                    <h3>哈弗H6 2014款 运动版1.5T</h3>
                    <p>2013/6上牌 11.00万公里</p>
                    <div class="prize">
                        <span>￥</span><h3>13.00</h3><span>万</span>
                    </div>
                    <h5>发布时间:2016-03-25</h5>
                    <div class="twoShang">
                        <div>商</div>
                        <div>审</div>
                    </div>
                </div>
                <div class="Remafooter">
                    <input type="checkbox" /><span class="joinCompare">加入对比</span>
                    <img src="/cars/Public/imgs/starWhite.png" /> <span class="getin">加入收藏</span>
                </div>
            </div>
            <div class="thisBorder">
                <div class="imgTop">
                    <img src="/cars/Public/imgs/shop/10.jpg" />
                </div>
                <div class="simplePrice">
                    <h3>哈弗H6 2014款 运动版1.5T</h3>
                    <p>2013/6上牌 11.00万公里</p>
                    <div class="prize">
                        <span>￥</span><h3>13.00</h3><span>万</span>
                    </div>
                    <h5>发布时间:2016-03-25</h5>
                    <div class="twoShang">
                        <div>商</div>
                        <div>审</div>
                    </div>
                </div>
                <div class="Remafooter">
                    <input type="checkbox" /><span class="joinCompare">加入对比</span>
                    <img src="/cars/Public/imgs/starWhite.png" /> <span class="getin">加入收藏</span>
                </div>
            </div>
            <div class="thisBorder">
                <div class="imgTop">
                    <img src="/cars/Public/imgs/shop/10.jpg" />
                </div>
                <div class="simplePrice">
                    <h3>哈弗H6 2014款 运动版1.5T</h3>
                    <p>2013/6上牌 11.00万公里</p>
                    <div class="prize">
                        <span>￥</span><h3>13.00</h3><span>万</span>
                    </div>
                    <h5>发布时间:2016-03-25</h5>
                    <div class="twoShang">
                        <div>商</div>
                        <div>审</div>
                    </div>
                </div>
                <div class="Remafooter">
                    <input type="checkbox" /><span class="joinCompare">加入对比</span>
                    <img src="/cars/Public/imgs/starWhite.png" /> <span class="getin">加入收藏</span>
                </div>
            </div>
            <div class="thisBorder">
                <div class="imgTop">
                    <img src="/cars/Public/imgs/shop/10.jpg" />
                </div>
                <div class="simplePrice">
                    <h3>哈弗H6 2014款 运动版1.5T</h3>
                    <p>2013/6上牌 11.00万公里</p>
                    <div class="prize">
                        <span>￥</span><h3>13.00</h3><span>万</span>
                    </div>
                    <h5>发布时间:2016-03-25</h5>
                    <div class="twoShang">
                        <div>商</div>
                        <div>审</div>
                    </div>
                </div>
                <div class="Remafooter">
                    <input type="checkbox" /><span class="joinCompare">加入对比</span>
                    <img src="/cars/Public/imgs/starWhite.png" /> <span class="getin">加入收藏</span>
                </div>
            </div>
            <div class="thisBorder">
                <div class="imgTop">
                    <img src="/cars/Public/imgs/shop/10.jpg" />
                </div>
                <div class="simplePrice">
                    <h3>哈弗H6 2014款 运动版1.5T</h3>
                    <p>2013/6上牌 11.00万公里</p>
                    <div class="prize">
                        <span>￥</span><h3>13.00</h3><span>万</span>
                    </div>
                    <h5>发布时间:2016-03-25</h5>
                    <div class="twoShang">
                        <div>商</div>
                        <div>审</div>
                    </div>
                </div>
                <div class="Remafooter">
                    <input type="checkbox" /><span class="joinCompare">加入对比</span>
                    <img src="/cars/Public/imgs/starWhite.png" /> <span class="getin">加入收藏</span>
                </div>
            </div>
            <div class="thisBorder">
                <div class="imgTop">
                    <img src="/cars/Public/imgs/shop/10.jpg" />
                </div>
                <div class="simplePrice">
                    <h3>哈弗H6 2014款 运动版1.5T</h3>
                    <p>2013/6上牌 11.00万公里</p>
                    <div class="prize">
                        <span>￥</span><h3>13.00</h3><span>万</span>
                    </div>
                    <h5>发布时间:2016-03-25</h5>
                    <div class="twoShang">
                        <div>商</div>
                        <div>审</div>
                    </div>
                </div>
                <div class="Remafooter">
                    <input type="checkbox" /><span class="joinCompare">加入对比</span>
                    <img src="/cars/Public/imgs/starWhite.png" /> <span class="getin">加入收藏</span>
                </div>
            </div>
            <div class="thisBorder">
                <div class="imgTop">
                    <img src="/cars/Public/imgs/shop/10.jpg" />
                </div>
                <div class="simplePrice">
                    <h3>哈弗H6 2014款 运动版1.5T</h3>
                    <p>2013/6上牌 11.00万公里</p>
                    <div class="prize">
                        <span>￥</span><h3>13.00</h3><span>万</span>
                    </div>
                    <h5>发布时间:2016-03-25</h5>
                    <div class="twoShang">
                        <div>商</div>
                        <div>审</div>
                    </div>
                </div>
                <div class="Remafooter">
                    <input type="checkbox" /><span class="joinCompare">加入对比</span>
                    <img src="/cars/Public/imgs/starWhite.png" /> <span class="getin">加入收藏</span>
                </div>
            </div>
            <div class="thisBorder">
                <div class="imgTop">
                    <img src="/cars/Public/imgs/shop/10.jpg" />
                </div>
                <div class="simplePrice">
                    <h3>哈弗H6 2014款 运动版1.5T</h3>
                    <p>2013/6上牌 11.00万公里</p>
                    <div class="prize">
                        <span>￥</span><h3>13.00</h3><span>万</span>
                    </div>
                    <h5>发布时间:2016-03-25</h5>
                    <div class="twoShang">
                        <div>商</div>
                        <div>审</div>
                    </div>
                </div>
                <div class="Remafooter">
                    <input type="checkbox" /><span class="joinCompare">加入对比</span>
                    <img src="/cars/Public/imgs/starWhite.png" /> <span class="getin">加入收藏</span>
                </div>
            </div>
            <div class="thisBorder">
                <div class="imgTop">
                    <img src="/cars/Public/imgs/shop/10.jpg" />
                </div>
                <div class="simplePrice">
                    <h3>哈弗H6 2014款 运动版1.5T</h3>
                    <p>2013/6上牌 11.00万公里</p>
                    <div class="prize">
                        <span>￥</span><h3>13.00</h3><span>万</span>
                    </div>
                    <h5>发布时间:2016-03-25</h5>
                    <div class="twoShang">
                        <div>商</div>
                        <div>审</div>
                    </div>
                </div>
                <div class="Remafooter">
                    <input type="checkbox" /><span class="joinCompare">加入对比</span>
                    <img src="/cars/Public/imgs/starWhite.png" /> <span class="getin">加入收藏</span>
                </div>
            </div>
        </div>
    </div>
    <div class="moreDiv">
        <button class="carsMore">查看更多</button>
    </div>
    <div class="southFooter">
        <div class="contFooter">
            <div class="footerLogo">
                <img src="/cars/Public/imgs/logoWhite.png">
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
                <li><img src="/cars/Public/imgs/public.png"></li>
            </div>
            <div class="rightPhone">
                <div class="phoneNum">
                    <img src="/cars/Public/imgs/phone.png">
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
<script type="text/javascript" src="/cars/Public/js/myJs.js"></script>
<script type="text/javascript">
    $('.nivoSlider').nivoSlider({
        pauseTime:5000,
        animSpeed:100,
        manualAdvance:false,//自动播放
        directionNav:false,//左右箭头
    });
    var tunLeft = $('#tunLeft');
    var tunRight = $('#tunRight');
    var mImg = $('.main');
    var imgDex = $('.main img').length;/*图片数量*/
    var index = $('.main img').index();/*图片第几张*/
    /*向右*/
    $('#tunRight').click(function(){
        if(index>(imgDex%5)){
            index = 0;
            mImg.stop(true).animate({left:-167*index},200);
        }else {
            index+=1;
            mImg.stop(true).animate({left:-167*index},400);
            console.log(index);
        }
    });
    /*向左*/
    $('#tunLeft').click(function(){
        var i = imgDex%index;
        if(i<index){
            index-=1;
            mImg.stop(true).animate({left:-167*index},400);
            while (index<0){
                index = 0;
                mImg.stop(true).animate({left:-167*index},400);
            }
        }
    });
</script>
</body>
</html>