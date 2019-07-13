<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller {

/*------------------------- BEGIN AKTIVITAS -------------------------------------*/
	public function do_insert_aktivitas(){
	$id_aktivitas = $_POST['id_aktivitas'];
	$kategori = $_POST['kategori'];
	$judul_aktivitas = $_POST['judul_aktivitas'];
	$narasi = $_POST['narasi'];
	$foto_aktivitas = $_POST['foto_aktivitas'];
	$data = array(
			'id_aktivitas' => $id_aktivitas,
			'kategori' => $kategori,
			'judul_aktivitas' => $judul_aktivitas,
			'narasi' => $narasi,
			'foto_aktivitas' => $foto_aktivitas
	);
	$where = array("id_aktivitas"=>$id_aktivitas);
		$tambah = $this->Model->insertdata('tb_aktivitas', $data,$where);
		if($tambah>0){
			$this->session->set_flashdata("pesan","Data Berhasil Dimasukkan");
			redirect('Admin/dataaktivitas');
		}else{
			echo 'Gagal disimpan';
		}
	}

	public function form_edit_aktivitas($id_aktivitas){
		$akt = $this->Model->getAktivitas("where id_aktivitas = '$id_aktivitas'");
		$data_edit= array(
			"id_aktivitas" =>$akt[0]['id_aktivitas'],
			"kategori" =>$akt[0]['kategori'],
			"judul_aktivitas" =>$akt[0]['judul_aktivitas'],
			"narasi" =>$akt[0]['narasi'],
			"foto_aktivitas" =>$akt[0]['foto_aktivitas'],
		);
		$this->load->view('Admin\form_edit_aktivitas',$data_edit);
	}

	public function do_edit_aktivitas(){
		$id_aktivitas= $_POST['id_aktivitas'];
		$kategori = $_POST['kategori'];
		$judul_aktivitas = $_POST['judul_aktivitas'];
		$narasi = $_POST['narasi'];
		$foto_aktivitas = $_POST['foto_aktivitas'];
		$data_update = array(
			'id_aktivitas' => $id_aktivitas,
			'kategori' => $kategori,
			'judul_aktivitas' => $judul_aktivitas,
			'narasi' => $narasi,
			'foto_aktivitas' => $foto_aktivitas
		);

		$where = array('id_aktivitas'=>$id_aktivitas);
		$edit = $this->Model->edit_data('tb_aktivitas', $data_update, $where);
		if($edit > 0){
			$this->session->set_flashdata("pesan","Update Data Sukses");
			redirect('Admin/dataaktivitas');
		}else{
			echo "<h2>UpdateGagal<h2/>";
		} 
	}

	public function do_delete_aktivitas($id_aktivitas){
		$where= array('id_aktivitas'=>$id_aktivitas);
		$hapus = $this->Model->hapusData('tb_aktivitas', $where);
		if($hapus > 0){
			redirect('Admin/dataaktivitas');
		}else{
			echo 'Gagal dihapus';
		}
	}

/*------------------------- END AKTIVITAS -------------------------------------*/

/*------------------------- BEGIN RELAWAN -------------------------------------*/	

public function do_insert_relawan(){
	$id_relawan = $_POST['id_relawan'];
	$id_user = $_POST['id_user'];
	$program_relawan = $_POST['program_relawan'];
	$nama_panjang = $_POST['nama_panjang'];
	$nama_panggilan = $_POST['nama_panggilan'];
	$ttl = $_POST['ttl'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$no_telp = $_POST['no_telp'];
	$motto = $_POST['motto'];
	$satu_kata = $_POST['satu_kata'];
	$motivasi = $_POST['motivasi'];
	$prestasi = $_POST['prestasi'];
	$riwayat_kepanitiaan = $_POST['riwayat_kepanitiaan'];
	$riwayat_organisasi = $_POST['riwayat_organisasi'];
	$kelayakan = $_POST['kelayakan'];
	$alasan = $_POST['alasan'];
	$keinginan = $_POST['keinginan'];
	$pandangan = $_POST['pandangan'];
	$ktp = $_POST['ktp'];
	$foto_relawan = $_POST['foto_relawan'];
	$instagram = $_POST['instagram'];
	$status_relawan = $_POST['status_relawan'];
	$data = array(
			'id_relawan' => $id_relawan,
			'id_user' => $id_user,
			'program_relawan' => $program_relawan,
			'nama_panjang' => $nama_panjang,
			'nama_panggilan' => $nama_panggilan,
			'ttl' => $ttl,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'email' => $email,
			'no_telp' => $no_telp,
			'motto' => $motto,
			'satu_kata' => $satu_kata,
			'motivasi' => $motivasi,
			'prestasi' => $prestasi,
			'riwayat_kepanitiaan' => $riwayat_kepanitiaan,
			'riwayat_organisasi' => $riwayat_organisasi,
			'kelayakan' => $kelayakan,
			'alasan' => $alasan,
			'keinginan' => $keinginan,
			'pandangan' => $pandangan,
			'ktp' => $ktp,
			'foto_relawan' => $foto_relawan,
			'instagram' => $instagram,
			'status_relawan' => $status_relawan
	);
	$where = array("id_relawan"=>$id_relawan);
		$tambah = $this->Model->insertdata('tb_relawan', $data,$where);
		if($tambah>0){
			$this->session->set_flashdata("pesan","Data Berhasil Dimasukkan");
			redirect('Admin/datarelawan');
		}else{
			echo 'Gagal disimpan';
		}
	}

	public function form_edit_relawan($id_relawan){
		$relawan = $this->Model->getRelawan("where id_relawan = '$id_relawan'");
		$data_edit = array(
			"id_relawan" =>$relawan[0]['id_relawan'],
			"id_user" =>$relawan[0]['id_user'],
			"program_relawan" =>$relawan[0]['program_relawan'],
			"nama_panjang" =>$relawan[0]['nama_panjang'],
			"nama_panggilan" =>$relawan[0]['nama_panggilan'],
			"ttl" =>$relawan[0]['ttl'],
			"jenis_kelamin" =>$relawan[0]['jenis_kelamin'],
			"alamat" =>$relawan[0]['alamat'],
			"email" =>$relawan[0]['email'],
			"no_telp" =>$relawan[0]['no_telp'],
			"motto" =>$relawan[0]['motto'],
			"satu_kata" =>$relawan[0]['satu_kata'],
			"motivasi" =>$relawan[0]['motivasi'],
			"prestasi" =>$relawan[0]['prestasi'],
			"riwayat_kepanitiaan" =>$relawan[0]['riwayat_kepanitiaan'],
			"riwayat_organisasi" =>$relawan[0]['riwayat_organisasi'],
			"kelayakan" =>$relawan[0]['kelayakan'],
			"alasan" =>$relawan[0]['alasan'],
			"keinginan" =>$relawan[0]['keinginan'],
			"pandangan" =>$relawan[0]['pandangan'],
			"ktp" =>$relawan[0]['ktp'],
			"foto_relawan" =>$relawan[0]['foto_relawan'],
			"instagram" =>$relawan[0]['instagram'],
			"status_relawan" =>$relawan[0]['status_relawan']
		);
		$this->load->view('Admin\form_edit_relawan',$data_edit);
	}

	public function do_edit_relawan(){
	$id_relawan = $_POST['id_relawan'];
	$id_user = $_POST['id_user'];
	$program_relawan = $_POST['program_relawan'];
	$nama_panjang = $_POST['nama_panjang'];
	$nama_panggilan = $_POST['nama_panggilan'];
	$ttl = $_POST['ttl'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$no_telp = $_POST['no_telp'];
	$motto = $_POST['motto'];
	$satu_kata = $_POST['satu_kata'];
	$motivasi = $_POST['motivasi'];
	$prestasi = $_POST['prestasi'];
	$riwayat_kepanitiaan = $_POST['riwayat_kepanitiaan'];
	$riwayat_organisasi = $_POST['riwayat_organisasi'];
	$kelayakan = $_POST['kelayakan'];
	$alasan = $_POST['alasan'];
	$keinginan = $_POST['keinginan'];
	$pandangan = $_POST['pandangan'];
	$ktp = $_POST['ktp'];
	$foto_relawan = $_POST['foto_relawan'];
	$instagram = $_POST['instagram'];
	$status_relawan = $_POST['status_relawan'];
	$data = array(
			'id_relawan' => $id_relawan,
			'id_user' => $id_user,
			'program_relawan' => $program_relawan,
			'nama_panjang' => $nama_panjang,
			'nama_panggilan' => $nama_panggilan,
			'ttl' => $ttl,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'email' => $email,
			'no_telp' => $no_telp,
			'motto' => $motto,
			'satu_kata' => $satu_kata,
			'motivasi' => $motivasi,
			'prestasi' => $prestasi,
			'riwayat_kepanitiaan' => $riwayat_kepanitiaan,
			'riwayat_organisasi' => $riwayat_organisasi,
			'kelayakan' => $kelayakan,
			'alasan' => $alasan,
			'keinginan' => $keinginan,
			'pandangan' => $pandangan,
			'ktp' => $ktp,
			'foto_relawan' => $foto_relawan,
			'instagram' => $instagram,
			'status_relawan' => $status_relawan
	);

		$where = array('id_relawan'=>$id_relawan);
		$edit = $this->Model->edit_data('tb_relawan', $data_update, $where);
		if($edit > 0){
			$this->session->set_flashdata("pesan","Update Data Sukses");
			redirect('Admin/datarelawan');
		}else{
			echo "<h2>UpdateGagal<h2/>";
		}
	}

	public function do_delete_relawan($id_relawan){
		$where= array('id_relawan'=>$id_relawan);
		$hapus = $this->Model->hapusData('tb_relawan', $where);
		if($hapus > 0){
			redirect('Admin/datarelawan');
		}else{
			echo 'Gagal dihapus';
		}
	}
/*------------------------- END RELAWAN -------------------------------------*/	

/*------------------------- BEGIN CAMPAIGN-------------------------------------*/
	public function do_insert_campaign(){
	$id_campaign = $_POST['id_campaign'];
	$kategori = $_POST['kategori'];
	$judul_campaign = $_POST['judul_campaign'];
	$deskripsi = $_POST['deskripsi'];
	$target_donasi = $_POST['target_donasi'];
	$akhir_donasi = $_POST['akhir_donasi'];
	$foto_campaign = $_POST['foto_campaign'];
	$data = array(
			'id_campaign' => $id_campaign,
			'kategori' => $kategori,
			'judul_campaign' => $judul_campaign,
			'deskripsi' => $deskripsi,
			'target_donasi' => $target_donasi,
			'akhir_donasi' => $akhir_donasi,
			'foto_campaign' => $foto_campaign
	);
	$where = array("id_campaign"=>$id_campaign);
		$tambah = $this->Model->insertdata('tb_campaign', $data,$where);
		if($tambah>0){
			$this->session->set_flashdata("pesan","Data Berhasil Dimasukkan");
			redirect('Admin/datacampaign');
		}else{
			echo 'Gagal disimpan';
		}
	}

	public function form_edit_campaign($id_campaign){
		$campaign = $this->Model->getCampaign("where id_campaign = '$id_campaign'");
		$data_edit = array(
			"id_campaign" =>$campaign[0]['id_campaign'],
			"kategori" =>$campaign[0]['kategori'],
			"judul_campaign" =>$campaign[0]['judul_campaign'],
			"deskripsi" =>$campaign[0]['deskripsi'],
			"target_donasi" =>$campaign[0]['target_donasi'],
			"akhir_donasi" =>$campaign[0]['akhir_donasi'],
			"foto_campaign" =>$campaign[0]['foto_campaign']
		);
		$this->load->view('Admin\form_edit_campaign',$data_edit);
	}

	public function do_edit_campaign(){
		$id_campaign = $_POST['id_campaign'];
	$kategori = $_POST['kategori'];
	$judul_campaign = $_POST['judul_campaign'];
	$deskripsi = $_POST['deskripsi'];
	$target_donasi = $_POST['target_donasi'];
	$akhir_donasi = $_POST['akhir_donasi'];
	$foto_campaign = $_POST['foto_campaign'];
	$data = array(
			'id_campaign' => $id_campaign,
			'kategori' => $kategori,
			'judul_campaign' => $judul_campaign,
			'deskripsi' => $deskripsi,
			'target_donasi' => $target_donasi,
			'akhir_donasi' => $akhir_donasi,
			'foto_campaign' => $foto_campaign
	);

		$where = array('id_campaign'=>$id_campaign);
		$edit = $this->Model->edit_data('tb_campaign', $data_update, $where);
		if($edit > 0){
			$this->session->set_flashdata("pesan","Update Data Sukses");
			redirect('Admin/datacampaign');
		}else{
			echo "<h2>UpdateGagal<h2/>";
		} 
	}

	public function do_delete_campaign($id_campaign){
		$where= array('id_campaign'=>$id_campaign);
		$hapus = $this->Model->hapusData('tb_campaign', $where);
		if($hapus > 0){
			redirect('Admin/datacampaign');
		}else{
			echo 'Gagal dihapus';
		}
	}
/*------------------------- END CAMPAIGN -------------------------------------*/

/*------------------------- BEGIN GALDAN -------------------------------------*/
public function do_insert_dana(){
	$id_galangdana = $_POST['id_galangdana'];
	$id_user = $_POST['id_user'];
	$judul_galdan = $_POST['judul_galdan'];
	$kategori_galdan = $_POST['kategori_galdan'];
	$target_donasi = $_POST['target_donasi'];
	$akhir_donasi = $_POST['akhir_donasi'];
	$deskripsi = $_POST['deskripsi'];
	$foto_utama = $_POST['foto_utama'];
	$surat_ket = $_POST['surat_ket'];
	$proposal = $_POST['proposal'];
	$status = $_POST['status'];
	$data = array(
			'id_galangdana' => $id_galangdana,
			'id_user' => $id_user,
			'judul_galdan' => $judul_galdan,
			'kategori_galdan' => $kategori_galdan,
			'target_donasi' => $target_donasi,
			'akhir_donasi' => $akhir_donasi,
			'deskripsi' => $deskripsi,
			'foto_utama' => $foto_utama,
			'surat_ket' => $surat_ket,
			'proposal' => $proposal,
			'status' => $status
	);
	$where = array("id_galangdana"=>$id_galangdana);
		$tambah = $this->Model->insertdata('tb_galangdana', $data,$where);
		if($tambah>0){
			$this->session->set_flashdata("pesan","Data Berhasil Dimasukkan");
			redirect('User/dana');
		}else{
			echo 'Gagal disimpan';
		}
	}

	public function form_edit_dana($id_galangdana){
		$dana = $this->Model->getGalangdana("where id_galangdana = '$id_galangdana'");
		$data_edit = array(
			"id_galangdana" =>$dana[0]['id_galangdana'],
			"id_user" =>$dana[0]['id_user'],
			"judul_galdan" =>$dana[0]['judul_galdan'],
			"kategori_galdan" =>$dana[0]['kategori_galdan'],
			"target_donasi" =>$dana[0]['target_donasi'],
			"akhir_donasi" =>$dana[0]['akhir_donasi'],
			"deskripsi" =>$dana[0]['deskripsi'],
			"foto_utama" =>$dana[0]['foto_utama'],
			"surat_ket" =>$dana[0]['surat_ket'],
			"proposal" =>$dana[0]['proposal'],
			"status" =>$dana[0]['status']
		);
		$this->load->view('Admin\form_edit_dana',$data_edit);
	}

	public function do_edit_dana(){
	$id_galangdana = $_POST['id_galangdana'];
	$id_user = $_POST['id_user'];
	$judul_galdan = $_POST['judul_galdan'];
	$kategori_galdan = $_POST['kategori_galdan'];
	$target_donasi = $_POST['target_donasi'];
	$akhir_donasi = $_POST['akhir_donasi'];
	$deskripsi = $_POST['deskripsi'];
	$foto_utama = $_POST['foto_utama'];
	$surat_ket = $_POST['surat_ket'];
	$proposal = $_POST['proposal'];
	$status = $_POST['status'];
	$data_update = array(
			'id_galangdana' => $id_galangdana,
			'id_user' => $id_user,
			'judul_galdan' => $judul_galdan,
			'kategori_galdan' => $kategori_galdan,
			'target_donasi' => $target_donasi,
			'akhir_donasi' => $akhir_donasi,
			'deskripsi' => $deskripsi,
			'foto_utama' => $foto_utama,
			'surat_ket' => $surat_ket,
			'proposal' => $proposal,
			'status' => $status
	);

		$where = array('id_galangdana'=>$id_galangdana);
		$edit = $this->Model->edit_data('tb_galangdana', $data_update, $where);
		if($edit > 0){
			$this->session->set_flashdata("pesan","Update Data Sukses");
			redirect('Admin/datagalangdana');
		}else{
			echo "<h2>UpdateGagal<h2/>";
		} 
	}

	public function do_delete_dana($id_galangdana){
		$where= array('id_galangdana'=>$id_galangdana);
		$hapus = $this->Model->hapusData('tb_galangdana', $where);
		if($hapus > 0){
			redirect('Admin/datagalangdana');
		}else{
			echo 'Gagal dihapus';
		}
	}
	/*------------------------- END GALDAN -------------------------------------*/

	/*------------------------- BEGIN USER -------------------------------------*/
	public function do_insert_user(){
	$id_user = $_POST['id_user'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$data = array(
			'id_user' => $id_user,
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'email' => $email
	);
	$where = array("id_user"=>$id_user);
		$tambah = $this->Model->insertdata('tb_user', $data,$where);
		if($tambah>0){
			$this->session->set_flashdata("pesan","Data Berhasil Dimasukkan");
			redirect('Admin/datauser');
		}else{
			echo 'Gagal disimpan';
		}
	}

	public function form_edit_user($id_user){
		$user = $this->Model->getUser("where id_user = '$id_user'");
		$data_edit = array(
			"id_user" =>$user[0]['id_user'],
			"username" =>$user[0]['username'],
			"password" =>$user[0]['password'],
			"nama" =>$user[0]['nama'],
			"email" =>$user[0]['email'],
		);
		$this->load->view('Admin\form_edit_user',$data_edit);
	}

	public function do_edit_user(){
		$id_user= $_POST['id_user'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$data_update = array(
			'id_user' => $id_user,
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'email' => $email
		);

		$where = array('id_user'=>$id_user);
		$edit = $this->Model->edit_data('tb_user', $data_update, $where);
		if($edit > 0){
			$this->session->set_flashdata("pesan","Update Data Sukses");
			redirect('Admin/datauser');
		}else{
			echo "<h2>UpdateGagal<h2/>";
		} 
	}

	public function do_delete_user($id_user){
		$where= array('id_user'=>$id_user);
		$hapus = $this->Model->hapusData('tb_user', $where);
		if($hapus > 0){
			redirect('Admin/datauser');
		}else{
			echo 'Gagal dihapus';
		}
	}

	/*------------------------- END USER -------------------------------------*/

	/*------------------------- BEGIN DONASI -------------------------------------*/
	public function do_insert_donasi(){
	$id_donasi = $_POST['id_donasi'];
	$id_campaign = $_POST['id_campaign'];
	$id_user = $_POST['id_user'];
	$nama_donatur = $_POST['nama_donatur'];
	$nominal = $_POST['nominal'];
	$komentar = $_POST['komentar'];
	$bukti_tf = $_POST['bukti_tf'];
	$pilih_bank = $_POST['pilih_bank'];
	$tgl_tf = $_POST['tgl_tf'];
	$status = $_POST['status'];
	$data = array(
			'id_donasi' => $id_donasi,
			'id_campaign' => $id_campaign,
			'id_user' => $id_user,
			'nama_donatur' => $nama_donatur,
			'nominal' => $nominal,
			'komentar' => $komentar,
			'bukti_tf' => $bukti_tf,
			'pilih_bank' => $pilih_bank,
			'tgl_tf' => $tgl_tf,
			'status' => $status
	);
	$where = array("id_donasi"=>$id_donasi);
		$tambah = $this->Model->insertdata('tb_donasi', $data,$where);
		if($tambah>0){
			$this->session->set_flashdata("pesan","Data Berhasil Dimasukkan");
			redirect('Admin/datadonasi');
		}else{
			echo 'Gagal disimpan';
		}
	}

	public function form_edit_donasi($id_donasi){
		$donasi = $this->Model->getDonasi("where id_donasi = '$id_donasi'");
		$data_edit = array(
			"id_donasi" =>$donasi[0]['id_donasi'],
			"id_campaign" =>$donasi[0]['id_campaign'],
			"id_user" =>$donasi[0]['id_user'],
			"nama_donatur" =>$donasi[0]['nama_donatur'],
			"nominal" =>$donasi[0]['nominal'],
			"komentar" =>$donasi[0]['komentar'],
			"bukti_tf" =>$donasi[0]['bukti_tf'],
			"pilih_bank" =>$donasi[0]['pilih_bank'],
			"tgl_tf" =>$donasi[0]['tgl_tf'],
			"status" =>$donasi[0]['status']
		);
		$this->load->view('Admin\form_edit_donasi',$data_edit);
	}

	public function do_edit_donasi(){
		$id_donasi = $_POST['id_donasi'];
	$id_campaign = $_POST['id_campaign'];
	$id_user = $_POST['id_user'];
	$nama_donatur = $_POST['nama_donatur'];
	$nominal = $_POST['nominal'];
	$komentar = $_POST['komentar'];
	$bukti_tf = $_POST['bukti_tf'];
	$pilih_bank = $_POST['pilih_bank'];
	$tgl_tf = $_POST['tgl_tf'];
	$status = $_POST['status'];
	$data = array(
			'id_donasi' => $id_donasi,
			'id_campaign' => $id_campaign,
			'id_user' => $id_user,
			'nama_donatur' => $nama_donatur,
			'nominal' => $nominal,
			'komentar' => $komentar,
			'bukti_tf' => $bukti_tf,
			'pilih_bank' => $pilih_bank,
			'tgl_tf' => $tgl_tf,
			'status' => $status
		);

		$where = array('id_donasi'=>$id_donasi);
		$edit = $this->Model->edit_data('tb_donasi', $data_update, $where);
		if($edit > 0){
			$this->session->set_flashdata("pesan","Update Data Sukses");
			redirect('Admin/datadonasi');
		}else{
			echo "<h2>UpdateGagal<h2/>";
		} 
	}

	public function do_delete_donasi($id_donasi){
		$where= array('id_donasi'=>$id_donasi);
		$hapus = $this->Model->hapusData('tb_donasi', $where);
		if($hapus > 0){
			redirect('Admin/datadonasi');
		}else{
			echo 'Gagal dihapus';
		}
	}

/*------------------------- END DONASI -------------------------------------*/

/*------------------------- BEGIN PROGRAM -------------------------------------*/
public function do_insert_program(){
	$id_program = $_POST['id_program'];
	$judul_program = $_POST['judul_program'];
	$deskripsi = $_POST['deskripsi'];
	$foto_program = $_POST['foto_program'];
	$data = array(
			'id_program' => $id_program,
			'judul_program' => $judul_program,
			'deskripsi' => $deskripsi,
			'foto_program' => $foto_program
	);
	$where = array("id_program"=>$id_program);
		$tambah = $this->Model->insertdata('tb_program', $data,$where);
		if($tambah>0){
			$this->session->set_flashdata("pesan","Data Berhasil Dimasukkan");
			redirect('Admin/dataprogram');
		}else{
			echo 'Gagal disimpan';
		}
	}

	public function form_edit_program($id_program){
		$campaign = $this->Model->getProgram("where id_program = '$id_program'");
		$data_edit = array(
			"id_program" =>$campaign[0]['id_program'],
			"judul_program" =>$campaign[0]['judul_program'],
			"deskripsi" =>$campaign[0]['deskripsi'],
			"foto_program" =>$campaign[0]['foto_program']
		);
		$this->load->view('Admin\form_edit_program',$data_edit);
	}

	public function do_edit_program($id_program){
		$id_program = $_POST['id_program'];
	$judul_program = $_POST['judul_program'];
	$deskripsi = $_POST['deskripsi'];
	$foto_program = $_POST['foto_program'];
	$data = array(
			'id_program' => $id_program,
			'judul_program' => $judul_program,
			'deskripsi' => $deskripsi,
			'foto_program' => $foto_program
	);

		$where = array('id_program'=>$id_program);
		$edit = $this->Model->edit_data('tb_program', $data_update, $where);
		if($edit > 0){
			$this->session->set_flashdata("pesan","Update Data Sukses");
			redirect('Admin/dataprogram');
		}else{
			echo "<h2>UpdateGagal<h2/>";
		} 
	}

	public function do_delete_program($id_program){
		$where= array('id_program'=>$id_program);
		$hapus = $this->Model->hapusData('tb_program', $where);
		if($hapus > 0){
			redirect('Admin/dataprogram');
		}else{
			echo 'Gagal dihapus';
		}
	}

/*------------------------- END PROGRAM -------------------------------------*/

/*------------------------- BEGIN KESAN -------------------------------------*/
public function do_insert_kesan(){
	$id_kesan = $_POST['id_kesan'];
	$nama_relawan = $_POST['nama_relawan'];
	$kesan_pesan = $_POST['kesan_pesan'];
	$foto_relawan = $_POST['foto_relawan'];
	$data = array(
			'id_kesan' => $id_kesan,
			'nama_relawan' => $nama_relawan,
			'kesan_pesan' => $kesan_pesan,
			'foto_relawan' => $foto_relawan
	);
	$where = array("id_kesan"=>$id_kesan);
		$tambah = $this->Model->insertdata('kesan_pesan', $data,$where);
		if($tambah>0){
			$this->session->set_flashdata("pesan","Data Berhasil Dimasukkan");
			redirect('Admin/datakesan');
		}else{
			echo 'Gagal disimpan';
		}
	}

	public function form_edit_kesan($id_kesan){
		$kesan = $this->Model->getKesan("where id_kesan = '$id_kesan'");
		$data_edit = array(
			"id_kesan" =>$kesan[0]['id_kesan'],
			"nama_relawan" =>$kesan[0]['nama_relawan'],
			"kesan_pesan" =>$kesan[0]['kesan_pesan'],
			"foto_relawan" =>$kesan[0]['foto_relawan']
		);
		$this->load->view('Admin\form_edit_kesan',$data_edit);
	}

	public function do_edit_kesan($id_kesan){
		$id_kesan = $_POST['id_kesan'];
	$nama_relawan = $_POST['nama_relawan'];
	$kesan_pesan = $_POST['kesan_pesan'];
	$foto_relawan = $_POST['foto_relawan'];
	$data = array(
			'id_kesan' => $id_kesan,
			'nama_relawan' => $nama_relawan,
			'kesan_pesan' => $kesan_pesan,
			'foto_relawan' => $foto_relawan
	);

		$where = array('id_kesan'=>$id_kesan);
		$edit = $this->Model->edit_data('kesan_pesan', $data_update, $where);
		if($edit > 0){
			$this->session->set_flashdata("pesan","Update Data Sukses");
			redirect('Admin/datakesan');
		}else{
			echo "<h2>UpdateGagal<h2/>";
		} 
	}

	public function do_delete_kesan($id_kesan){
		$where= array('id_kesan'=>$id_kesan);
		$hapus = $this->Model->hapusData('kesan_pesan', $where);
		if($hapus > 0){
			redirect('Admin/datakesan');
		}else{
			echo 'Gagal dihapus';
		}
	}

/*------------------------- END KESAN -------------------------------------*/
}