<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * search  controller
 */
 
class Search extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('search_model');
	
	}

 //=============================================specialities======================================================
	
	public function speciality($speciality=false)
	{
			$speciality = str_replace('%20', ' ', $speciality);
	       	
		   if($speciality)
		   {
		   	   $specialities_doctors=$this->search_model->get_doctor_by_specialities($speciality);
		   	   $specialities_clinics=$this->search_model->get_clinic_by_specialities($speciality);
			   $doctors_clinic_time = $this->search_model->get_clinic_time($specialities_doctors);
			   
			   $all_specialities_doctors = $this->search_model->get_all_specialities_doctors();
			   $all_specialities_clinics = $this->search_model->get_all_specialities_clinic();	
			   $all_specialities_clinics_time = $this->search_model->get_clinic_time($all_specialities_doctors);
		        if($specialities_doctors)
				{
					
		        Template::set('records',$specialities_doctors);
				Template::set('clinic_records',$specialities_clinics);
		        Template::set('time_slots',$doctors_clinic_time);
				}
				else
			    {
		        Template::set('records_all',$all_specialities_doctors);
				Template::set('clinic_records',$all_specialities_clinics);
		        Template::set('time_slots',$all_specialities_clinics_time);
				}
		        
			}
			else
		    {
			    $all_specialities_doctors = $this->search_model->get_all_specialities_doctors();	
			    $all_specialities_clinics = $this->search_model->get_all_specialities_clinic();	
				$all_specialities_clinics_time = $this->search_model->get_clinic_time($all_specialities_doctors);
		        Template::set('records',$all_specialities_doctors);
		        Template::set('clinic_records',$all_specialities_clinics);
		        Template::set('time_slots',$all_specialities_clinics_time);
			}
				Template::set_view('search_results');
		        Template::render();
			
		}
		 
	
   #===================================Doctors====================================================================
	
	public function doctor($doctor=false)
	{
		$doctor=str_replace('%20',' ',$doctor);
		if($doctor)
		{
			$doctors = $this->search_model->get_doctors_by_name($doctor);
			$doctors_clinic = $this->search_model->get_doctors_clinic($doctor);
			$doctors_clinic_time = $this->search_model->get_clinic_time($doctors);
			
			$doctors_all = $this->search_model->get_all_doctors();
			$clinics = $this->search_model->get_all_doctors_clinic();
			$clinics_time = $this->search_model->get_clinic_time($doctors_all);
			if($doctors)
			{
				Template::set('records',$doctors);
			    Template::set('clinic_records',$doctors_clinic);
			    Template::set('time_slots',$doctors_clinic_time);
			}
			else
		    {
				Template::set('records_all',$doctors_all);
			    Template::set('clinic_records',$clinics);
				Template::set('time_slots',$clinics_time);
			}
		}
		else
		{
			$doctors = $this->search_model->get_all_doctors();
			$clinics = $this->search_model->get_all_doctors_clinic();
			$clinics_time = $this->search_model->get_clinic_time($doctors);
			Template::set('records',$doctors);
		    Template::set('clinic_records',$clinics);
			Template::set('time_slots',$clinics_time);
		}
		Template::set_view('search_results');
		Template::render();
	}
	
	#======================================clinic=======================================================================
	
	public function clinic($clinic=false)
	{
		  
		    $clinic = str_replace('%20', ' ', $clinic);
			if($clinic)
			{
					
					$clinic_doctors=$this->search_model->get_clinic_doctor($clinic);
					$clinics=$this->search_model->get_clinic_by_name($clinic);
					$doctors_clinic_time = $this->search_model->get_clinic_time($clinic_doctors);
					
					$all_clinic_doctors=$this->search_model->get_all_clinic_doctors();
					$all_clinic=$this->search_model->get_all_clinic();
				    $all_clinic_time = $this->search_model->get_clinic_time($all_clinic_doctors);
					if($clinic_doctors)
					{
						Template::set('records',$clinic_doctors);
						Template::set('clinic_records',$clinics);
						Template::set('time_slots',$doctors_clinic_time);
					}
				else
				   {
						Template::set('records_all',$all_clinic_doctors);
				        Template::set('clinic_records',$all_clinic);
						Template::set('time_slots',$all_clinic_time);
					}
			}
			else
				{
					$all_clinic_doctors=$this->search_model->get_all_clinic_doctors();
					$all_clinic=$this->search_model->get_all_clinic();
				    $all_clinic_time = $this->search_model->get_clinic_time($all_clinic_doctors);
					Template::set('records',$all_clinic_doctors);
			        Template::set('clinic_records',$all_clinic);
					Template::set('time_slots',$all_clinic_time);
				}
				    Template::set_view('search_results');
					Template::render();	
	}

  #=================================doctor profile============================================================
	public function doctor_profile($doctor_id=FALSE)
	{
	   if($doctor_id)
	   {
	        $doctor_record = $this->search_model->get_doctor_details($doctor_id);
	        $clinic_record = $this->search_model->get_doctor_clinics_data($doctor_id);
	        $clinic_images_result = $this->search_model->get_doctor_clinic_images($doctor_id);
			$clinic_time_arr = array();
			foreach($clinic_record as $clinic)
			{
				$clinic_time = $this->search_model->get_clinic_time_by_clinicid($clinic->clinicid);
				$clinic_time_sorted = $this->byDaySort($clinic_time);
				$clinic_time_arr[$clinic->clinicid] = $clinic_time_sorted;
			}
			Template::set('doctor_record',$doctor_record);
			Template::set('clinic_record',$clinic_record);
			Template::set('clinic_images_result',$clinic_images_result);	        
			Template::set('time_slots',$clinic_time_arr);
				        
		}
		else 
		{
		   Template::redirect();	
		}
		
		Template::render();
	}
	
	public function byDaySort($array)
	{
	    $dayNo = date('N') - 1;
	    if($dayNo == 0)
	        return $array;
	    else
	        return array_merge(array_slice($array, $dayNo), array_slice($array, 0, $dayNo));
	}
	
	#===============================================================================================================
	public function get_location()
	{
		$location= $_POST['location'];
		$record=$this->search_model->get_location_wise_doctor($location);
		echo json_encode($record);
	}
	
	
}