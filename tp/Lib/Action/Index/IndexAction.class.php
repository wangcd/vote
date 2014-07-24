<?php
class IndexAction extends Action {
    public function index(){
    	$title=D('Title');
		$this->t=$title->title();
		$option=D('Option');
		$this->o=$option->option($this->t['t_id']);
		$b=$option->soption($this->t['t_id']);
		$this->flag=$b;
		$this->display();
    }
    public function vote(){
    	$id=$this->_post('radio');
    	$option=M('Option');
    	$flag=$option->where("o_id=$id")->setInc("o_count",1);
    	if($flag==false){ $this->error();}
    	else{ $this->success();}
    }
}