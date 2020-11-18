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
		$this->vars['content'] = 'kepala/tambah';
		$this->load->view('index', $this->vars);
	}

	public function simpan()
	{
	  $id_user = $this->session->userdata('id');
	  $tanggal = date('Y-m-d');
	  $waktu = date('H:i:s');
      $kegiatan  = $this->input->post('kegiatan');

      // get gambar
      $config['upload_path'] = './upload/kegiatan/gambar';
            $config['allowed_types'] = '*';
      $config['encrypt_name']     = TRUE;
      $config['file_name'] = $_FILES['gambar']['name'];

      $this->upload->initialize($config);
      // $this->load->library('upload', $config);


      // $this->upload->initialize($config2);

	    if (!empty($_FILES['gambar']['name'])) {
	    	if (!empty($_FILES['dokumen']['name'])) {
		        if ( $this->upload->do_upload('gambar') ) {
			            $gambar = $this->upload->data();
					      // get dokumen
					      $config2['upload_path'] = './upload/kegiatan/dokumen';
					            $config2['allowed_types'] = '*';
					      $config2['encrypt_name']     = TRUE;
					      $config2['file_name'] = $_FILES['dokumen']['name'];

					      $this->upload->initialize($config2);
			        if ( $this->upload->do_upload('dokumen') ) {
			            $dokumen = $this->upload->data();
			            
				        $data = array(
			                          'id_user' => $id_user,
			                          'tanggal' => $tanggal,
			                          'kegiatan' => $kegiatan,
			                          'gambar' => $gambar['file_name'],
			                          'dokumen' => $dokumen['file_name'],
			                          'waktu' => $waktu,
			                        );

		        		$this->session->set_flashdata('success', 'Kegiatan sudah ditambahkan');
						$this->db->insert('kinerja', $data);
		              	redirect('staff/semua');
			        }else {
		              print_r($this->upload->display_errors());
		              // die("Gagal upload dokumen");
			        }
			    }else {
		              print_r($this->upload->display_errors());
		            // die("Gagal upload gambar");
			    }
		    }else{
		    	if ( $this->upload->do_upload('gambar') ) {
			            $gambar = $this->upload->data();
			            
				        $data = array(
			                          'id_user' => $id_user,
			                          'tanggal' => $tanggal,
			                          'kegiatan' => $kegiatan,
			                          'gambar' => $gambar['file_name'],
			                          'waktu' => $waktu,
			                        );

		        		$this->session->set_flashdata('success', 'Kegiatan sudah ditambahkan');
						$this->db->insert('kinerja', $data);
		              	redirect('staff/semua');
			        }else {
		              print_r($this->upload->display_errors());
			        }
		    }
	    }else {
	    	if (!empty($_FILES['dokumen']['name'])) {
					      // get dokumen
					      $config2['upload_path'] = './upload/kegiatan/dokumen';
					            $config2['allowed_types'] = '*';
					      $config2['encrypt_name']     = TRUE;
					      $config2['file_name'] = $_FILES['dokumen']['name'];

					      $this->upload->initialize($config2);
			        if ( $this->upload->do_upload('dokumen') ) {
			            $dokumen = $this->upload->data();
			            
				        $data = array(
			                          'id_user' => $id_user,
			                          'tanggal' => $tanggal,
			                          'kegiatan' => $kegiatan,
			                          'dokumen' => $dokumen['file_name'],
			                          'waktu' => $waktu,
			                        );

		        		$this->session->set_flashdata('success', 'Kegiatan sudah ditambahkan');
						$this->db->insert('kinerja', $data);
		              	redirect('staff/semua');
			        }else {
		              print_r($this->upload->display_errors());
		              // die("Gagal upload dokumen");
			        }
		    }else{
				        $data = array(
			                          'id_user' => $id_user,
			                          'tanggal' => $tanggal,
			                          'kegiatan' => $kegiatan,
			                          'waktu' => $waktu,
			                        );

		        		$this->session->set_flashdata('success', 'Kegiatan sudah ditambahkan');
						$this->db->insert('kinerja', $data);
		              	redirect('staff/semua');
		    }
	    }
	}

	public function semua()
	{
		$this->db->select('*');
		$this->db->from("kinerja");
		$this->db->where('id_user', $this->session->userdata('id'));
		$this->db->order_by('tanggal', 'DESC');
		$data = $this->db->get();

		$this->vars['data'] = $data->result_array();

		$this->vars['content'] = 'staff/semua';
		$this->load->view('index', $this->vars);
	}

	public function day()
	{
		$this->db->select("*");
		$this->db->from("kinerja");
		$this->db->where('id_user', $this->session->userdata('id'));
		$this->db->where('tanggal', date('Y-m-d'));
		// $this->db->order_by('tanggal', 'DESC');
		$data = $this->db->get();

		$this->vars['data'] = $data->result_array();
		// $this->vars['diproses'] = $diproses->result_array();
		// $this->vars['selesai'] = $selesai->result_array();

		$this->vars['content'] = 'staff/semua';
		$this->load->view('index', $this->vars);
	}

	public function month()
	{
		$this->db->select("*");
		$this->db->from("kinerja");
		$this->db->where('id_user', $this->session->userdata('id'));
		$this->db->where('month(tanggal)', date('m'));
		// $this->db->order_by('tanggal', 'DESC');
		$data = $this->db->get();

		$this->vars['data'] = $data->result_array();
		// $this->vars['diproses'] = $diproses->result_array();
		// $this->vars['selesai'] = $selesai->result_array();

		$this->vars['content'] = 'staff/semua';
		$this->load->view('index', $this->vars);
	}

	public function progress()
	{

		$this->db->select("*");
		$this->db->from("kinerja");
		// $this->db->where('id_user', $this->session->userdata('id'));
		$this->db->where('status', 'Mulai');
		$this->db->or_where('status', 'Proses');
		$this->db->having('id_user', $this->session->userdata('id'));
		$this->db->order_by('tanggal', 'ASC');
		$this->db->order_by('waktu', 'ASC');
		$data = $this->db->get();

		// $this->vars['data'] = $data->result_array();
		$this->vars['data'] = $data->result_array();
		// $this->vars['selesai'] = $selesai->result_array();

		$this->vars['content'] = 'staff/semua';
		$this->load->view('index', $this->vars);
	}

	public function cetak()
	{
		$this->vars['content'] = 'kepala/cetak';
		$this->load->view('index', $this->vars);
	}

	public function calender()
	{
		$this->vars['content'] = 'kepala/calender';
		$this->load->view('index', $this->vars);
	}
}
