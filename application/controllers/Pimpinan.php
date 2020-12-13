<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller {
	public function __construct()
	{		
		parent::__construct();
		$this->load->helper(array('form', 'url', 'tanggal'));
        $this->load->library('upload');
		if ($this->session->userdata['logged_in'] == FALSE) {
			redirect("auth");
		}
	}

	public function index()
	{
		$this->db->select('*');
		$this->db->from("kinerja");
		$this->db->order_by('tanggal', 'DESC');
		$data = $this->db->get();

		$this->vars['data'] = $data->result_array();

		$this->db->select("*");
		$this->db->from("kinerja");
		$this->db->where('tanggal', date('Y-m-d'));
		// $this->db->order_by('tanggal', 'DESC');
		$day = $this->db->get();

		$this->vars['day'] = $day->result_array();

		$this->db->select("*");
		$this->db->from("kinerja");
		$this->db->where('month(tanggal)', date('m'));
		// $this->db->order_by('tanggal', 'DESC');
		$month = $this->db->get();

		$this->vars['month'] = $month->result_array();

		$this->db->select("*");
		$this->db->from("kinerja");
		$this->db->where('status', 'Mulai');
		$this->db->or_where('status', 'Proses');
		$this->db->order_by('tanggal', 'ASC');
		$this->db->order_by('waktu', 'ASC');
		$progress = $this->db->get();

		$this->vars['progress'] = $progress->result_array();

		$this->vars['content'] = 'pimpinan/dashboard';
		$this->load->view('index', $this->vars);
	}

	public function tambah()
	{
		$this->vars['content'] = 'pimpinan/tambah';
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
		              	redirect('pimpinan/semua');
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
		              	redirect('pimpinan/semua');
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
		              	redirect('pimpinan/semua');
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
		              	redirect('pimpinan/semua');
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

		$this->vars['content'] = 'pimpinan/semua';
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

		$this->vars['content'] = 'pimpinan/semua';
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

		$this->vars['content'] = 'pimpinan/semua';
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

		$this->vars['content'] = 'pimpinan/semua';
		$this->load->view('index', $this->vars);
	}

	public function karyawan()
	{
		if (date('d') >=1 AND date('d') <=20) {
			if (date('m') == 1) {
				$bulan_buka = 12;
				$bulan_tutup = date('m');
			}else{
				$bulan_buka = date('m')-1;
				$bulan_tutup = date('m');
			}
		}else{
			if (date('m') == 12) {
				$bulan_buka = date('m');
				$bulan_tutup = 1;
			}else{
				$bulan_buka = date('m');
				$bulan_tutup = date('m')+1;
			}
		}

		$buka = date('Y-'.$bulan_buka.'-21');
		$tutup = date('Y-'.$bulan_tutup.'-20');

		$this->db->select("*");
		$this->db->from("users");
		$this->db->where('id !='.$this->session->userdata('id'));
		$this->db->order_by('ranking_saw', 'DESC');
		$data = $this->db->get();

		$this->db->select("id_user");
		$this->db->select("sum(jam) as jam");
		$this->db->from("absensi");
		$this->db->where('tanggal BETWEEN "'.$buka.'" AND "'.$tutup.'"');
		$this->db->group_by('id_user');
		$this->db->order_by('jam', 'DESC');
		$data_absensi = $this->db->get();

		$this->db->select("id_user");
		$this->db->select("sum(id_kategori*poin) as kinerja");
		$this->db->from("kinerja");
		$this->db->where('tanggal BETWEEN "'.$buka.'" AND "'.$tutup.'"');
		$this->db->group_by('id_user');
		$this->db->order_by('kinerja', 'DESC');
		$data_kinerja = $this->db->get();

		$this->vars['data'] = $data->result_array();
		$this->vars['data_absensi'] = $data_absensi->result_array();
		$this->vars['data_kinerja'] = $data_kinerja->result_array();

		$this->vars['max_data_absensi'] = $data_absensi->row();
		$this->vars['max_data_kinerja'] = $data_kinerja->row();
		// echo($this->vars['max_data_kinerja']->kinerja);
		foreach ($this->vars['data_absensi'] as $key => $value) {
			$normal_absensi = $value['jam']/$this->vars['max_data_absensi']->jam*50;
			// echo($normal_absensi.'<br>');
	      	$absensi = array(
	               'id_user' => $value['id_user'],
	               'absensi' => $normal_absensi,
	      		);
		  	$this->db->replace('saw', $absensi);
		}

		foreach ($this->vars['data_kinerja'] as $key => $value) {
			$normal_kinerja = $value['kinerja']/$this->vars['max_data_kinerja']->kinerja*50;
			// echo($normal_kinerja.'<br>');
	      	$kinerja = array(
	               'kinerja' => $normal_kinerja,
	      		);
		  	$this->db->update('saw', $kinerja, 'id_user ='.$value['id_user']);
		}

		$this->db->select("*");
		$this->db->from("saw");
		$saw = $this->db->get();

		$this->vars['saw'] = $saw->result_array();

		foreach ($this->vars['saw'] as $key => $value) {
			$normal = $value['absensi']+$value['kinerja'];
			// echo($normal.'<br>');
	      	$ranking = array(
	               'ranking_saw' => $normal,
	      		);
		  	$this->db->update('users', $ranking, 'id ='.$value['id_user']);
		}

		$this->vars['content'] = 'pimpinan/karyawan';
		$this->load->view('index', $this->vars);
	}

	public function cetak()
	{
		$this->vars['content'] = 'pimpinan/cetak';
		$this->load->view('index', $this->vars);
	}

	public function calender()
	{
		$this->vars['content'] = 'pimpinan/calender';
		$this->load->view('index', $this->vars);
	}
}
