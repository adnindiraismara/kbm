<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();

		if($this->session->userdata('is_logged_in')=='')
		{
		// $this->session->set_flashdata('msg','Please Login to Continue');
		// redirect('admin');
		}
		$this->load->model('Model');
		$this->load->helper(array('url','download'));
    }

	public function index()
	{
		$this->load->view('Admin/dashboard');
	}

	public function admin_login()
	{
		$this->load->view('Admin/login');//belum ada
	}

	/*------------------------- BEGIN AKTIVITAS -------------------------------------*/
	public function dataaktivitas()
	{
		$data_akt = $this->Model->selectakt('tb_aktivitas')->result_array();
		$data = array(
		'data_akt'		=> $data_akt,
			);

		$this->load->view('Admin/aktivitas', $data);
	}
	public function dataaktivitas2()
	{
		$this->data['hasil'] = $this->Model->getAktivitas('tb_aktivitas');
		$this->load->view('Admin/aktivitas', $this->data);
	}
	
	public function form_tambah_aktivitas()
	{
		$this->load->view('Admin/form_tambah_aktivitas');
	}

	public function tambah_aktivitas(){    
	$data = array();        
			if($this->input->post('submit')){         
				$upload = $this->Model->upload();           
			if($upload['result'] == "success"){                 
				$this->Model->save_aktivitas($upload);                

	  redirect('Admin/form_tambah_aktivitas');  
	  
	  }else{      
	  
	  
	  echo "Maaf Anda Gagal";     
	  
	  }    
	}      
	  $this->load->view('Admin/aktivitas',$data);  
	  }


	public function form_edit_aktivitas()
	{
		$this->load->view('Admin/form_edit_aktivitas');
	}

	public function edit_aktivitas(){    
	$data = array();        
			if($this->input->post('submit')){         
				$upload = $this->Model->upload();           
			if($upload['result'] == "success"){                 
				$this->Model->save_aktivitas($upload);                

	  redirect('Admin/aktivitas');  
	  
	  }else{      
	  
	  
	  echo "Maaf Anda Gagal";     
	  
	  }    
	}      
	  $this->load->view('Admin/aktivitas',$data);  
	  }

	/*------------------------- END AKTIVITAS -------------------------------------*/

	/*------------------------- BEGIN RELAWAN -------------------------------------*/

	
	public function datarelawan()
	{
		$this->data['hasil'] = $this->Model->getRelawan('tb_relawan');
		$this->load->view('Admin/relawan', $this->data);
	}

	/*------------------------- END RELAWAN -------------------------------------*/

	/*------------------------- BEGIN DONASI -------------------------------------*/
	public function datadonasi()
	{
		$this->data['hasil'] = $this->Model->getDonasi('tb_donasi');
		$this->load->view('Admin/donasi', $this->data);
	}
	/*------------------------- END DONASI -------------------------------------*/

	/*------------------------- BEGIN CAMPAIGN -------------------------------------*/
public function datacampaign()
	{
		$data_campaign = $this->Model->selectcampaign('tb_campaign')->result_array();
		$data = array(
		'data_campaign'		=> $data_campaign,
			);

		$this->load->view('Admin/campaign', $data);
	}

	public function datacampaign2()
	{
		$this->data['hasil'] = $this->Model->getCampaign('tb_campaign');
		$this->load->view('Admin/campaign', $this->data);
	}

	public function form_tambah_campaign()
	{
		$this->load->view('Admin/form_tambah_campaign');
	}

	public function tambah_campaign(){
		$data = array();        
			if($this->input->post('submit')){         
				$upload = $this->Model->upload();           
			if($upload['result'] == "success"){                 
				$this->Model->save_campaign($upload);                

	  redirect('Admin/form_tambah_campaign');  
	  
	  }else{      
	  
	  
	  echo "Maaf Anda Gagal";     
	  
	  }    
	}      
	  $this->load->view('Admin/campaign',$data);  
	  }

	  public function form_edit_campaign()
	{
		$this->load->view('Admin/form_edit_campaign');
	}

	public function edit_campaign(){    
	$data = array();        
			if($this->input->post('submit')){         
				$upload = $this->Model->upload();           
			if($upload['result'] == "success"){                 
				$this->Model->save_campaign($upload);                

	  redirect('Admin/campaign');  
	  
	  }else{      
	  
	  
	  echo "Maaf Anda Gagal";     
	  
	  }    
	}      
	  $this->load->view('Admin/campaign',$data);  
	  }

	 /*------------------------- END CAMPAIGN -------------------------------------*/

	 /*------------------------- BEGIN GALDAN -------------------------------------*/
public function datagalangdana()
	{
		$data_dana = $this->Model->selectgalangdana('tb_galangdana')->result_array();
		$data = array(
		'data_dana'		=> $data_dana,
			);

		$this->load->view('Admin/dana', $data);
	}

	public function datagalangdana2()
	{
		$this->data['hasil'] = $this->Model->getGalangdana('tb_galangdana');
		$this->load->view('Admin/dana', $this->data);
	}

	public function form_tambah_dana()
	{
		$this->load->view('Admin/form_tambah_dana');
	}

	public function tambah_dana(){
		$data = array();        
			if($this->input->post('submit')){         
				$upload = $this->Model->upload();           
			if($upload['result'] == "success"){                 
				$this->Model->save_galdan($upload);                

	  		redirect('Admin/datagalangdana');  
	  
	  }else{      
	  
	  
	  echo "Maaf Anda Gagal";     
	  
	  }    
	}      
	  $this->load->view('Admin/dana',$data);  
	  }

	public function download(){			
	$data["file"]=file_get_contents('file_name');
	$name = $this->uri->segment(3);

		force_download($name, $data);
	}	
