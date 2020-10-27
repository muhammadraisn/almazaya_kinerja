<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	public function __construct()
	{		
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->vars['content'] = 'staff/dashboard';
		$this->load->view('index', $this->vars);
	}

	public function tambah()
	{
		// $sumber = $_FILES['userfile']['tmp_name'];
		// $target = 'upload/'.$_FILES['userfile']['name'];

		// if(move_uploaded_file($sumber, $target))
		// {
		//  echo "File Uploaded Successfully";
		//  echo "Uploaded File : 
		//  ";
		//  echo "<img src='$target'>";
		// }
		// else 
		// 	echo"Can't Upload Selected File ";
		$this->vars['content'] = 'staff/tambah';
		$this->load->view('index', $this->vars);
	}

	public function semua()
	{
		$this->vars['content'] = 'staff/semua';
		$this->load->view('index', $this->vars);
	}

	public function cetak()
	{
		$this->vars['content'] = 'staff/cetak';
		$this->load->view('index', $this->vars);
	}

	public function progress()
	{
		$this->vars['content'] = 'staff/progress';
		$this->load->view('index', $this->vars);
	}

	public function calender()
	{
		$this->vars['content'] = 'staff/calender';
		$this->load->view('index', $this->vars);
	}
}
