//打开修改页面
function openedit(id,title) {
	$.dialog({id:'inform_update'}).close();
	var url = editUrl+'&id='+id;
	$.dialog.open(url,{
		title: '修改通知'+'--'+title,
		width: 800,
		height:500,
		lock: true,
		border: false,
		id: 'inform_update',
		drag:true
	});
}

//查看详情
function detail(id,title) {
	$.dialog({id:'inform_detail'}).close();
	var url = detailUrl+'&id='+id;
	$.dialog.open(url,{
		title: '通知详情'+'--'+title,
		width: 650,
		height:350,
		lock: true,
		border: false,
		id: 'inform_detail',
		drag:true
	});
}

//多选删除
function delopt(){
	var len=$("input[name='id']:checked").size();
	var ids='';
	$("input[name='id']:checked").each(function(i, n){
		if(i<len-1){
			ids += $(n).val() + '-';
		}else{
			ids += $(n).val();
		}
	});
	if(ids=='') {
		window.top.art.dialog({content:'请选择至少一个通知',lock:true,width:'200',height:'50',border: false,time:1.5},function(){});
		return false;
	}else{
		var paraStr = 'ids='+ids;
		$.ajax({
			url: delallUrl,
			type: "post",
			dataType: "text",
			data:paraStr ,
			async: "false",
			success: function (data) {
				window.top.art.dialog({
					content: '删除成功！',
					lock: true,
					width: 250,
					height: 80,
					border: false,
					time: 2
				}, function () {
				});
				$('#pageForm').submit();
			},
			error:function(data){
				window.top.art.dialog({
					content: '删除失败！',
					lock: true,
					width: 250,
					height: 80,
					border: false,
					time: 2
				}, function () {
				});
			}
		});
	}
}

// 单一删除
function deleteInfo(id){
	var paraStr = 'id='+id;
	if (confirm('您确定要删除这个通知吗？')) {
		$.ajax({
			url: delUrl,
			type: "post",
			dataType: "text",
			data:paraStr ,
			async: "false",
			success: function (data) {
				window.top.art.dialog({
					content: '删除成功！',
					lock: true,
					width: 250,
					height: 80,
					border: false,
					time: 2
				}, function () {
				});
				$('#pageForm').submit();
			},
			error:function(data){
				window.top.art.dialog({
					content: '删除失败！',
					lock: true,
					width: 250,
					height: 80,
					border: false,
					time: 2
				}, function () {
				});
			}
		});
	}
}