/*------------------------- END GALDAN -------------------------------------*/

/*------------------------- BEGIN USER -------------------------------------*/

	public function datauser()
	{
		$this->data['hasil'] = $this->Model->getUser('tb_user');
		$this->load->view('Admin/user', $this->data);
	}

	public function form_tambah_user()
	{
		$this->load->view('Admin/form_tambah_user');
	}

	public function tambah_user(){    
		$data = array();        
			if($this->input->post('submit')){         
				$upload = $this->Model->upload();           
			if($upload['result'] == "success"){                 
				$this->Model->save_user($upload);                

	  redirect('Admin/user');  
	  
	  }else{      
	  
	  
	  echo "Maaf Anda Gagal";     
	  
	  }    
}      
	  $this->load->view('Admin/user',$data);  
	  }

	  public function form_edit_user()
	{
		$this->load->view('Admin/form_edit_user');
	}

	public function edit_user(){    
	$data = array();        
			if($this->input->post('submit')){         
				$upload = $this->Model->upload();           
			if($upload['result'] == "success"){                 
				$this->Model->save_user($upload);                

	  redirect('Admin/user');  
	  
	  }else{      
	  
	  
	  echo "Maaf Anda Gagal";     
	  
	  }    
	}      
	  $this->load->view('Admin/user',$data);  
	  }
	/*------------------------- END USER -------------------------------------*/

	/*------------------------- BEGIN PROGRRAM -------------------------------------*/
	public function dataprogram()
	{
		$data_program = $this->Model->selectprogram('tb_program')->result_array();
		$data = array(
		'data_program'		=> $data_program,
			);

		$this->load->view('Admin/program', $data);
	}

	public function dataprogram2()
	{
		$this->data['hasil'] = $this->Model->getProgram('tb_program');
		$this->load->view('Admin/program', $this->data);
	}
	
	public function form_tambah_program()
	{
		$this->load->view('Admin/form_tambah_program');
	}

	public function tambah_program(){    
	$data = array();        
			if($this->input->post('submit')){         
				$upload = $this->Model->upload();           
			if($upload['result'] == "success"){                 
				$this->Model->save_program($upload);                

	  redirect('Admin/form_tambah_program');  
	  
	  }else{      
	  
	  
	  echo "Maaf Anda Gagal";     
	  
	  }    
	}      
	  $this->load->view('Admin/program',$data);  
	  }


	public function form_edit_program()
	{
		$this->load->view('Admin/form_edit_program');
	}

	public function edit_program(){    
	$data = array();        
			if($this->input->post('submit')){         
				$upload = $this->Model->upload();           
			if($upload['result'] == "success"){                 
				$this->Model->save_program($upload);                

	  redirect('Admin/program');  
	  
	  }else{      
	  
	  
	  echo "Maaf Anda Gagal";     
	  
	  }    
	}      
	  $this->load->view('Admin/program',$data);  
	  }
	 /*------------------------- END PROGRAM -------------------------------------*/


	 /*------------------------- BEGIN KESAN -------------------------------------*/

	 public function datakesan()
	{
		$data_kesan = $this->Model->selectkesan('kesan_relawan')->result_array();
		$data = array(
		'data_kesan'		=> $data_kesan,
			);

		$this->load->view('Admin/kesan', $data);
	}

	 public function datakesan2()
	{
		$this->data['hasil'] = $this->Model->getKesan('kesan_relawan');
		$this->load->view('Admin/kesan', $this->data);
	}
	
	public function form_tambah_kesan()
	{
		$this->load->view('Admin/form_tambah_kesan');
	}

	public function tambah_kesan(){    
	$data = array();        
			if($this->input->post('submit')){         
				$upload = $this->Model->upload();           
			if($upload['result'] == "success"){                 
				$this->Model->save_kesan($upload);                

	  redirect('Admin/form_tambah_kesan');  
	  
	  }else{      
	  
	  
	  echo "Maaf Anda Gagal";     
	  
	  }    
	}      
	  $this->load->view('Admin/kesan',$data);  
	  }


	public function form_edit_kesan()
	{
		$this->load->view('Admin/form_edit_kesan');
	}

	public function edit_kesan(){    
	$data = array();        
			if($this->input->post('submit')){         
				$upload = $this->Model->upload();           
			if($upload['result'] == "success"){                 
				$this->Model->save_kesan($upload);                

	  redirect('Admin/kesan');  
	  
	  }else{      
	  
	  
	  echo "Maaf Anda Gagal";     
	  
	  }    
	}      
	  $this->load->view('Admin/kesan',$data);  
	  }

	 /*------------------------- END KESAN -------------------------------------*/
}