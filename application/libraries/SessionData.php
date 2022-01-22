<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class SessionData {
    
    var $CI = NULL;
    public function __construct() {
        $this->CI =& get_instance();
    }

     // Proteksi halaman
    public function cek_login() {
        if($this->CI->session->userdata('username') == '') {
            $this->CI->session->set_flashdata('error','Please login first');
            redirect('front');
        }
    }

}