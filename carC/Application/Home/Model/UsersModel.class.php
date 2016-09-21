<?php

namespace Home\Model;
use Think\Model;

class UsersModel extends Model{
	
	public function index(){ //登录判断模块
		$database = M("Users");
		$pass=md5($_REQUEST['password']);
		$query=$database->where(array('username'=>$_REQUEST['username'],'password'=>$pass,'role'=>$_REQUEST['Log']))->find();
		return $query;
	}
	
//	public function forum(){ //登录判断模块
//		$data = M();
//	}
	
}
