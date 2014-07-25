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
</head>
<body>
<body>
<table width="265" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
	<tr><th colspan="2" bgcolor="#FFFFCC" align="center">投票标题</th></tr>
	<?php if(is_array($t)): foreach($t as $key=>$title): ?><tr>
		<td><a href="__URL__/info/<?php echo ($title["t_id"]); ?>"><?php echo ($title["t_name"]); ?></a></td>
		<td><input type="button" value="置顶" onclick="window.location='__URL__/top/<?php echo ($title["t_id"]); ?>'"></td>
	</tr><?php endforeach; endif; ?>
	<tr><td colspan="2"><span>管理者：<?php echo (session('uname')); ?></span><a href="<?php echo U('Index/loginout');?>" style="float:right">退出管理</a></td></tr>
</table>
</body>
</html>