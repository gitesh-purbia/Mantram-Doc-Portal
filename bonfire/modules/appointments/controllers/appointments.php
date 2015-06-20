<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * appointments  controller
 */
 
class Appointments extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('appointments_model');
		$this->load->model('patients/patients_model');
		$this->load->model('users/user_model');
	}

	public function book()
	{
		$appointment_time = $_GET['timeslots'];
		$appointment_date = $_GET['date'];
		$clinic_id = $_GET['clinicid'];
		$doctor_id = $_GET['doctor_id'];
		 if(isset($_GET['class']))
		 {
		 	$class=$_GET['class'];
			Template::set('active',$class);
		 }
		
		if(isset($appointment_time) && isset($appointment_date) && isset($clinic_id) && isset($doctor_id))
		{
			$doctor_record=$this->appointments_model->get_doctor_info($doctor_id);
			$clinic_info=$this->appointments_model->get_clinic_details($clinic_id);
			Template::set('doctor_record',$doctor_record);
			Template::set('clinic',$clinic_info);
			Template::set('appointment_date',$appointment_date);
			Template::set('appointment_time',$appointment_time);
			Template::set('clinicid',$clinic_id);
			Template::set('doctorid',$doctor_id);
		}
		else
		 {
		  	redirect('home/');	
		}
		Template::render();
	}
	
	//--------------------------------------------------------------------

    public function registration()
    {
    	if (!empty($_POST))
		{
			$apttime=$this->input->post('apttime');
			$aptdate=$this->input->post('aptdate');
			$clinicid=$this->input->post('clinicid');
			$doctorid=$this->input->post('doctorid');
			$this->form_validation->set_rules($this->get_validation_rules('add'));
			if ($this->form_validation->run($this))
			{
				if ($email_data = $this->patients_model->register($_POST))
				{
					$this->sendRegistrationEmail($email_data);
					Template::set_message('Your registration have been done successfully, Please check your email for verify your account.', 'success');
					Template::redirect('appointments/book'.'?timeslots='.$apttime.'&'.'clinicid='.$clinicid.'&'.'doctor_id='.$doctorid.'&'.'date='.$aptdate.'&class=active');
				}
				else
				{
					Template::set_message('Error in Registration.', 'alert alert-danger alert-dismissabl');
					Template::redirect('appointments/book'.'?timeslots='.$apttime.'&clinicid='.$clinicid.'&doctor_id='.$doctorid.'&date='.$aptdate.'&class=active');
				}
			}
			else
			{
				Template::set_message('Error in Registration.', 'alert alert-danger alert-dismissabl');
				Template::redirect('appointments/book'.'?timeslots='.$apttime.'&'.'clinicid='.$clinicid.'&'.'doctor_id='.$doctorid.'&'.'date='.$aptdate.'&class=active');
			}
		}
		
    	Template::render();
    }
	
	//--------------------------------------------------------------------
	
	private function get_validation_rules($group)
		{
			$validationRules = array();
	
			switch ($group)
			{
				case 'add':
					$validationRules = array(
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
						'field' => 'mobile',
						'label' => 'Mobile',
						'rules' => 'trim|required|max_length[10]|xss_clean'
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
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'trim|required|unique[users.email]|valid_email|max_length[50]|xss_clean'
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
	
	//--------------------------------------------------------------------
	
	public function sendRegistrationEmail($userdata='')
	{
		$this->load->library('email');

		$this->email->from('info@mantramindia.com', 'Ilaaj.com');
		$this->email->to($userdata['email']);
		
		$this->email->subject('Confirm your registration');
		
		$email_message_data = array(
            'title' => $this->settings_lib->item('site.title'),
            'data'  => $userdata
        );
							
		$message = $this->load->view('_emails/registration', $email_message_data, TRUE);
		echo $message; die();
		$this->email->message($message);
		
		$this->email->send();
	}

	//--------------------------------------------------------------------
	
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
			
	    	$records = $this->patients_model->find_by('hash', $hash);
			if($records)
			{
				$patients_record = $this->patients_model->find($records->id);
				$user_record = $this->user_model->find($records->user_id);
				
				if($patients_record->email_verified && $user_record->active)
				{
					Template::set_message('Your Account is already activated. Please Login to continue..' , 'alert alert-danger alert-dismissabl');
					Template::set('login',true);
				}
				else if(!$patients_record->email_verified && !$user_record->active)
				{
					if($this->patients_model->verify_email($patients_record->id))
					{
						$verification_code = $this->generateRandomStringForMobile();
						$this->patients_model->update_mobile_code($patients_record->id, $verification_code);
						
						$this->sendMobileVerification($patients_record->mobile, $verification_code);
						Template::set('verification_err',false);
						Template::set_message('Congratulations! Your Email verification is successfull. Please verify your mobile number for login.' , 'success');
					}
				}
				else if($patients_record->email_verified && !$user_record->active)
				{
					$checkMobileCodeSend = $this->checkMobileCodeSend($patients_record->id);
					if(!$checkMobileCodeSend)
					{
						$verification_code = $this->generateRandomStringForMobile();
						$this->patients_model->update_mobile_code($patients_record->id, $verification_code);
						
						$this->sendMobileVerification($patients_record->mobile, $verification_code);
						Template::set_message('Your Email is already verified. Please verify your mobile number for login.' , 'success');
					}
					else if($checkMobileCodeSend && $resend)
					{
						if($patients_record->mobile_code)
						{
							$verification_code = $patients_record->mobile_code;
						}
						else {
							$verification_code = $this->generateRandomStringForMobile();
							$this->patients_model->update_mobile_code($patients_record->id, $verification_code);
						}
						
						$this->sendMobileVerification($patients_record->mobile, $verification_code);
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
			Template::set('resend_url',SITE_URL().'patients/verification/'.$hash.'/true');
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
					$records = $this->patients_model->find($this->input->post('id'));
					
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
					Template::set('retry_url',SITE_URL().'patients/verification/'.$hash);
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
		$records = $this->patients_model->find($id);
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
	
	
}