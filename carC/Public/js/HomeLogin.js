$(function() {

	$(".compLogBtn").click(function() { //商家登录
//		alert($('#companyLog').serialize());
		
		$.ajax({
			type: "post",
			url: loginUrl,
			data: $('#companyLog').serialize(),
			success: function(a) {
				if(a==1){
					alert("账户或密码错误");
				}
				if(a==2){
					window.location.href=toUrl;
				}
			}
		});

	})
	$(".perlogBtn").click(function(){
//		alert($('#personLog').serialize());
		
		$.ajax({
			type: "post",
			url: loginUrl,
			data: $('#personLog').serialize(),
			success: function(a) {
				if(a==1){
					alert("账户或密码错误");
				}
				if(a==2){
					window.location.href=toUrl;
				}
			}
		});
	});

})