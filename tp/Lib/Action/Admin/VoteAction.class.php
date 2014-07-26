<?php
class VoteAction extends Action{
	protected function _initialize(){
		if(!session('?uname')){
			$this->error('非法操作！',U('Index/index'));
		}
	}
	function index(){
		$this->display();
	}
	//显示投票标题
    function main() {
    	$titie=D('Title');
    	$this->t=$titie->titles();
    	$this->display();
    }
    //设置此选项为当前选项
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
    //显示每个投票标题的详细信息
    function info(){
    	$id=$this->_param(3);
		$title=M('title');
		$this->t=$title->where("t_id=$id")->find();
		$option=D('Option');
		$this->o=$option->option($id);
		$this->display();
    }
    //删除选项
    function delete(){
		$id=$this->_param(3);
		$option=M('Option');
		$flag=$option->where("o_id=$id")->setField("o_state","0");
		if($flag==false){ $this->error();}
    	else{ $this->success();}
    }
    //添加选项
    function add_option(){
    	$date["t_id"]=$_POST["t_id"];
    	$date["o_name"]=$_POST["o_name"];
    	$option=M('option');
    	if($option->add($date)==false){
    		$this->error("添加失败！");
    	}else{ $this->success("添加成功！");}
    }
	//修改标题
    function update_t(){
    	$t_id=$this->_param(3);
    	$t_name=$_POST["t_name"];
    	$title=M('title');
    	$aa=$title->where("t_id=$t_id")->setField("t_name","$t_name");
    	if($aa==false){
    		$this->error();
    	}else{ $this->success();}
    }
    //修改选项
    function update_o(){
    	$date["o_name"]=$_POST["e_option"];
    	$date["o_count"]=$_POST["e_count"];
    	$id=$_POST["e_id"];
    	$option=M('option');
    	$aa=$option->where("o_id=$id")->save($date);
    	if($aa==false){
    		$this->error();
    	}else{ $this->success();}
    }
}
?>