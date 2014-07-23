<?php

class TitleModel extends Model{

    public function title() {
		$title=M('title');
		$res=$title->where("t_state='1'")->find();
		return $res;
    }
    public function titles() {
		$title=M('title');
		$res=$title->select();
		return $res;
    }
}
?>