<?php if (!defined('THINK_PATH')) exit();?><h1>今日投票</h1>
<h2>投票标题：<?php echo ($t["t_name"]); ?></h2>
<form method="post" action="<?php echo U('Index/vote');?>"><!-- __URL__/vote -->
	<table>
		<?php if(is_array($o)): foreach($o as $key=>$option): ?><tr>
			<td><input type="radio" name="radio" value="<?php echo ($option["o_id"]); ?>"></td>
			<td><?php echo ($option["o_name"]); ?></td>
			<td><?php echo ($option["o_count"]); ?>票</td>
		</tr><?php endforeach; endif; ?>
	</table>
<input type="submit" value="投票">
</form>