<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	
	function validate_user($username, $password)
	{
		$this->db->where('password', $password);
		$this->db->where('username', $username);
		$query = $this->db->get('tb_user');
		return $query->result();	
	}
		
	function get_id($username, $password)
	{
		$this->db->where('password', $password);
		$this->db->where('username', $username);	
		return $this->db->get('tb_user')->result();		
	}
	function validate($username, $password)
	{
		$this->db->where('password', $password);
		$this->db->where('username', $username);
		$query = $this->db->get('tb_admin');
		return $query->result();	
	}
		
	function get_admin($username, $password)
	{
		$this->db->where('password', $password);
		$this->db->where('username', $username);	
		return $this->db->get('tb_admin')->result();		
	}
	
	function login($table,$where){     
        return $this->db->get_where($table,$where);
    }
    function insertdata($tabel, $data){
		$tambah = $this->db->insert($tabel,$data);
		return $tambah;
	}
	function selectdata($where = ''){
		return $this->db->query("select * from $where;");
	}
	function updatedata($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function hapusData($table_name, $where){
		$hapus = $this->db->delete($table_name, $where);
		return $hapus;
	}
	function edit_data($table_name, $data, $where){
		$edit = $this->db->update($table_name, $data, $where);
		return $edit;
	} 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function selectakt($where = ''){
		return $this->db->query('SELECT * FROM tb_aktivitas ' .$where);
	}

public function getAktivitas($where="")
	{
		$data = $this->db->query('SELECT * FROM tb_aktivitas ' .$where);
		return $data->result_array();
	}

	function selectcampaign($where = ''){
		return $this->db->query('SELECT * FROM tb_campaign ' .$where);
	}

public function getCampaign($where="")
	{
		$data = $this->db->query('SELECT * FROM tb_campaign ' .$where);
		return $data->result_array();
	}

	function selectprogram($where = ''){
		return $this->db->query('SELECT * FROM tb_program ' .$where);
	}

public function getProgram($where="")
	{
		$data = $this->db->query('SELECT * FROM tb_program ' .$where);
		return $data->result_array();
	}

public function getDonasi($where="")
	{
		$data = $this->db->query('SELECT * FROM tb_donasi ' .$where);
		return $data->result_array();
	}

	function selectgalangdana($where = ''){
		return $this->db->query('SELECT * FROM tb_galangdana ' .$where);
	}

public function getGalangdana($where="")
	{
		$data = $this->db->query('SELECT * FROM tb_galangdana ' .$where);
		return $data->result_array();
	}

public function getRelawan($where="")
	{
		$data = $this->db->query('SELECT * FROM tb_relawan ' .$where);
		return $data->result_array();
	}

public function getUser($where="")
	{
		$data = $this->db->query('SELECT * FROM tb_user ' .$where);
		return $data->result_array();
	}

	function selectkesan($where = ''){
		return $this->db->query('SELECT * FROM kesan_relawan ' .$where);
	}

public function getKesan($where="")
	{
		$data = $this->db->query('SELECT * FROM kesan_relawan ' .$where);
		return $data->result_array();
	}


public function upload(){    
$config['upload_path'] = './assets/admin/img/upload/';    
$config['allowed_types'] = 'jpg|png|jpeg|png|pdf'; 
$config['max_size']  = '10000';
$config['overwrite'] = FALSE;    
$config['remove_space'] = TRUE; 

$this->upload->initialize($config); 
$this->load->library('upload', $config);  
// $this->upload->do_upload('proposal');
if(!$this->upload->do_upload('input_file')){          
$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
return $return;
}
// else {        
// unset($config);
// $config['upload_path'] = './assets/admin/img/upload/';
// $config['allowed_types'] = 'pdf';
// $config['overwrite'] = FALSE;
// $config['max_size'] = '15000';
// $config['remove_space'] = TRUE; 
// $this->upload->initialize($config); 
// $this->load->library('upload', $config);    
// if(!$this->upload->do_upload('file1')){       
// $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
// return $return;   }
else{ 
$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');    
return $return;              
		}
	}



/*------------------------- BEGIN AKTIVITAS -------------------------------------*/    

public function save_aktivitas($upload){    
$data = array( 
'kategori'=>$this->input->post('input_kategori'),
'judul_aktivitas'=>$this->input->post('input_judul_aktivitas'),
'foto_aktivitas' => $upload['file']['file_name'],
'narasi'=>$this->input->post('input_narasi'),
);  
     
$this->db->insert('tb_aktivitas', $data);  
}
public function save_update_aktivitas($upload){
$id_aktivitas  = $this->input->post('id_aktivitas');
	$kategori = $this->input->post('input_kategori');
	$judul_aktivitas = $this->input->post('input_judul_aktivitas');
	$foto_aktivitas	  = $this->input->post('foto_aktivitas');
	$narasi	  = $this->input->post('input_narasi');    
$data = array( 
'id_aktivitas'=>$this->input->post('id_aktivitas'),      
'kategori'=>$this->input->post('input_kategori'),
'judul_aktivitas'=>$this->input->post('input_judul_aktivitas'),
'foto_aktivitas' => $upload['file']['file_name'],
'narasi'=>$this->input->post('input_narasi'),
); 
$where = array(
		'id_aktivitas' => $id_aktivitas
	);    
$this->db->where($where);
$this->db->update('tb_aktivitas',$data); 
}

/*------------------------- END AKTIVITAS -------------------------------------*/

/*------------------------- BEGIN CAMPAIGN -------------------------------------*/

public function save_campaign($upload){    
$data = array(   
'kategori'=>$this->input->post('input_kategori'),
'judul_campaign'=>$this->input->post('input_judul_campaign'),
'deskripsi' => $this->input->post('input_deskripsi'),
'target_donasi'=>$this->input->post('input_target_donasi'),
'akhir_donasi'=>$this->input->post('input_akhir_donasi'),
'foto_campaign'=>$upload['file']['file_name']
);  
     
$this->db->insert('tb_campaign', $data);  
}
public function save_update_campaign($upload){
$id_campaign  = $this->input->post('id_campaign');
	$kategori = $this->input->post('input_kategori');
	$judul_campaign = $this->input->post('input_judul_campaign');
	$deskripsi	  = $this->input->post('input_deskripsi');
	$target_donasi	  = $this->input->post('input_target_donasi');
	$akhir_donasi	  = $this->input->post('input_akhir_donasi');
	$foto_campaign	  = $this->input->post('foto_campaign');    
$data = array( 
'id_campaign'=>$this->input->post('id_campaign'),     
'kategori'=>$this->input->post('input_kategori'),
'judul_campaign'=>$this->input->post('input_judul_campaign'),
'deskripsi' => $this->input->post('input_deskripsi'),
'target_donasi'=>$this->input->post('input_target_donasi'),
'akhir_donasi'=>$this->input->post('input_akhir_donasi'),
'foto_campaign'=>$upload['file']['file_name'],
); 
$where = array(
		'id_campaign' => $id_campaign
	);    
$this->db->where($where);
$this->db->update('tb_campaign',$data); 
}

/*------------------------- END CAMPAIGN -------------------------------------*/

/*------------------------- BEGIN GALDAN -------------------------------------*/
public function save_galdan($upload){    

$data = array(   
'id_user'=>$this->input->post('input_id_user'),
'judul_galdan'=>$this->input->post('input_judul_galdan'),
'kategori_galdan' => $this->input->post('input_kategori_galdan'),
'target_donasi'=>$this->input->post('input_target_donasi'),
'akhir_donasi'=>$this->input->post('input_akhir_donasi'),
'deskripsi'=>$this->input->post('input_deskripsi'),
'foto_utama'=>$upload['file']['file_name'],
// 'surat_ket'=>$upload['file']['file_name'],
'proposal'=>$upload['file']['file_name'],
'status'=>$this->input->post('input_status')
);  
     
$this->db->insert('tb_galangdana', $data);  
}

public function save_update_galdan($upload){
	$id_galangdana  = $this->input->post('id_galangdana');
	$id_user = $this->input->post('input_id_user');
	$judul_galdan = $this->input->post('input_judul_galdan');
	$kategori_galdan	  = $this->input->post('input_kategori_galdan');
	$target_donasi	  = $this->input->post('input_target_donasi');
	$akhir_donasi	  = $this->input->post('input_akhir_donasi');
	$deskripsi	  = $this->input->post('input_deskripsi');
	$foto_utama  = $this->input->post('foto_utama');
	$surat_ket = $this->input->post('surat_ket');
	$proposal = $this->input->post('proposal');
	$status	  = $this->input->post('input_status');    
$data = array( 
'id_galangdana'=>$this->input->post('id_galangdana'),     
'id_user'=>$this->input->post('input_id_user'),
'judul_galdan'=>$this->input->post('input_judul_galdan'),
'kategori_galdan' => $this->input->post('input_kategori_galdan'),
'target_donasi'=>$this->input->post('input_target_donasi'),
'akhir_donasi'=>$this->input->post('input_akhir_donasi'),
'deskripsi'=>$this->input->post('input_deskripsi'),
'foto_utama'=>$upload['file']['file_name'],
'surat_ket'=>$upload['file']['file_name'],     
'proposal'=>$upload['file']['file_name'],
'status'=>$this->input->post('input_status')
);   
$where = array(
		'id_galangdana' => $id_galangdana
	);    
$this->db->where($where);
$this->db->update('tb_galangdana',$data); 
}

/*------------------------- END GALDAN -------------------------------------*/


/*------------------------- BEGIN KESAN -------------------------------------*/
public function save_kesan($upload){    
$data = array(   
'nama_relawan'=>$this->input->post('input_nama_relawan'),
'kesan_pesan' => $this->input->post('input_kesan_pesan'),
'foto_relawan'=>$upload['file']['file_name']
);  
     
$this->db->insert('kesan_pesan', $data);  
}
public function save_update_kesan($upload){
$id_kesan  = $this->input->post('id_kesan');
	$nama_relawan = $this->input->post('input_nama_relawan');
	$kesan_pesan = $this->input->post('input_kesan_pesan');
	$foto_relawan	  = $this->input->post('foto_relawan');    
$data = array( 
'id_kesan'=>$this->input->post('id_kesan'),     
'nama_relawan'=>$this->input->post('input_nama_relawan'),
'judul_campaign'=>$this->input->post('input_judul_campaign'),
'kesan_pesan' => $this->input->post('input_kesan_pesan'),
'foto_relawan'=>$upload['file']['file_name'],
); 
$where = array(
		'id_kesan' => $id_kesan
	);    
$this->db->where($where);
$this->db->update('kesan_pesan',$data); 
}
/*------------------------- END KESAN -------------------------------------*/

/*------------------------- BEGIN PROGRAM -------------------------------------*/
public function save_program($upload){    
$data = array( 
'judul_program'=>$this->input->post('input_judul_program'),
'deskripsi'=>$this->input->post('input_deskripsi'),
'foto_program' => $upload['file']['file_name'],
);  
     
$this->db->insert('tb_program', $data);  
}
public function save_update_program($upload){
$id_program  = $this->input->post('id_program');
	$judul_program = $this->input->post('input_judul_program');
	$deskripsi	  = $this->input->post('input_deskripsi'); 
	$foto_program	  = $this->input->post('foto_program');   
$data = array( 
'id_program'=>$this->input->post('id_program'),
'judul_program'=>$this->input->post('input_judul_program'),
'deskripsi'=>$this->input->post('input_deskripsi'),
'foto_program' => $upload['file']['file_name'],
); 
$where = array(
		'id_program' => $id_program
	);    
$this->db->where($where);
$this->db->update('tb_program',$data); 
}
/*------------------------- END PROGRAM -------------------------------------*/

}