<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepala extends CI_Controller {
	public function __construct()
	{		
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->vars['content'] = 'kepala/dashboard';
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
		$this->vars['content'] = 'kepala/tambah';
		$this->load->view('index', $this->vars);
	}

	public function semua()
	{
		$this->vars['content'] = 'kepala/semua';
		$this->load->view('index', $this->vars);
	}

	public function cetak()
	{
		$this->vars['content'] = 'kepala/cetak';
		$this->load->view('index', $this->vars);
	}

	public function progress()
	{
		$this->vars['content'] = 'kepala/progress';
		$this->load->view('index', $this->vars);
	}

	public function calender()
	{
		$this->vars['content'] = 'kepala/calender';
		$this->load->view('index', $this->vars);
	}
}
