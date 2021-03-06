<?php 
class HelpingAction extends WapAction{
	public $helping;
	public $isamap;
		
	public function _initialize(){
		parent::_initialize();

		$this->helping 	= M('Helping')->where(array('token'=>$this->token,'id'=>$this->_get('id','intval'),'is_open'=>1))->find();

		if(empty($this->helping)){
			$this->error('活动可能还没开启');
		}

		$this->assign('info',$this->helping);
	}

	public function index(){

		$id 		= $this->_get('id','intval');
		$share_key 	= $this->_get('share_key','trim');
		$now 		= time();

		if($this->helping['start']>$now){
			$is_over 	= 1;
		}else if($this->helping['end']<$now){
			$is_over 	= 2;
		}else{
			$is_over 	= 0;
		}

		if($this->fans){
			$user 	= M('Helping_user')->where(array('token'=>$this->token,'wecha_id'=>$this->fans['wecha_id'],'pid'=>$this->helping['id']))->find();
			
			if(empty($user)){
				$data 	= array(
					'pid' 			=> $this->helping['id'],
					'wecha_id'		=> $this->wecha_id,
					'token'			=> $this->token,
					'add_time' 		=> time(),
					'help_num' 	=> 0,
					'share_key'		=> $this->getKey(),
				);	
				M('Helping_user')->add($data);
			}else{
				$user['help_rank'] 	= M('Helping_user')->where(array('token'=>$this->token,'help_count'=>array('egt',$user['help_count']),'pid'=>$this->helping['id']))->count();
			}
			
		}

		$count 	= M('Helping_user')->where(array('token'=>$this->token,'pid'=>$this->helping['id']))->count();

		if($this->helping['is_attention'] == 1 && empty($this->wecha_id)) {
			$this->memberNotice('',1);
		}else if(($this->helping['is_reg'] == 1 && empty($this->fans)) || ($this->helping['is_attention'] == 2 && empty($this->wecha_id))) {
			$this->memberNotice();
		}


		$this->assign('share_key',$share_key);
		$this->assign('share',$share);
		$this->assign('rank',$this->get_rank());
		$this->assign('user',$user);
		$this->assign('fans',$this->fans);		
		$this->assign('count',$count);
		$this->assign('is_over',$is_over);

		$this->display();
	}
	

	public function add_share(){
		$share_key 	= $this->_get('share_key','trim');
		$cookie 	= cookie('helping_share');			
		$cookie_arr = json_decode( json_encode( $cookie),true);
		$share 		= M('Helping_user')->where(array('token'=>$this->token,'share_key'=>$share_key))->find();

		if(empty($share)) {
			echo json_encode(array('err'=>2,'info'=>'分享参数错误'));
			exit;
		}else if(!empty($this->wecha_id) &&  $this->wecha_id == $share['wecha_id']){
			echo json_encode(array('err'=>4,'info'=>'不能给自己增加助力值'));
			exit;
		}else if(in_array($share_key, $cookie_arr[$this->helping['id']])) {
			//echo json_encode(array('err'=>1,'info'=>'请不要重复给好友加助力值'));
			exit;
		}else{
			M('Helping_user')->where(array('token'=>$this->token,'pid'=>$this->helping['id'],'share_key'=>$share_key))->setInc('help_count',1);	
			//记录cookie
			//$cookie_arr[$this->helping['id']][] = $share_key;
			if(empty($cookie_arr[$this->helping['id']])){
				$cookie_arr[$this->helping['id']] 	= array();
			}
			array_push($cookie_arr[$this->helping['id']],$share_key);
			cookie('helping_share',$cookie_arr,time()+3600*24*30);
			echo json_encode(array('err'=>0,'info'=>'你的好友成功增加了1点助力值'));
			exit;
		}	

	}
	public function get_rank(){
		$where 	= array('token'=>$this->token,'pid'=>$this->helping['id']);
		$rank 	= M('Helping_user')->where($where)->order('help_count desc,add_time desc')->limit(30)->select();
		foreach($rank as $key=>$val){
			$user_info = M('Userinfo')->where(array('token'=>$this->token,'wecha_id'=>$val['wecha_id']))->find();
		
			$rank[$key]['username'] 	= $user_info['truename']?$user_info['truename']:'匿名';
			$rank[$key]['tel'] 			= $user_info['tel']?substr_replace($user_info['tel'],'****',3,4):'无';
		}
		return $rank;
	}

	

	//分享key  最长32
	public function getKey($length=16){
		$str = substr(md5(time().mt_rand(1000,9999)),0,$length);
		return $str;
	}


}

?>