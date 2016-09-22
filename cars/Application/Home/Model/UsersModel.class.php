<?php

namespace Home\Model;
use Think\Model;

class UsersModel extends Model{
	
	public function index(){
		$database = M("Users");
		$query=$database->where(array('id'=>$session))->select();
		 return $query;
	}
	
	
}
