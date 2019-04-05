<?php

class c_contact extends CI_Controller {

    function __construct() {
        parent::__construct();
        }
    

    function index(){
    $this->template->load('header','contact');
    
    }
}
