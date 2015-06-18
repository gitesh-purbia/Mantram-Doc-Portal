<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class drug_stores_model extends BF_Model {

	protected $table		= "drug_stores";
	protected $key			= "id";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= false;
	protected $set_modified = false;


	//============================================================================
	
	public function register($input = array())
	{
		$user_data = array(
			'password'	    		=> $input['password'],
			'email'	    			=> $input['email'],
			'username'	    		=> $this->generateDrugStoreUID(),
			'display_name'	    	=> $input['name'],
			'pass_confirm'	    	=> $input['pass_confirm'],
			'role_id'	    		=> 8,
			'deleted' 				=> 0,
		);
		
		$this->load->model('users/user_model');
		if($user_id = $this->user_model->insert($user_data))
		{
			$drug_stores_data = array(
				'user_id'	    		=> $user_id,
				'uid'	    			=> $user_data['username'],
				'license_no'	    	=> $input['dsln'],
				'email'	    			=> $user_data['email'],
				'name'                  =>$input['name'],
				'mobile1'    		    => $input['mobile'],
				'hash'					=> $this->generateHash(),
				'email_verified'		=> 0,
				'mobile_code'			=> NULL,
				'deleted' 				=> 0,
			);
			
			
			$doctor = parent::insert($drug_stores_data);
			$email_data = array(
				'username' 	=> $user_data['username'],
				'email'		=> $user_data['email'],
				'password'	=> $user_data['password'],
				'hash'		=> $drug_stores_data['hash']	
			);
			return $email_data;
		}
		else 
		{
			return FALSE;
		}
	}

	//============================================================================
	
	function generateDrugStoreUID($length = 4) 
	{
	    $characters = '0123456789';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return 'DS'.$randomString;
	}
	
	//============================================================================
	
	function generateHash($length = 20) 
	{
	    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
		$date = date('ymd');
		$time = date('hms');
	    return $randomString.$date.$time;
	}
	
	//============================================================================
	
	public function verify_email($drug_stores_id)
	{
		if($drug_stores_id):
			$data = array(
				'email_verified'	 => 1,
				);
			
			 if(parent::update($drug_stores_id, $data)){
			 	return TRUE;
			 }
			 else{
			 	return FALSE;
			 }
		else:
			return FALSE; 
		 endif;
	}
	
	//============================================================================
	public function update_mobile_code($id, $code)
	{
		$data = array('mobile_code' => $code);
		return parent::update($id, $data);
	}
}