<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relawan extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();

		// if($this->session->userdata('is_logged_in')=='')
		// {
		// $this->session->set_flashdata('msg','Please Login to Continue');
		// redirect('admin');
		// }
		// $this->load->Model('Model');
		$this->load->helper(array('url','download'));
    }

	public function index()
	{
		$this->load->view('front/volunteer');
	}


}