	$(function(){
	
						$(".delete").click(function(){
							var s=$(this).attr("href");
							var a=s.substr(13,s.length-13);
							console.log(URL);
							console.log(a);
							
//							$(this).parent().parent().remove();
//							$.post(URL,{id:a},function(a){
//								if(a=="1"){
//									alert("删除成功");
//								}
//							});
						});

	})