<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * DoctDoctorsors controller
 */
 
class Home extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	//--------------------------------------------------------------------

    public function index()
    {
		Template::render();
    }

	//--------------------------------------------------------------------
	
	
}//end class