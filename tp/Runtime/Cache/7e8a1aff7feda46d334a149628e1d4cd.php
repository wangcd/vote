<?php if (!defined('THINK_PATH')) exit();?><h1>投票标题详细信息</h1>
<h2>投票标题：<?php echo ($t["t_name"]); ?></h2>
<form method="post" action="<?php echo U('Index/vote');?>"><!-- __URL__/vote -->
	<table>
		<?php if(is_array($o)): foreach($o as $key=>$option): ?><tr>
			<td><?php echo ($option["o_name"]); ?></td>
			<td><?php echo ($option["o_count"]); ?>票</td>
			<td><input type="button" value="删除" onclick="window.location='__URL__/delete/<?php echo ($option["o_id"]); ?>'"></td>
		</tr><?php endforeach; endif; ?>
	</table>
	<input type="button" value="返回" onclick="window.location='__URL__/index'">
	<input type="button" value="添加" onclick="window.location='__URL__/add_option/<?php echo ($t["t_id"]); ?>'">
</form>