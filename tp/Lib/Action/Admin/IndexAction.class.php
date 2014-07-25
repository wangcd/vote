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
		$user=M('user');
		$res=$user->where($arr)->find();
		if($res==false){ $this->error('用户不存在！');}
		else if($res["state"]!=1){ $this->error('用户状态异常！');}
		else if($res["upwd"]!=md5($_POST["upwd"])){ $this->error('密码输入错误！');}
		else{
			$_SESSION['uname']	=	$res['uname'];
			$this->success('登陆验证成功！',U('Vote/main'));
		}
	}
	function loginout(){
		session_destroy();
		$this->success('退出管理成功！', U('Index/index'));
	}
}
?>