<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
    {
        parent::__construct();

		if($this->session->userdata('user_is_logged_in')=='')
		{
		$this->session->set_flashdata('msg','Please Login to Continue');
		redirect('Front/index');
		}
		$this->load->model('Model');
    }

	public function index()
	{
		$this->load->view('User/index');
	}
	
	public function events()
	{
		$this->data['hasil'] = $this->Model->getAktivitas('tb_aktivitas');
		$this->load->view('User/events', $this->data);
	}
	public function volunteer()
	{
		$this->data['hasil'] = $this->Model->getRelawan('tb_relawan');
		$this->load->view('User/volunteer', $this->data);
	}

	public function programrelawan()
	{
		$this->load->view('User/programrelawan');
	}

	public function form_relawan()
	{
		$this->load->view('User/form_relawan');
	}

	public function donate()
	{
		$this->data['hasil'] = $this->Model->getDonasi('tb_donasi');
		$this->load->view('User/donate', $this->data);
	}

	public function programdonasi()
	{
		$this->load->view('User/programdonasi');
	}

	public function form_donasi()
	{
		$this->load->view('User/form_donasi');
	}

	public function form_donasi_bank()
	{
		$this->load->view('User/form_donasi_bank');
	}

	public function galangdana()
	{
		$this->data['hasil'] = $this->Model->getGalangdana('tb_galangdana');
		$this->load->view('User/dana', $this->data);
	}

	public function form_tambah_dana()
	{
		$this->data['hasil'] = $this->Model->getGalangdana('tb_galangdana');
		$this->load->view('User/form_tambah_dana', $this->data);
	}

	public function tambah_dana(){    
		$data = array();        
			if($this->input->post('submit')){         
				$upload = $this->Model->upload();           
			if($upload['result'] == "success"){                 
				$this->Model->save_galdan($upload);                

	  redirect('User/dana');  
	  
	  }else{      
	  
	  
	  echo "Maaf Anda Gagal";     
	  
	  }    
}      
	  $this->load->view('User/form_tambah_dana',$data);  
	  }

}