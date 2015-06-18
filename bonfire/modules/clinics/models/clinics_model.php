<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Clinics_model extends BF_Model 
{

	protected $table = 'clinics';

	protected $soft_deletes = TRUE;

	protected $date_format = 'datetime';

	protected $set_created = TRUE;
	
	protected $set_modified = TRUE;
	
	//==============================================================================
	
	public function get_clinics_by_searchterm($string)
	{
		$this->clinics_model->select('id,name')->where('deleted',0);
		$this->clinics_model->where('name like','%'.$string.'%');
		$record = $this->clinics_model->find_all();
		return $record;
	}
	
	//==============================================================================
}	