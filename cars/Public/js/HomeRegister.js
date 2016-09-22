$(function(){
//	var raelPath;
	//注册
	$('#closeAdvance').click(function(){
	    $('.advertisement').css({display:'none'});
	});
	$('#userRegTitle').click(function(){
		$("input[name=RegisterRole]").attr("value","0");
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
		$("input[name=RegisterRole]").attr("value","1");
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
	
	$(".PerRegBtn").click(function(){ //个人注册
		if($("input[name=userPass]").val()!=$("input[name=userSure]").val()){
			alert("两次密码不一样");
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
				if(a=="信息不完整" || a=="网络发生错误，请重新填写信息" || a=="该手机号已被注册"){
					alert(a);
				}else{
					window.location.href=toUrl;
				}
			}
		});
		
	})
	$(".ComRegBtn").click(function(){ //商家注册
		if($("input[name=pass]").val()!=$("input[name=rePass]").val()){
			alert("两次密码不一样");
			die();
		}
		$.ajax({
			type:"post",
			url:compUrl,
			data:$(".companyReg").serialize(),
			success:function(a){
				if(a=="信息不完整" || a=="网络发生错误，请重新填写信息" || a=="该手机号已被注册"){
					alert(a);
				}else{
					window.location.href=toUrl;
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
