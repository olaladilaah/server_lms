<?php

class c_login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("m_user");
    }
    
    function index(){
        $this->load->view('login');
    }
    
     function aksi_login(){
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        
        $where = array('user_email' => $email,
                        'user_password' => $pass);
        
        $cek = $this->m_user->cek_login("tb_user", $where)->num_rows();
        if($cek > 0){
            $data_session = array(
                
                'email' => $email,
                'status' => "login"
            );
            
            $this->session->set_userdata($data_session);
            
            redirect("c_home");
            
        } else {
            echo "Username dan password salah!";
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect("c_login");
    }
}
