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
<form method="post" action="__URL__/checklogin">
	<table width="265" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
		<tr><th bgcolor="#FFFFCC" align="center">登陆投票后台</th></tr>
		<tr><td>用户名：<input type="text" name="uname"></td></tr>
		<tr><td>密&nbsp;&nbsp;&nbsp;码：<input type="password" name="upwd"></td></tr>
		<tr>
			<td align="center"><input type="submit" value="登陆"><a href="<?php echo U('Index/Index/index');?>">返回首页</a></td>
		</tr>
	</table>
</form>
</body>
</html>