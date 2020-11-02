<?php
 
class Login_m extends CI_Model
{
 
    public function cek_login($username)
    {
 
        $hasil = $this->db->where('username', $username)->limit(1)->get('users');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    }
}
?>