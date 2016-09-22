<?php

namespace Home\Model;
use Think\Model;

class RegisterModel extends Model{
	
	public function index(){
		$database = M("Users");
		if($_REQUEST['uPhone']==null || $_REQUEST['uName']==null|| $_REQUEST['uPass']==null || $_REQUEST['uRole']==null || $_REQUEST['uSex']==null || $_REQUEST['uRole']==null ){
			return "信息不完整";
			die;
		}
		$select=$database->where(array('username'=>$_REQUEST['uPhone']))->select();
		if($select!=null){
			return "该手机号已被注册";
			die;
		}
		$database->startTrans();
		$data=array(
			'username'=>$_REQUEST['uPhone'],
			'password'=>$_REQUEST['uPass'],
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
	public function companyRegister(){
		if($_REQUEST['pass']==null || $_REQUEST['preside']==null || $_REQUEST['shopNum']==null || $_REQUEST['path']==null || $_REQUEST['cont']==null || $_REQUEST['RegisterRole']==null|| $_REQUEST['phoneNum']==null || $_REQUEST['companyName']==null || $_REQUEST['address']==null || $_REQUEST['RegisterRole']==null ){
			return "信息不完整";
			die;
		}
		$database = M("Users");
		$select=$database->where(array('username'=>$_REQUEST['uPhone']))->select();
		if($select!=null){
			return "该手机号已被注册";
			die;
		}
		$database->startTrans();
		$data=array(
			'username'=>$_REQUEST['phoneNum'],
			'password'=>$_REQUEST['pass'],
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
