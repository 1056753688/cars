$.extend(
	{
		
	'dialog':function(a){
			var div0=$("<div>");
			div0.attr('class','modal');
			div0.attr('id','mi');
			$('body').append(div0);
			
			var div1=$("<div>");
			div1.attr('class','modal-dialog');
			$(div0).append(div1);
			
			var div2=$("<div>");
			div2.attr('class','modal-content');
			$(div1).append(div2);
			
			var div3=$("<div>");
			div3.attr('class','modal-header');
			div3.html("消息");
			$(div2).append(div3);
			
			var div4=$("<div>");
			div4.attr('class','modal-body');
			div4.html(a);
			$(div2).append(div4);
			
			var div5=$("<div>");
			div5.attr('class','modal-footer');
			$(div2).append(div5);
			
			var div6=$("<button>");
			div6.attr('class','btn btn-default');
			div6.attr('data-dismiss','modal')
			div6.html("确定");
			$(div5).append(div6);
			
	}
	}
);