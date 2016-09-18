$(function(){
	console.log($(".uName").attr("href").length);
	if($(".uName").attr("href").length>=2){
		$(".username").css("display","block");
		$(".loginLink").css("display","none");
		$(".regLink").css("display","none");
	}
	
	if($(".uName").attr("href").length<2){
		$(".username").css("display","none");
		$(".loginLink").css("display","block");
		$(".regLink").css("display","block");
	}
	
})

