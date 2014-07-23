<?php if (!defined('THINK_PATH')) exit();?><h1>投票管理</h1>
<table>
	<?php if(is_array($t)): foreach($t as $key=>$title): ?><tr>
		<td><a href="__URL__/info/<?php echo ($title["t_id"]); ?>"><?php echo ($title["t_name"]); ?></a></td>
		<td><input type="button" value="置顶" onclick="window.location='__URL__/top/<?php echo ($title["t_id"]); ?>'"></td>
	</tr><?php endforeach; endif; ?>
</table>