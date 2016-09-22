<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {
	
//	public function index (){
//		$data = new \Home\Model\UsersModel();
//		$select =$data->index();
//		echo $select;
//		
//	}
	
	public function index(){
		$this->display();
	}
	
	public function loginModel(){
		$model =new \Home\Model\UsersModel();
		$query=$model->index();
		if($query==null){
			echo "1";
		}
		else{
			session("uName",$query['username']);
			echo "2";
		}
	}
}
