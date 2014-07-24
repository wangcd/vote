<?php

class OptionModel extends Model{

    function option($id) {
    	$option=M('option');
    	$res=$option->where("t_id=$id and o_state='1'")->select();
    	return $res;
    }
    function soption($id){
    	$option=M('option');
    	$sum=$option->where("t_id=$id and o_state='1'")->sum("o_count");
    	return (int)$sum;
    }
}
?>