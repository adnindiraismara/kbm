<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();

		// if($this->session->userdata('is_logged_in')=='')
		// {
		// $this->session->set_flashdata('msg','Please Login to Continue');
		// redirect('admin');
		// }
		// $this->load->Model('Model');
		$this->load->Model('Model');
		$this->load->helper(array('url','download'));
    }

	public function index()
	{
		$this->load->view('front/login');
	}

public function admin_login()
	{
		$this->load->view('Admin/login');//belum ada
	}

	
	function validate()
    {  

         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $is_valid = $this->Model->validate($username, $password);
		 
         if($is_valid)
         {
             $get_admin = $this->Model->get_admin($username, $password);                
					
            foreach($get_admin as $val)
                { 
                     $id_admin=$val->id_admin;
                     $username = $val->username;                  
                     $password = $val->password;                 
                     {
                        $data = array(
                        'admin_name' =>$username, 
                        'admin_password' => $password,
                        'admin_id'=>$id_admin,
                        'is_logged_in' => true
                        );
                          $this->session->set_userdata($data); 
                          redirect('dashboard');
                     } 
            }       
        }
        else 
        {
            $this->session->set_flashdata('msg1', 'Username atau password yang anda masukan salah!');
            redirect('Admin/admin_login');//belum ada
        }
    }
	
	function validate_user()
    {  

         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $is_valid = $this->Model->validate_user($username, $password);
		 
         if($is_valid)/*If valid username and password set */
         {
             $get_id = $this->Model->get_id($username, $password);                
					
            foreach($get_id as $val)
                { 
                     $id_user=$val->id_user;
                     $username = $val->username;                  
                     $password = $val->password;                 

                     {
                        $data = array(
                        'user_name' =>$username, 
                        'user_password' => $password,
                        'user_id'=>$id_user,
                        'user_is_logged_in' => true
                        );
                          $this->session->set_userdata($data); 
                          redirect('user');
                     }  
            }       
        }
        else
        {
            $this->session->set_flashdata('msg1', 'Username or Password Incorrect!');
            redirect('Front/index');
        }
    }
	
	public function aksi_registrasi(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
 
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'email' => $email,
			'password' => $password,
			);
		$this->Model->insertdata('tb_user',$data);
		redirect('Front/index');
	}

}