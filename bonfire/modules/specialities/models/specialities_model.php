<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Specialities_model extends BF_Model 
{

	protected $table = 'specialities';

	protected $soft_deletes = TRUE;

	protected $date_format = 'datetime';

	protected $set_created = TRUE;
	
	protected $set_modified = TRUE;
	
	protected $log_user 	= TRUE;
	
	//==============================================================================
	
	public function get_specialities_by_searchterm($string)
	{
		$this->specialities_model->select('id,name')->where('deleted',0);
		$this->specialities_model->where('name like','%'.$string.'%');
		$record = $this->specialities_model->find_all();
		return $record;
	}
}	