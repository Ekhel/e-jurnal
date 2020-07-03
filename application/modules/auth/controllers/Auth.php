<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller{
  function  __construct()
  {
      parent::__construct();
      $this->load->model('M_auth');
  }

  public function index()
  {
      $data['title'] = 'SICKAT | Login';
      $this->load->view('login',$data);
  }

  function login_proses()
  {
		$username = $this->input->post('username');
		$sandi = md5($this->input->post('sandi'));
		if (isset($username, $sandi)) {
			//cek user dan sandi di database
			if($this->M_auth->cek($username, $sandi) == TRUE){
				$admin = $this->M_auth->getAdmin($username, $sandi);
				$data['username'] = $username;
				$data['sandi'] = $sandi;
				$data['id_admin'] = $admin->id_admin;
				$data['level'] = $admin->level;
        $data['id_user'] = $admin->id_user;
				$data['nama_lengkap'] = $admin->nama_lengkap;
        $data['id_sekolah'] = $admin->id_sekolah;
				$data['login'] = TRUE;
				$this->session->set_userdata($data);
        if ($this->session->userdata('level')=='1'){
				redirect('user');
			  }
  			elseif ($this->session->userdata('level')=='2'){
          //helper_log("login", "Login ke applikasi");
  		  redirect('jurnal');
  			}
			}
			else {
				$this->session->set_flashdata('message', 'Nama dan sandi anda salah');
				redirect('auth');
			}
		}
		else {
			redirect('auth');
		}
	}

  function cek_login($user_level = ""){
		$status_login = $this->session->userdata('login');
		if (!isset($status_login) || $status_login != TRUE){
			redirect('login');
		}
		else {
      $this->nama = $this->session->userdata('nama');
      $this->global ['nama'] = $this->nama;
			if ($user_level) {
				if (is_array($user_level)) { //cek apakah $user_level merupakan jenis array
					if (!in_array($this->session->userdata('level'), $user_level)) {//cek apakah user_level yg login masuk dalam array $user_level
						redirect('jurnal');
					}
				}
				else {
					if ($this->session->userdata('level') != $user_level){
						redirect('login');
					}
				}
			}
		}
	}
  function logout(){
		$this->session->sess_destroy();
    //helper_log("logout", "Logout dari Applikasi");
		redirect('Home', 'refresh');
	}
}
