<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Search_model extends BF_Model 
{
	
	protected $table = 'doctors';
	protected $soft_deletes = TRUE;
	protected $date_format = 'datetime';
	protected $set_created = FALSE;
	protected $set_modified = FALSE;
	protected $key			= "user_id";
	
	#================================specialities======================================================================
	
	public function get_doctor_by_specialities($speciality)
	{
		$query="select d.id as doctorid,d.first_name,d.middle_name,d.last_name,d.education,
                        co.name as country,st.name as state,ci.name as city,d.photo,
				        d.mobile1 as phoneno, s.name as speciality
						from bf_doctors d 
						inner join bf_doctors_specialities ds on d.id = ds.doctor_id
						inner join bf_specialities s on s.id = ds.speciality_id
						inner join bf_countries co on co.id=d.country
						inner join bf_state st on st.id=d.state
						inner join bf_cities ci on ci.id=d.city
						where s.name like '%$speciality%'";
				return $this->db->query($query)->result();
	}
	
	//-----------------------------------------------------------------------------------------------------
	public function get_clinic_by_specialities($speciality)
	{
		$query_for_clinic="select c.id as clinic_id,c.name as clinic_name,d.id as doctorid,GROUP_CONCAT(ci.image,'') clinic_images
									from bf_doctors d 
									inner join bf_doctors_specialities ds on d.id = ds.doctor_id
									inner join bf_specialities s on s.id = ds.speciality_id
									inner join bf_doctors_clinic dc on dc.doctor_id=d.id
									inner join bf_clinics c on c.id=dc.clinic_id
									inner join bf_clinic_images ci on ci.clinic_id=c.id
									where s.name like '%$speciality%'
									GROUP BY c.id, doctorid";
				return $this->db->query($query_for_clinic)->result();
	}
	//-----------------------------------------------------------------------------------------------------------
	public function get_all_specialities_doctors()
		{
			$query="select d.id as doctorid,d.first_name,d.middle_name,d.last_name,d.education,
	                co.name as country,st.name as state,ci.name as city,
	                d.photo,d.mobile1 as phoneno, s.name as speciality
					from bf_doctors d 
					inner join bf_doctors_specialities ds on d.id = ds.doctor_id
					inner join bf_countries co on co.id=d.country
					inner join bf_state st on st.id=d.state
					inner join bf_cities ci on ci.id=d.city
					inner join bf_specialities s on s.id = ds.speciality_id";
				return $this->db->query($query)->result();
		}
	//--------------------------------------------------------------------------------------------------------------
	public function get_all_specialities_clinic()
		{
			$query_for_clinic="select c.id as clinic_id,c.name as clinic_name,d.id as doctorid,GROUP_CONCAT(ci.image,'') clinic_images
							from bf_doctors d 
							inner join bf_doctors_specialities ds on d.id = ds.doctor_id
							inner join bf_specialities s on s.id = ds.speciality_id
							inner join bf_doctors_clinic dc on dc.doctor_id=d.id
							inner join bf_clinics c on c.id=dc.clinic_id
							inner join bf_clinic_images ci on ci.clinic_id=c.id
							GROUP BY c.id, doctorid";
				return $this->db->query($query_for_clinic)->result();
		}
	#=======================================Doctor=======================================================================
	public function get_doctors_by_name($doctor)
		{
			$query="select d.id as doctorid,d.first_name,d.middle_name,d.last_name,d.mobile1 as phoneno,d.education,d.photo,
                         co.name as country,st.name as state,ci.name as city,
						 s.name as speciality
						 from bf_users u 
						 inner join bf_doctors d on u.id=d.user_id
						 inner join bf_doctors_specialities ds on ds.doctor_id=d.id
						 inner join bf_specialities s on s.id=ds.speciality_id 
						 inner join bf_countries co on co.id=d.country
					  	 inner join bf_state st on st.id=d.state
						 inner join bf_cities ci on ci.id=d.city
						 where u.display_name like '%$doctor%'";
				return $this->db->query($query)->result();
		}
		
	//------------------------------------------------------------------------------
	
	public function get_doctors_clinic($doctor)
		{
			$query_for_clinic="select c.id as clinic_id,c.name as clinic_name,d.id as doctorid,GROUP_CONCAT(ci.image,'') clinic_images
						 from bf_users u 
						 inner join bf_doctors d on u.id=d.user_id
						 inner join bf_doctors_clinic dc on dc.doctor_id=d.id
						 inner join bf_clinics c on c.id=dc.clinic_id 
						 inner join bf_clinic_images ci on ci.clinic_id=c.id where u.display_name like '%$doctor%'
						 GROUP BY c.id,doctorid";
			return $this->db->query($query_for_clinic)->result();
		}
	//------------------------------------------------------------------------------
	
	public function get_all_doctors()
		{
			$query="select d.id as doctorid,d.first_name,d.middle_name,d.last_name,d.mobile1 as phoneno,d.education,d.photo,
                         co.name as country,st.name as state,ci.name as city,
						 s.name as speciality
						 from bf_users u 
						 inner join bf_doctors d on u.id=d.user_id
						 inner join bf_doctors_specialities ds on ds.doctor_id=d.id
						 inner join bf_specialities s on s.id=ds.speciality_id
						 inner join bf_countries co on co.id=d.country
					  	 inner join bf_state st on st.id=d.state
						 inner join bf_cities ci on ci.id=d.city";
			return $this->db->query($query)->result();
		}
		
	//------------------------------------------------------------------------------
	
	public function get_all_doctors_clinic()
		{
			$query_for_clinic="select c.id as clinic_id,c.name as clinic_name,d.id as doctorid,GROUP_CONCAT(ci.image,'') clinic_images
						 from bf_users u 
						 inner join bf_doctors d on u.id=d.user_id
						 inner join bf_doctors_clinic dc on dc.doctor_id=d.id
						 inner join bf_clinics c on c.id=dc.clinic_id 
						 inner join bf_clinic_images ci on ci.clinic_id=c.id where u.display_name like '%%'
						 GROUP BY c.id,doctorid";
			return $this->db->query($query_for_clinic)->result();
		}
	#=======================================clinic=====================================================================

  public function get_clinic_doctor($clinic)
	  {
				
	  		$query="select  d.id as doctorid,d.first_name,d.middle_name,d.last_name,d.mobile1 as phoneno,d.education,d.photo,
					       co.name as country,st.name as state,ci.name as city,
						   s.name as speciality
					       from bf_clinics c 
						   inner join bf_doctors_clinic dc on dc.clinic_id=c.id
						   inner join bf_doctors d on d.id=dc.doctor_id
						   inner join bf_doctors_specialities ds on ds.doctor_id=d.id
						   inner join bf_countries co on co.id=d.country
					  	   inner join bf_state st on st.id=d.state
						   inner join bf_cities ci on ci.id=d.city
						   inner join bf_specialities s on s.id=ds.speciality_id where c.name like '%$clinic%'";
						return $this->db->query($query)->result();
			
	  	
	  }
  //---------------------------------------------------------------------------------------------------------
  
  public function get_clinic_by_name($clinic)
	  {
	  	$query_for_clinic="select c.id as clinic_id,c.name as clinic_name,d.id as doctorid,GROUP_CONCAT(ci.image,'') clinic_images
					      from bf_clinics c 
							inner join bf_doctors_clinic dc on dc.clinic_id=c.id
							inner join bf_doctors d on d.id=dc.doctor_id
							inner join bf_clinic_images ci on ci.clinic_id=dc.clinic_id where c.name like '%$clinic%'
							group by c.id,doctorid";
					return $this->db->query($query_for_clinic)->result();
	  }
	 //--------------------------------------------------------------------------------------------------------- 
   public function get_all_clinic_doctors()
   {
   	        $query="select distinct d.id as doctorid,d.first_name,d.middle_name,d.mobile1 as phoneno,d.last_name,d.education,d.photo,
				        co.name as country,st.name as state,ci.name as city,
						s.name as speciality
				        from bf_clinics c 
						inner join bf_doctors_clinic dc on dc.clinic_id=c.id
						inner join bf_doctors d on d.id=dc.doctor_id
						inner join bf_doctors_specialities ds on ds.doctor_id=d.id
						inner join bf_specialities s on s.id=ds.speciality_id
						inner join bf_countries co on co.id=d.country
					  	inner join bf_state st on st.id=d.state
						inner join bf_cities ci on ci.id=d.city";
					 return $this->db->query($query)->result();
   }	
   //------------------------------------------------------------------------------------------------------------- 
   public function get_all_clinic()
   {
   	   $query_for_clinic="select c.id as clinic_id,c.name as clinic_name,d.id as doctorid,GROUP_CONCAT(ci.image,'') clinic_images
				      from bf_clinics c 
						inner join bf_doctors_clinic dc on dc.clinic_id=c.id
						inner join bf_doctors d on d.id=dc.doctor_id
						inner join bf_clinic_images ci on ci.clinic_id=dc.clinic_id where c.name like '%%'
						group by c.id,doctorid";
			 return $this->db->query($query_for_clinic)->result();
   }
	 
  #=========================================clinic time===========================================================
	  public function get_clinic_time($doctors)
	  {
	     	$time_slots_array = array();
	        foreach($doctors as $doctor)
	        {
	        	$query="select cts.id,bcl.doctor_id,cts.clinic_id,cts.day,cts.time_from,cts.time_to from bf_clinic_time_slots cts
							inner join bf_clinics c on c.id = cts.clinic_id
							inner join bf_doctors_clinic bcl on c.id = bcl.clinic_id
							where bcl.doctor_id='$doctor->doctorid'";
				$timeslots = $this->db->query($query)->result();
				if($timeslots)
				{
					$time_slots_array[$doctor->doctorid] = $timeslots;
				}
	        }
	        return  $time_slots_array;
	  }
	#==========================================doctor profile==========================================================
	public function get_doctor_details($doctor_id)
	{
		   $query="select d.id as doctorid,d.first_name,d.middle_name,d.last_name,d.education,d.photo,d.overview,
				     s.name as speciality
				     from bf_doctors d 
					 inner join bf_doctors_specialities ds on ds.doctor_id=d.id
					 inner join bf_specialities s on s.id=ds.speciality_id where d.id='$doctor_id'";
			 return $this->db->query($query)->result();
	}
	//-----------------------------------------------------------------------------------------------
	public function get_doctor_clinics_data($doctor_id)
	{
      $clinic_records="select c.name as clinic_name,c.id as clinicid,c.address_line1 as address,c.fees,
				       c.latitude,c.longitude,s.name as state,co.name as country,city.name as city
				       from bf_doctors d 
				       inner join bf_doctors_clinic dc on dc.doctor_id=d.id
					   inner join bf_clinics c on c.id=dc.clinic_id
					   inner join bf_state s on s.id=c.state
					   inner join bf_countries co on co.id=c.country
					   inner join bf_cities city on city.id=c.city where d.id='$doctor_id'";
				return $this->db->query($clinic_records)->result();
	}
	//-------------------------------------------------------------------------------------------------
	public function get_doctor_clinic_images($doctor_id)
	{
		$clinic_images_record="select c.id as clinicid,group_concat(ci.image,'') clinic_images 
					       from bf_doctors d 
					       inner join bf_doctors_clinic dc on dc.doctor_id=d.id
					       inner join bf_clinics c on c.id=dc.clinic_id
						   inner join bf_clinic_images ci on ci.clinic_id=c.id where d.id='$doctor_id'
					       group by c.id";
		     return $this->db->query($clinic_images_record)->result();
	}
	//-------------------------------------------------------------------------------------------------
	public function get_clinic_time_by_clinicid($clinic_id)
	{
		$query="select * from bf_clinic_time_slots where clinic_id=".$clinic_id;
		return $this->db->query($query)->result();
	}
	#=========================================================================================================
	public function get_location_wise_doctor($location)
	{
		
		$query="select d.id as doctorid,d.first_name,d.middle_name,d.last_name,d.education,
		                co.name as country,st.name as state,ci.name as city,
		                d.photo,d.mobile1 as phoneno, s.name as speciality
						from bf_doctors d 
						inner join bf_doctors_specialities ds on d.id = ds.doctor_id
						inner join bf_countries co on co.id=d.country
						inner join bf_state st on st.id=d.state
						inner join bf_cities ci on ci.id=d.city
						inner join bf_specialities s on s.id = ds.speciality_id
						where ci.name='$location'";
				return $this->db->query($query)->result();
	}
	
}// End of class
