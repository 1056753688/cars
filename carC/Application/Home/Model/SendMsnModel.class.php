<?php
namespace Home\Model;
use Think\Model;

class SendMsnModel extends Model{
//	function s($a){
//			return $a;
//		}
	
		public function curl($url,$post=false){
				$ch=curl_init();
				curl_setopt($ch,CURLOPT_TIMEOUT,30);
				curl_setopt($ch,CURLOPT_URL,$url);
				curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
				curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);
				curl_setopt($ch,CURLOPT_HEADER,FALSE);
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
				if($post){
					curl_setopt($ch,CURLOPT_POST,TRUE);
					curl_setopt($ch,CURLOPT_POSTFIELDS,$post);
				}
				$data=curl_exec($ch);
				curl_close($ch);
				return $data;
			}
		public function send_sms($mob,$msg){
			#验证手机号是否有效
//			if(!chk_mob($mob)){
//				$return['state']=0;
//				$return['msg']='错误的手机号！';
//				return $return;
//			}
			#DEBUG模式不发送短信
//			if(APP_DEBUG){
//				$return['state']=1;
//				$return['msg']='DEBUG模式短信发送！';
//				return $return;
//			}
			#正常发送
			$smsfm_para=array(
				'key'=>'k6I68HwwhCz9KYkD4AQ5ajGDX32MqGY8',
				'mob'=>&$mob,
				'msg'=>&$msg
			);
			$smsapi='http://sms.ejar.com.cn/JcSms/send?'.http_build_query($smsfm_para);
			$model =new \Home\Model\SendMsnModel();
			$data=$model->curl($smsapi);
			$sendsms=json_decode($data,true);
			$return=$sendsms?$sendsms:array('state'=>0,'msg'=>'发送失败：网络错误！');
			return $return;
		}
		
}
