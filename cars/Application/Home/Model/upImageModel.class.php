<?php
namespace Home\Model;
use Think\Model;

class upImageModel extends Model{
	
	
	public function image(){
		$upload = new \Think\Upload();// 实例化上传类
			    $upload->maxSize   =     3145728 ;// 设置附件上传大小
			    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			    $upload->rootPath  =    './Public/'; // 设置附件上传根目录
			    $upload->savePath  =     'upload/';// 设置附件上传（子）目录
		    // 上传文件 
		   	$info   =   $upload->upload();
		    if(!$info) {// 上传错误提示错误信息
		        $this->error($upload->getError());
		    }else{// 上传成功
		    	foreach ($info as $v) {
		        	echo $v['savepath'].$v['savename'];
		    	}
		    	die;
		    }
		
	}
	
}
