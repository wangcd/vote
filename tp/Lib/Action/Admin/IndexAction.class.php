<?php
class IndexAction extends Action{
	function index(){
		$this->display();
	}
	function checklogin(){
		if(empty($_POST['uname'])) {
			$this->error('帐号错误！');
		}elseif (empty($_POST['upwd'])){
			$this->error('密码必须！');
		}
		$arr=array();
		$arr["uname"]=$_POST['uname'];
		$arr["upwd"]=md5($_POST['upwd']);
		$user=M('user');
		$res=$user->where($arr)->find();
		if($res==false){ $this->error('登陆验证失败！');}
		else{ $this->success('登陆验证成功！',U('Index/main'));}
	}
    function main() {
    	$titie=D('Title');
    	$this->t=$titie->titles();
    	$this->display();
    }
    function top(){
    	$id=$this->_param(3);
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
    	$id=$this->_param(3);
		$title=M('title');
		$this->t=$title->where("t_id=$id")->find();
		$option=D('Option');
		$this->o=$option->option($id);
		$this->display();
    }
    function delete(){
		$id=$this->_param(3);
		$option=M('Option');
		$flag=$option->where("o_id=$id")->setField("o_state","0");
		if($flag==false){ $this->error();}
    	else{ $this->success();}
    }
    function add_option(){}
    function add_title(){}
}
?>