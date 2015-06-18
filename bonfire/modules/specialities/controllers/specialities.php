<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Specialities extends Front_Controller
{

	//=======================================================================================
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('specialities_model', null, true);
		}
		
	//=======================================================================================
	
		public function get_specialities()
		{
			$search_term = $_GET['speciality'];
			$records = $this->specialities_model->get_specialities_by_searchterm($search_term);
			echo json_encode($records);
		}
}