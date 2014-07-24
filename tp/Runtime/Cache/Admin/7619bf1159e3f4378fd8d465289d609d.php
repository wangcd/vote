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
	});
})
</script>
</head>
<body>
<table border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
	<tr><form method="post" action="__URL__/update_t/<?php echo ($t["t_id"]); ?>"><td colspan="3" bgcolor="#FFFFCC" align="center"><input type="text" name="t_name" value="<?php echo ($t["t_name"]); ?>"></td><td><input type="submit" value="修改标题"></td></form></tr>
	<tr><td>编号</td><td>选项</td><td>票数</td><td>操作</td></tr>
	<?php if(is_array($o)): foreach($o as $key=>$option): ?><tr>
		<td><?php echo ($option["o_id"]); ?></td>
		<td><?php echo ($option["o_name"]); ?></td>
		<td><?php echo ($option["o_count"]); ?>票</td>
		<td><input type="button" value="删除" onclick="window.location='__URL__/delete/<?php echo ($option["o_id"]); ?>'"><input type="button" class="edit" value="修改"></td>
	</tr><?php endforeach; endif; ?>
	<tr><form method="post" action="__URL__/add_option"><td colspan="5" align="center"><input type="text" name="o_name"><input type="hidden" name="t_id" value="<?php echo ($t["t_id"]); ?>"><input type="submit" value="添加选项"></td></form></tr>
	<tr><td colspan="4"><input type="button" value="退出管理"><a href="__URL__/main">返回</a></td></tr>
</table>
<table id="edit" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
	<tr><td>标题</td><td><input type="text"></td></tr>
	<tr><td>票数</td><td><input type="text"></td></tr>
	<tr><td colspan="2" align="center"><input type="button" value="修改"></td></tr>
</table>
</body>
</html>