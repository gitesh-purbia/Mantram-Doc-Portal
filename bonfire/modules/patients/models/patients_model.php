<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Patients_model extends BF_Model {

	protected $table		= "patients";
	protected $key			= "id";
	protected $soft_deletes	= true;
	protected $date_format	= "datetime";
	protected $set_created	= TRUE;
	protected $set_modified = TRUE;
	
	public function register($input = array())
	{
		$user_data = array(
			'email'	    			=> $input['email'],
			'username'	    		=> $this->generatePatientUID(),
			'display_name'	    	=> $input['first_name'].' '.$input['last_name'],
			'password'	    		=> $input['password'],
			'pass_confirm'	    	=> $input['pass_confirm'],
			'role_id'	    		=> 10,
			'deleted' 				=> 0,
		);
		
		$this->load->model('users/user_model');
		if($userid = $this->user_model->insert($user_data))
		{
			$users_data = array(
				'user_id'	    		=> $userid,
				'uid'	    			=> $user_data['username'],
				'email'	    			=> $user_data['email'],
				'first_name'    		=> $input['first_name'],
				'middle_name'	    	=> $input['middle_name'],
				'last_name'	    		=> $input['last_name'],
				'mobile'	    		=> $input['mobile'],
				'hash'					=> $this->generateHash(),
				'email_verified'		=> 0,
				'mobile_code'			=> NULL,
				'deleted' 				=> 0,
			);
			
			$patient = parent::insert($users_data);
			$email_data = array(
				'username' 	=> $user_data['username'],
				'email'		=> $user_data['email'],
				'password'	=> $user_data['password'],
				'hash'		=> $users_data['hash']	
			);
			return $email_data;
		}
		else 
		{
			return FALSE;
		}
	}
	
	//===========================================================================================
	
	function generatePatientUID($length = 4) 
	{
	    $characters = '0123456789';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return 'PT'.$randomString;
	}
	
	//===========================================================================================
	
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
	
	//==========================================================================================
	
	public function verify_email($patient_id)
	{
		if($patient_id):
			$data = array(
				'email_verified'	 => 1,
				);
			
			 if(parent::update($patient_id, $data))
			 {
			 	return TRUE;
			 }
			 else
			 {
			 	return FALSE;
			 }
		else:
			return FALSE; 
		 endif;
	}
	
	//==========================================================================================

	public function update_mobile_code($id, $code)
	{
		$data = array('mobile_code' => $code);
		return parent::update($id, $data);
	}
}
