<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Clinics extends Front_controller
{

	//=======================================================================================
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('clinics_model', null, true);
			
		}
		
	//=======================================================================================
	
		   public function get_clinics()
			{
				$search_term = $_GET['clinics'];
				$records = $this->clinics_model->get_clinics_by_searchterm($search_term);
				echo json_encode($records);
			}

	
}