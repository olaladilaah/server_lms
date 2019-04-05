<?php

class c_event extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('m_event');
    }
            
    function index(){
        $data['iklan'] = $this->m_event->getIklan();
        $data['event'] = $this->m_event->getEvent();

        $this->template->load('header','event',$data);
    }
}