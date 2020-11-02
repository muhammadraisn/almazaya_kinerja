<?php
 
class Login extends CI_Controller
 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_m');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
 
    public function index()
    {
        $this->load->view('login');
    }
 
    public function loginForm()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
 
        if ($this->form_validation->run() == FALSE) {
 
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('login');
         
        } else {
 
            $username = htmlspecialchars($this->input->post('username'));
            $pass = htmlspecialchars($this->input->post('password'));
            $cek_login = $this->login_m->cek_login($username);  
 
            if($cek_login == FALSE)
            {
 
                $this->session->set_flashdata('error_login', 'Username yang Anda masukan tidak terdaftar.');
                redirect('login');
 
            } else {
 
                if(password_verify($pass, $cek_login->password)){
                    $this->session->set_userdata('id', $cek_login->id);
                    $this->session->set_userdata('username', $cek_login->username);
                    $this->session->set_userdata('email', $cek_login->email);
                    $this->session->set_userdata('level', $cek_login->level); 
 
                    redirect('index');
 
                } else {
 
                    $this->session->set_flashdata('error_login', 'Username atau password yang Anda masukan salah.');
                    redirect('login');
 
                }
            }
        }
    }
 
    public function logout()
    {
        $this->session->sess_destroy();
        echo '<script>
            alert("Sukses! Anda berhasil logout."); 
            window.location.href="'.base_url('login').'";
            </script>';
    }
}