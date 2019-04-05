<?php

class c_detailMateri extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('m_materi');
    }
            
    function index(){
        $data['materi'] = $this->m_materi->getMateri();

        $this->template->load('header','detailMateri',$data);
    }
}
    
