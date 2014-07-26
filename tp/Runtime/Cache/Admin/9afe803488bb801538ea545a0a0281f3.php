<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>投票</title>
<head>
<style>
td{ background:#FFF; }
.two{ display:none;}
#edit{ display:none;}
</style>
<script src="__PUBLIC__/js/jquery.js"></script>
<script>
$(function(){
	$(".edit").click(function(){
		$("#edit").css("display","block");
		$id=$(this).parent().parent().children(":first").text();
		$text=$(this).parent().parent().children(":eq(1)").text();
		$count=$(this).parent().parent().children(":eq(2)").text();
		$(".e_id").val($id);
		$(".e_option").val($text);
		$(".e_count").val($count);
		$width=$("#default").width();
		$("#edit").css("width",$width);
	});
})
</script>
</head>
<body>
<table id="default" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
	<tr><form method="post" action="__URL__/update_t/<?php echo ($t["t_id"]); ?>"><td colspan="3" bgcolor="#FFFFCC" align="center"><input type="text" name="t_name" value="<?php echo ($t["t_name"]); ?>"></td><td><input type="submit" value="修改标题"></td></form></tr>
	<tr><td>编号</td><td>选项</td><td>票数</td><td>操作</td></tr>
	<?php if(is_array($o)): foreach($o as $key=>$option): ?><tr>
		<td><?php echo ($option["o_id"]); ?></td>
		<td><?php echo ($option["o_name"]); ?></td>
		<td><?php echo ($option["o_count"]); ?></td>
		<td><input type="button" value="删除" onClick="window.location='__URL__/delete/<?php echo ($option["o_id"]); ?>'"><input type="button" class="edit" value="修改"></td>
	</tr><?php endforeach; endif; ?>
	<tr><form method="post" action="__URL__/add_option"><td colspan="5" align="center"><input type="text" name="o_name"><input type="hidden" name="t_id" value="<?php echo ($t["t_id"]); ?>"><input type="submit" value="添加选项"></td></form></tr>
	<tr><td colspan="4"><span>管理者：<?php echo (session('uname')); ?></span><a href="<?php echo U('Index/loginout');?>" style="float:right">退出管理</a><a href="__URL__/main">返回</a></td></tr>
</table>
<form method="post" action="__URL__/update_o">
<table id="edit" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
	<tr><td>标题</td><td><input type="text" name="e_option" class="e_option"></td></tr>
	<tr><td>票数</td><td><input type="text" name="e_count" class="e_count"><input type="hidden" name="e_id" class="e_id"></td></tr>
	<tr><td colspan="2" align="center"><input type="submit" value="修改"></td></tr>
</table>
</form>
</body>
</html>