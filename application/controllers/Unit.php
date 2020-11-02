<?php
 
class Unit extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('unit_m');
        $this->cek_status();
    }
 
    public function index()
    {
        $data['categories'] = $this->unit_m->get('unit');
        $this->load->view('unit/index', $data);
    }
?>