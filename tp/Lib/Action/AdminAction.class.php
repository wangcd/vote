<?php

class AdminAction extends Action{

    function index() {
    	$titie=D('Title');
    	$this->t=$titie->titles();
    	$this->display();
    }
    function top(){
    	$id=$this->_param(2);
		$title=M('Title');
		$flag=$title->where("t_state='1'")->setField("t_state","0");
		if($flag==false){ $this->error();}
    	else{
    		$flag=$title->where("t_id=$id")->setField("t_state","1");
    		if($flag==false){ $this->error();}
    		else{ $this->success();}
		}
    }
    function info(){
    	$id=$this->_param(2);
		$title=M('title');
		$this->t=$title->where("t_id=$id")->find();
		$option=D('Option');
		$this->o=$option->option($id);
		$this->display();
    }
    function delete(){
		$id=$this->_param(2);
		$option=M('Option');
		$flag=$option->where("o_id=$id")->setField("o_state","0");
		if($flag==false){ $this->error();}
    	else{ $this->success();}
    }
    function add_option(){}
    function add_title(){}
}
?>