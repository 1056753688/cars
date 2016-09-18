$(function() {

	

	$(".presonRegister").click(function() { //个人注册
		$("input[name=role]").val("0");
		$.ajax({
			type: "post",
			url: Url,
			data: $('#form').serialize(),
			success: function(a) {
				alert(a);
			}
		});

	})

})