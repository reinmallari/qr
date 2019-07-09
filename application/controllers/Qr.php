<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qr extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	    $this->load->helper('form');
	    $this->load->helper('url');
	}
	public function index()
	{

		    //echo "mobile";
		    $this->load->view('qr_mobile');



	}

}
