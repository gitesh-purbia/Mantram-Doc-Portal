<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Doctors_model extends BF_Model {

	protected $table		= "doctors";
	protected $key			= "id";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= TRUE;
	protected $set_modified = TRUE;


	//============================================================================
	
	public function register($input = array())
	{
		$user_data = array(
			'password'	    		=> $input['password'],
			'email'	    			=> $input['email'],
			'username'	    		=> $this->generateDoctorUID(),
			'display_name'	    	=> $input['first_name'].' '.$input['last_name'],
			'pass_confirm'	    	=> $input['pass_confirm'],
			'role_id'	    		=> 2,
			'deleted' 				=> 0,
		);
		
		$this->load->model('users/user_model');
		if($user_id = $this->user_model->insert($user_data))
		{
			$doctor_data = array(
				'user_id'	    		=> $user_id,
				'uid'	    			=> $user_data['username'],
				'dln'	    			=> $input['dln'],
				'email'	    			=> $user_data['email'],
				'first_name'    		=> $input['first_name'],
				'middle_name'	    	=> $input['middle_name'],
				'last_name'	    		=> $input['last_name'],
				'hash'					=> $this->generateHash(),
				'email_verified'		=> 0,
				'mobile_code'			=> NULL,
				'deleted' 				=> 0,
			);
			
			$doctor = parent::insert($doctor_data);
			$email_data = array(
				'username' 	=> $user_data['username'],
				'email'		=> $user_data['email'],
				'password'	=> $user_data['password'],
				'hash'		=> $doctor_data['hash']	
			);
			return $email_data;
		}
		else 
		{
			return FALSE;
		}
	}

	//============================================================================
	
	function generateDoctorUID($length = 4) 
	{
	    $characters = '0123456789';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return 'DR'.$randomString;
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
	
	public function verify_email($doctor_id)
	{
		if($doctor_id):
			$data = array(
				'email_verified'	 => 1,
				);
			
			 if(parent::update($doctor_id, $data)){
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
	
	//============================================================================
	
	public function get_doctors_by_searchterm($string)
	{
		$query = "select u.id,u.display_name from bf_doctors d inner join bf_users u
					on d.user_id = u.id
					where d.deleted = 0 and u.active = 1
					and u.display_name like '%$string%'
					";
		$doctors = $this->db->query($query)->result();		
		return $doctors;	
	}
	
	//============================================================================
}


