
var template = '<div id="message" class="modal">'+
   		'<div class="modal-dialog modal-sm">'+
			'<div class="modal-content">'+
				'<div class="modal-header">'+
				'	<span class="close" data-dismiss="modal">&times;</span>'+
				'	<h4 class="modal-title">错误提示</h4>'+
				'</div>'+
		   	  	'<div class="modal-body">'+
		   	  	' 	系统错误！'+
		   	  	'</div>'+
				'<div class="modal-footer">'+
				'	<button class="btn btn-default btn-sm" data-dismiss="modal">知道了</button>'+
				'</div>'+
			'</div>'+
		'</div>'+
   	'</div>'; 
   	
	var dialog = $(template);
		
jQuery.extend({
	alert : function(title,content){
		dialog.modal('show');
	},
	message : function(title,content){
		dialog.find('.modal-title').html(title);
		dialog.find('.modal-body').html(content);
		var btnHtml = '<button class="btn btn-primary btn-sm" data-dismiss="modal">知道了</button>';
		dialog.find('.modal-footer').html(btnHtml);
		dialog.modal('show');
	},
	confirm : function(title,content){
		dialog.find('.modal-title').html(title);
		dialog.find('.modal-body').html(content);
		var btnsHtml = '<button id="confirm" class="btn btn-primary btn-sm">确定</button>'+
					   '<button class="btn btn-default btn-sm" data-dismiss="modal">取消</button>';
		dialog.find('.modal-footer').html(btnsHtml);
		dialog.modal('show');
	},
	fileinput : function(title,content){
		dialog.find('.modal-title').html(title);
		var content = '<input name="img" class="fileinput" type="file">';
		dialog.find('.modal-body').html(content);
		var btnHtml = '<button class="btn btn-default btn-sm" data-dismiss="modal">关闭</button>';
		dialog.find('.modal-footer').html(btnHtml);
		dialog.modal('show');
	}
});
