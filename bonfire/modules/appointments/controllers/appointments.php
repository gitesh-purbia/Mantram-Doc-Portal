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
	
	}
	public function book()
	{
		$appointment_time = $_GET['timeslots'];
		$appointment_date = $_GET['date'];
		$clinic_id = $_GET['clinicid'];
		$doctor_id = $_GET['doctor_id'];
		$doctor_record=$this->appointments_model->get_doctor_info($doctor_id);
		$clinic_info=$this->appointments_model->get_clinic_details($clinic_id);
		Template::set('doctor_record',$doctor_record);
		Template::set('clinic',$clinic_info);
		Template::set('appointment_date',$appointment_date);
		Template::set('appointment_time',$appointment_time);
		Template::render();
	}
	
	
}