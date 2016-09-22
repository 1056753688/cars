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
	
	public function num(){ //新增的短信
			$res=preg_match('#^13[\d]{9}$|14^[0-9]\d{8}|^15[0-9]\d{8}$|^17[0-9]\d{8}$|^18[0-9]\d{8}$#',$_REQUEST['uPhone'])?"":"手机号格式不对";
			if($res!=null){
				echo $res;
				die;
			}else{
				$model =new \Home\Model\SendMsnModel();
				$result=$model->send_sms($_REQUEST['uPhone'],$_REQUEST['code']);
//					一次发送多个手机号：$result=send_sms('13355556666,18899990000,15288889999','群发测试短信')
					if($result['state']){
						echo "发送成功";
					}else{
						//发送失败，输出失败消息
						echo $result['msg'];
					}
				die;
			}
		}
	
	
	public function PersonRegister(){
		$database = new \Home\Model\RegisterModel();
		$res =$database->index();
		if($res=="信息不完整" || $res=="网络发生错误，请重新填写信息" || $res=="该手机号已被注册"|| $res=="手机号格式不对"){
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
		if($res=="信息不完整" || $res=="网络发生错误，请重新填写信息" || $res=="该手机号已被使用" || $res=="该用户名已被注册"){
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
