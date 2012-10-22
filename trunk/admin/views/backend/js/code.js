var Cr = {
	//状态非检测表单提交
	submitbutton: function(btnAction){
		$("#btnAction").val(btnAction);
		$("#action").submit();
	},
	//状态检测表单提交
	submitchkbutton: function(btnAction) {
		if($('#boxChecked').val()==0||$('#boxChecked').val()==""){
			alert('请从列表中选择操作列');
		}
		else{
			$("#btnAction").val(btnAction);
			$("#action").submit();
		}
	},
	//列全选全不选
	chkall: function(){
		if($("input[name='chkall']").attr("checked")){
			$("#boxChecked").val(1);
			$("input[name='checked']").attr("checked",true);
		}else{
			$("#boxChecked").val(0);
			$("input[name='checked']").attr("checked",false);
		}
	},
	//列选中状态检测
	checkstate: function(){
		var checkstate=0;
		$("input[name='checked']").each(function(){
			if($(this).attr("checked")){
				checkstate=1;
				$("#boxChecked").val(1);
				return false;
			}
		});
		if(checkstate==0){
			$("#boxChecked").val(0);
		}
	}
};
In.ready(function(){
	//单列选取值改变 
	$("input[name='checked']").bind('click',function(){
		Cr.checkstate();
	}); 
});