<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Doctors controller
 */
 
class Doctors extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('doctors_model');
		$this->load->model('users/user_model');
	}

	//--------------------------------------------------------------------
	
	public function index()
	{
		redirect('/doctors/registration');
		Template::render();
	}
	
	//--------------------------------------------------------------------

    public function registration()
    {
    	if (!empty($_POST))
		{
			$this->form_validation->set_rules($this->get_validation_rules('add'));
			if ($this->form_validation->run($this))
			{
				if ($user_data = $this->doctors_model->register($_POST))
				{
					$this->sendRegistrationEmail($user_data);
					Template::set_message('Your registration have been done successfully, Please check your email for verify your account.', 'success');
				}
				else
				{
					Template::set_message('Error in registration.', 'alert alert-danger alert-dismissabl');
				}
			}
			else
			{
				Template::set_message('Error in registration.', 'alert alert-danger alert-dismissabl');
			}
		}
    	Template::render();
    }
	
	//==================================================================================
	
		private function get_validation_rules($group)
		{
			$validationRules = array();
	
			switch ($group)
			{
				case 'add':
					$validationRules = array(
						array(
						'field' => 'dln',
						'label' => 'Doctor License Number',
						'rules' => 'trim|required|max_length[50]|xss_clean'
						),
						array(
						'field' => 'first_name',
						'label' => 'First name',
						'rules' => 'trim|required|max_length[100]|xss_clean'
						),
						array(
						'field' => 'middle_name',
						'label' => 'Middle name',
						'rules' => 'trim|max_length[100]|xss_clean'
						),
						array(
						'field' => 'last_name',
						'label' => 'Last name',
						'rules' => 'trim|required|max_length[100]|xss_clean'
						),
						array(
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'trim|required|strip_tags|min_length[8]|xss_clean'
						),
						array(
						'field' => 'pass_confirm',
						'label' => 'Confirm Password',
						'rules' => 'trim|required|strip_tags|min_length[8]|matches[password]|xss_clean'
						),
						array(
						'field' => 'mobile',
						'label' => 'Mobile',
						'rules' => 'trim|required|max_length[10]|xss_clean'
						),
						array(
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'trim|required|unique[doctors.email]|valid_email|max_length[100]|xss_clean'
						),
					);
					break;
	
					case 'edit':
						$validationRules = array(
						array(
						'field' => 'name',
						'label' => 'Speciality',
						'rules' => 'trim|required|callback_checkname|max_length[100]|xss_clean'
						),
					);
					break;
			}
	
			return $validationRules;
		}

	//==================================================================================

	public function sendRegistrationEmail($doctor='')
	{
		$this->load->library('email');

		$this->email->from('info@mantramindia.com', 'Ilaaj.com');
		$this->email->to($doctor['email']);
		
		$this->email->subject('Confirm your registration');
		
		$email_message_data = array(
            'title' => $this->settings_lib->item('site.title'),
            'data'  => $doctor
        );
							
		$message = $this->load->view('_emails/registration', $email_message_data, TRUE);
		
		$this->email->message($message);
		$this->email->send();
	}

	//==================================================================================
	
	public function sendMobileVerification($mobile_no='', $verification_code='')
	{
		$baseurl =$this->config->item('sms_api_baseurl');

        $url = "".$baseurl."/api/sendmsg.php?user=".$this->config->item('sms_api_user')."&pass=".$this->config->item('sms_api_password')."&sender=".$this->config->item('sms_api_sender')."&phone=".$mobile_no."&text=".urlencode('Your verification code is '.$verification_code)."&priority=ndnd&stype=normal";
		
		try
		{
	        $ret = file_get_contents($url);
		}
		catch (Exception $e)
		{
			
		}
		
	}
	
	//--------------------------------------------------------------------
	
	public function verification($hash = NULL, $resend = false)
    {
    	if($hash)
		{
			$this->session->set_userdata('user_hash', $hash);
			
	    	$records = $this->doctors_model->find_by('hash', $hash);
			if($records)
			{
				$doctors_record = $this->doctors_model->find($records->id);
				$user_record = $this->user_model->find($records->user_id);
				
				if($doctors_record->email_verified && $user_record->active)
				{
					Template::set_message('Your Account is already activated. Please Login to continue..' , 'alert alert-danger alert-dismissabl');
					Template::set('login',true);
				}
				else if(!$doctors_record->email_verified && !$user_record->active)
				{
					if($this->doctors_model->verify_email($doctors_record->id))
					{
						$verification_code = $this->generateRandomStringForMobile();
						$this->doctors_model->update_mobile_code($doctors_record->id, $verification_code);
						
						$this->sendMobileVerification($doctors_record->mobile1, $verification_code);
						Template::set('verification_err',false);
						Template::set_message('Congratulations! Your Email verification is successfull. Please verify your mobile number for login.' , 'success');
					}
				}
				else if($doctors_record->email_verified && !$user_record->active)
				{
					$checkMobileCodeSend = $this->checkMobileCodeSend($doctors_record->id);
					if(!$checkMobileCodeSend)
					{
						$verification_code = $this->generateRandomStringForMobile();
						$this->doctors_model->update_mobile_code($doctors_record->id, $verification_code);
						
						$this->sendMobileVerification($doctors_record->mobile, $verification_code);
						Template::set_message('Your Email is already verified. Please verify your mobile number for login.' , 'success');
					}
					else if($checkMobileCodeSend && $resend)
					{
						if($doctors_record->mobile_code)
						{
							$verification_code = $doctors_record->mobile_code;
						}
						else {
							$verification_code = $this->generateRandomStringForMobile();
							$this->doctors_model->update_mobile_code($doctors_record->id, $verification_code);
						}
						
						$this->sendMobileVerification($doctors_record->mobile1, $verification_code);
						Template::set_message('Activation code resend to your mobile number.' , 'success');
					}
					else {
						Template::set_message('A verification code is already send to your mobile number, it can take time to deliver, if its too late.. You can try to resending code' , 'success');
					}
					Template::set('verification_err',false);
				}
				else {
					Template::set('verification_err',true);
					Template::set_message('Something is wrong, it looks like your email is not verified or you have changed your email, Contact Admistration.' , 'alert alert-danger alert-dismissabl');
				}
				Template::set('user_id',$records->user_id);
				Template::set('id',$records->id);
			}
			else 
			{
				Template::set('verification_err',true);
				Template::set_message('Error in Verification' , 'alert alert-danger alert-dismissabl');
			}
			Template::set('resend_url',SITE_URL().'doctors/verification/'.$hash.'/true');
	    	Template::render();
		}
		else
		{
			redirect('home');
		}
    }

	//--------------------------------------------------------------------
	
	public function mobile_verification()
	{
		if (!empty($_POST))
		{
			if($this->input->post('mobile_code'))
			{
				if($this->input->post('id'))
				{
					$records = $this->doctors_model->find($this->input->post('id'));
					
					if($records->mobile_code == $this->input->post('mobile_code'))
					{
						if($this->user_model->admin_activation($this->input->post('user_id')))
						{
							Template::set_message('Thank you for verify your mobile number, Please login.' , 'success');
							Template::set('login',true);
						}
						else {
							Template::set('verification_err',true);
							Template::set_message('Error in Verification' , 'alert alert-danger alert-dismissabl');
						}
					}
					else {
							Template::set('verification_err',false);
							Template::set_message('Wrong code..' , 'alert alert-danger alert-dismissabl');
					}
				}
				else {
					
				}
				Template::set('user_id',$this->input->post('user_id'));
				Template::set('id',$this->input->post('id'));
			}
		}
		else {
				if($this->session->userdata('user_hash'))
				{
					$hash = $this->session->userdata('user_hash');
					Template::set('retry_url',SITE_URL().'doctors/verification/'.$hash);
				}
				
				Template::set('retry_pss',true);
				Template::set_message('Something is wrong.. Try again' , 'alert alert-danger alert-dismissabl');
		}
		
		
		Template::set_view('verification');
		Template::render();
	}

	//--------------------------------------------------------------------
	
	public function checkMobileCodeSend($id)
	{
		$return = false;
		$records = $this->doctors_model->find($id);
		if($records)
		{
			if($records->mobile_code)
			{
				$return = true;
			}
		}
		return $return;
	}

	
	//============================================================================
	
	function generateRandomStringForMobile($length = 4) 
	{
	    $characters = '0123456789';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	
	//============================================================================
	
	public function get_doctors()
	{
		$search_term = $_GET['doctor'];
		$records = $this->doctors_model->get_doctors_by_searchterm($search_term);
		echo json_encode($records);
	}
	
	//============================================================================
}//end class