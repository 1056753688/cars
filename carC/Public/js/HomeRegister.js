$(function(){
//	var raelPath;
var code;
	//注册
	$('#closeAdvance').click(function(){
	    $('.advertisement').css({display:'none'});
	});
	$('#userRegTitle').click(function(){
	    $('.userReg input').val("");
	    $('.companyReg input').val("");
	    $('.companyReg').css({display:'none'});
	    $('#userReg').css({display:'block'});
	    $('.regTitle>a:nth-child(2)>div').css({borderBottom:'solid 1px #52ccda'});
	    $('.regTitle>a:nth-child(1)>div').css({borderBottom:'solid 1px #e5e5e5'});
	    $('.regContentBg').css({height:'620px'});
	    $('.regMessage').css({height:'510px'});
	});
	$('#CompanyRegTitle').click(function(){
	    $('.userReg input').val("");
	    $('.companyReg input').val("");
	    $('#userReg').css({display:'none'});
	    $('.companyReg').css({display:'block'});
	    $('.regTitle>a:nth-child(1)>div').css({borderBottom:'solid 1px #52ccda'});
	    $('.regTitle>a:nth-child(2)>div').css({borderBottom:'solid 1px #e5e5e5'});
	    $('.regContentBg').css({height:'810px'});
	    $('.regMessage').css({height:'710px'});
	});
	//返回顶部
	$('.returnTop').click(function(){ 
	   $('body,html').animate({ scrollTop: 0 }, 200);
	});	
	//单选框  选中进值
	$('.sexMan').click(function(){
	   $("input[name=sex1]").val("男");
	});
	$('.sexFamle').click(function(){
	    $("input[name=sex1]").val("女");
	});
	
	$(".sentCode").click(function(){ //用户短信
		code=parseInt(Math.random()*1000000);
		$(".sentCode").attr("disabled", true);
		setInterval(function () {
			$(".sentCode").attr("disabled", false);
		},3000);
		alert($("#phone").val());
		$.ajax({
			type:"post",
			url:numUrl,
			data:{
				uPhone:$(".phone").val(),
				code:code,
			},
			success:function(a){
				if(a=="手机号格式不对"){
					alert(a);
				}else{
					alert(a);
				}
			}
		});
	});
	$(".sCode").click(function(){  // 商家短信
		code=parseInt(Math.random()*1000000);
		$(".sCode").attr("disabled", true);
		setInterval(function () {
			$(".sCode").attr("disabled", false);
		},3000);
		
		$.ajax({
			type:"post",
			url:numUrl,
			data:{
				uPhone:$("input[name=phoneNum]").val(),
				code:code,
			},
			success:function(a){
				if(a=="手机号格式不对"){
					alert(a);
				}else{
					alert(a);
				}
			}
		});
	});
	$(".PerRegBtn").click(function(){ //个人注册
		if($("input[name=userPass]").val()!=$("input[name=userSure]").val()){
			alert("两次密码不一样");
			die();
		}
		if(code!=$("input[name=userRegCode]").val()){
			alert("验证码错误");
			die();
		}
		$.ajax({
			type:"post",
			url:Url,
			data:{
				uPhone:$("input[name=userPhone]").val(),
				uName:$("input[name=realName]").val(),
				uPass:$("input[name=userPass]").val(),
				uSex:$("input[name=sex1]").val(),
				uRole:$("input[name=RegisterRole]").val(),
			},
			success:function(a){
				if(a=="信息不完整" || a=="网络发生错误，请重新填写信息" || a=="该手机号已被注册"|| a=="手机号格式不对"){
					alert(a);
				}else{
//					window.location.href=loginUrl;
				}
			}
		});
		
	})
	$(".ComRegBtn").click(function(){ //商家注册
		if($("input[name=pass]").val()!=$("input[name=rePass]").val()){
			alert("两次密码不一样");
			die();
		}
		if(code!=$("#regCode").val()){
			alert("验证码错误");
			die();
		}
		$.ajax({
			type:"post",
			url:compUrl,
			data:$(".companyReg").serialize(),
			success:function(a){
				if(a=="信息不完整" || a=="网络发生错误，请重新填写信息" ||  a=="该手机号已被使用" || a=="该用户名已被注册"){
					alert(a);
				}else{
					window.location.href=loginUrl;
				}
			}
		});
	})
		$("input[name=file1]").uploadify({ //上传图片 获取路径
			uploader : upImage,
			buttonText:"上传图片",
			swf: public+'/js/uploadify/uploadify.swf',
			width:120,
			height:30,
			auto:true,
			fileTypeDesc: "Image Files",
			fileTypeExts: "*.jpg;*.png,*.jpeg,*.gif",
			onUploadSuccess:function(file,data,response){
				$("input[name=path]").val(data);
			}
		});
	
	
	
	
	
	
})
