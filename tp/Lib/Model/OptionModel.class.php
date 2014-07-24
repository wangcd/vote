<?php

class OptionModel extends Model{

    function option($id) {
    	$option=M('option');
    	$res=$option->where("t_id=$id and o_state='1'")->select();
    	return $res;
    }
}
?>