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
    function add_option(){
    	$date["t_id"]=$_POST["t_id"];
    	$date["o_name"]=$_POST["o_name"];
    	$option=M('option');
    	if($option->add($date)==false){
    		$this->error("添加失败！");
    	}else{ $this->success("添加成功！");}
    }
    function add_title(){}
    function update_t(){
    	$t_id=$this->_param(3);
    	$t_name=$_POST["t_name"];
    	$title=M('title');
    	$aa=$title->where("t_id=$t_id")->setField("t_name","$t_name");
    	if($aa==false){
    		$this->error();
    	}else{ $this->success();}
    }
}
?>