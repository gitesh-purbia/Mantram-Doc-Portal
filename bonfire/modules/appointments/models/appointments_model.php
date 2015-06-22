<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Appointments_model extends BF_Model 
{
	
	protected $table = 'appointments';
	protected $soft_deletes = TRUE;
	protected $date_format = 'datetime';
	protected $set_created = FALSE;
	protected $set_modified = FALSE;
	protected $key			= "user_id";
	
	//---------------------------------------------------------------------------------------------
	public function get_doctor_info($doctorid)
	{
		$query="select d.user_id as doctorid,d.first_name,d.middle_name,d.last_name,d.education,d.photo,d.overview,
				     s.name as speciality
				     from bf_doctors d 
					 inner join bf_doctors_specialities ds on ds.doctor_id=d.user_id
					 inner join bf_specialities s on s.id=ds.speciality_id where d.user_id=".$doctorid;
				return $this->db->query($query)->result();
	}
	//--------------------------------------------------------------------------------------------------
	public function get_clinic_details($clinicid)
	{
		$clinic_query="select c.name,c.address_line1 as address,c.latitude,c.longitude,
				       co.name as country,st.name as state,city.name as city,
					   group_concat(ci.image,'') images 
				       from bf_clinics c 
				       inner join bf_clinic_images ci on ci.clinic_id=c.id
				       inner join bf_countries co on co.id=c.country
				       inner join bf_state st on st.id=c.state
				       inner join bf_cities city on city.id=c.city where c.id=".$clinicid;
				return $this->db->query($clinic_query)->result();
	}
	
}// End of class
