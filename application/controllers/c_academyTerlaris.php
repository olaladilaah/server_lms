<?php

class c_academyTerlaris extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('m_materi');
    }
            
    function index(){
        $data['iklan'] = $this->m_materi->getIklan();
        $data['materi'] = $this->m_materi->getMateriTerlaris();

//         $siswa['data'] = $this->m_materi->jumSiswa();
        $this->template->load('header','academy',$data);
    }
}