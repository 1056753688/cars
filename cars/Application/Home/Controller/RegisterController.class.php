<?php
namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller {
	
//	public function index (){
//		$data = new \Home\Model\UsersModel();
//		$select =$data->index();
//		echo $select;
//		
//	}
	
	public function index(){
		$this->display();
	}
	
	public function PersonRegister(){
		$database = new \Home\Model\RegisterModel();
		$res =$database->index();
		if($res=="信息不完整" || $res=="网络发生错误，请重新填写信息" || $res=="该手机号已被注册"){
			echo $res;
		}
		else{
			session("uName",$res['username']);
			echo "1"; 
		}
	}
	public function companyRegister(){
		$database = new \Home\Model\RegisterModel();
		$res =$database->companyRegister();
		if($res=="信息不完整" || $res=="网络发生错误，请重新填写信息" || $res=="该手机号已被注册"){
			echo $res;
		}
		else{
			session("uName",$res['username']);
			echo "1"; 
		}
		
	}
	public function upImage(){
		$database = new \Home\Model\upImageModel();
		$res =$database->image();
		echo $res;
		
	}
	
}
