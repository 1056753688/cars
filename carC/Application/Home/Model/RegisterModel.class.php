<?php

namespace Home\Model;
use Think\Model;

class RegisterModel extends Model{ //注册model
	
	 
	public function Num(){ //短信
		$res=preg_match('#^13[\d]{9}$|14^[0-9]\d{8}|^15[0-9]\d{8}$|^17[0-9]\d{8}$|^18[0-9]\d{8}$#',$_REQUEST['uPhone'])?"":"手机号格式不对";
		
			if($res!=null){
				return $res;
				die;
			}else{
				$model =new \Home\Model\SendMsnModel();
				$model->s("fa");
//				$result=send_sms($_REQUEST['uPhone'],'单发测试短信');
					//一次发送多个手机号：$result=send_sms('13355556666,18899990000,15288889999','群发测试短信')
//					if($result['state']){
//						return "发送成功";
//					}else{
//						//发送失败，输出失败消息
//						echo $result['msg'];
//					}
				die;
			}
		}
	
	public function index(){ //个人注册模块
		$database = M("Users");
		if($_REQUEST['uPhone']==null || $_REQUEST['uName']==null|| $_REQUEST['uPass']==null || $_REQUEST['uRole']==null || $_REQUEST['uSex']==null || $_REQUEST['uRole']==null ){
			return "信息不完整";
			die;
		}
		$select=$database->where(array('username'=>$_REQUEST['uPhone']))->find();
		if($select!=null){
			return "该手机号已被注册";
			die;
		}
		$database->startTrans();
		$data=array(
			'username'=>$_REQUEST['uPhone'],
			'password'=>md5($_REQUEST['uPass']),
			'role'=>$_REQUEST['uRole'],
		);
		if($data['username']==null || $data['password']==null || $data['role']==null){
		           $database->rollback();
				   return '网络发生错误，请重新填写信息';
				   die;
		        }else{
				$id=$database->data($data)->add();
				$personMessage = M("person_message");
				$personInfo=array(
					'users_id'=>$id,
					'sex'=>$_REQUEST['uSex'],
					'name'=>$_REQUEST['uName'],
				);    
				$select=$personMessage->data($personInfo)->add();
				$query=$database->where(array('id'=>$select))->find();
		        $database->commit();
					return $query;
		         }
	}
	public function companyRegister(){ //商家注册模块
		if($_REQUEST['pass']==null || $_REQUEST['preside']==null || $_REQUEST['shopNum']==null || $_REQUEST['path']==null || $_REQUEST['cont']==null || $_REQUEST['RegisterRole']==null|| $_REQUEST['phoneNum']==null || $_REQUEST['companyName']==null || $_REQUEST['address']==null || $_REQUEST['RegisterRole']==null ){
			return "信息不完整";
			die;
		}
		$database = M("Users");
		$dataC = M("trade_info");
		$select=$database->where(array('username'=>$_REQUEST['cont']))->find();
		if($select!=null){
			return "该用户名已被注册";
			die;
		}
		$selectPhone=$dataC->where(array('phone'=>$_REQUEST['phoneNum']))->find();
		if($selectPhone!=null){
			return "该手机号已被使用";
			die;
		}
		$database->startTrans();
		$data=array(
			'username'=>$_REQUEST['cont'],
			'password'=>md5($_REQUEST['pass']),
			'role'=>$_REQUEST['RegisterRole'],
		);
		if($data['username']==null || $data['password']==null || $data['role']==null){
		           $database->rollback();
				   return '网络发生错误，请重新填写信息';
				   die;
		        }else{
				$id=$database->data($data)->add();
				
				$tradeInfo = M("trade_info");
				$comInfo=array(
					'users_id'=>$id,
					'address'=>$_REQUEST['address'],
					'license_img'=>$_REQUEST['path'],
					'business_license'=>$_REQUEST['shopNum'],
					'responsible_people'=>$_REQUEST['preside'],
					'phone'=>$_REQUEST['phoneNum'],
					'company'=>$_REQUEST['companyName'],
				);    
				$select=$tradeInfo->data($comInfo)->add();
				$query=$database->where(array('id'=>$select))->find();
		        $database->commit();
					return $query;
		         }
	}
	
	
}
