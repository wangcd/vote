<?php if (!defined('THINK_PATH')) exit();?><h1>投票后台登陆</h1>
<form method="post" action="__URL__/checklogin">
	用户名：<input type="text" name="uname"><br/>
	密  码：<input type="password" name="upwd"><br/>
	<input type="submit" value="登陆">
</form>