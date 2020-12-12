<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_User');
        $this->load->library('form_validation');
        $this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Form Validation

		// Begin Login
		$result = $this->M_User->check_login($username,$password);
		$userinfo = $this->M_User->getUserInfo($username);
		if($result == TRUE) {
			//Session
			$session = array(
			        'id'  		=> $userinfo->id,
			        'level'  	=> $userinfo->level,
			        'nama'  	=> $userinfo->nama,
			        'foto'  	=> $userinfo->foto,
			        'username'  => $username,
			        'logged_in' => TRUE
			);

			$this->session->set_userdata($session);
			if ($this->session->userdata('level') == 'admin') {
				redirect("admin");
			}elseif ($this->session->userdata('level') == 'staff') {
				redirect("staff");
			}elseif ($this->session->userdata('level') == 'kepala') {
				redirect("kepala");
			}elseif ($this->session->userdata('level') == 'pimpinan') {
				redirect("pimpinan/karyawan");
			}
		} else {
			$this->session->set_flashdata('error_login', 'Username atau Password Salah');
			redirect("auth");
		}
	}

	public function logout() {		
		$this->session->sess_destroy();
		redirect("auth");
	}
}
