<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>投票</title>
<head>
<style>
td{ background:#FFF; }
.two{ display:none;}
</style>
<script src="__PUBLIC__/js/jquery.js"></script>
<script>
$(function(){
	$(".show_two").click(function(){
		$(".two").css("display","block");
	});
	$(".hid_two").click(function(){
		$(".two").css("display","none");
	});
})
//验证选中
function check()
{
	node=form.radio;
	flag=false;
	for(i=0;i<node.length;i++)
	{	if(node[i].checked){	flag=true;	}}
	if(!flag){	alert("您为选择任何选项！");	return false;}
	$("form").submit();
}
</script>
</head>
<body>
<form method="post" action="<?php echo U('Index/Index/vote');?>" name="form"><!-- __URL__/vote -->
	<table width="365" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
		<tr><th colspan="3" bgcolor="#FFFFCC" align="center"><?php echo ($t["t_name"]); ?></th></tr>
		<?php if(is_array($o)): foreach($o as $key=>$option): ?><tr><td><input type="radio" name="radio" value="<?php echo ($option["o_id"]); ?>"><?php echo ($option["o_name"]); ?></td></tr><?php endforeach; endif; ?>
		<tr>
			<td align="center"><input type="button" onclick="check()" class="submit" value="投票"><input type="button" class="show_two" value="查看结果"></td>
		</tr>
	</table>
</form>
	<table class="two" width="365" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
		<tr><td>选项</td><td>票数</td><td>百分比</td></tr>
		<?php if(is_array($o)): foreach($o as $key=>$option): ?><tr><td><?php echo ($option["o_name"]); ?></td><td><?php echo ($option["o_count"]); ?></td><td>100%</td></tr><?php endforeach; endif; ?>
		<tr><td colspan="3" align="center"><input type="button" class="hid_two" value="隐藏结果"></td></tr>
	</table>
</body>
</html>