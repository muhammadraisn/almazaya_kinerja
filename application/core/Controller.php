<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CI_Controller {

	private static $instance;
	public function __construct()
	{
		self::$instance =& $this;
		foreach (is_loaded() as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		$this->load =& load_class('Loader', 'core');

		$this->load->initialize();
		
		log_message('debug', "Controller Class Initialized");
	}

	public static function &get_instance()
	{
		return self::$instance;
	}

	public function cek_status()
	{
		$this->load->library('session');
		if($this->session->userdata('id') == NULL){
			$this->session->set_flashdata('error_login','Silahkan login terlebih dahulu untuk mengakses data.');
			redirect('login');
		}
	}
}