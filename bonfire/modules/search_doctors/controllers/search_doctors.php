<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * search doctor controller
 */
 
class Search_doctors extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		
		
	}

	//--------------------------------------------------------------------
	
	public function searchdoctors()
	{
		
		
		
		
		$query='select a.id,a.first_name,a.middle_name,a.last_name,a.education,a.address_line1,
		        sp.name as speciality
				from 
				bf_doctors a  inner join bf_doctors_specialities b 
				on a.id = b.doctor_id
				inner join bf_specialities sp
				on
				sp.id = b.speciality_id';
				
		$records = $this->db->query($query);
		Template::set('records',$records->result());
		Template::render();
	}
}