<?php

class c_academy extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('m_materi');
    }
            
    function index(){
        $data['iklan'] = $this->m_materi->getIklan();
        $data['materi'] = $this->m_materi->getMateriTerbaru();

//         $siswa['data'] = $this->m_materi->jumSiswa();
        $this->template->load('header','academy',$data);
    }
    


    public function star(){
        $this->template->load('header','login');
    }
    
    public function totSiswa(){
         $this->db->select('materi_id');
         $this->db->from('tb_materi');
         $materi = $this->db->get();
         
         
         foreach($materi as $key)
          {
            $mod = $this->m_materi->jumSiswa($key->materi_id);
            
            if($mod > 0)
            {
              $tot=$mod;
            }
            else{
                echo 'data tidak ada';
            }
          }
          
          $field[] = (object) [      
           'jum' => $tot
        ]; 
          
       $data['jumSiswa'] = $field; 
       
//       $jum = array("materi_jum_siswa"=> $this->input->$data['jumSiswa']);
//       
//        $this->db->insert('tb_materi',$jum);
       
       echo json_encode($data['jumSiswa']);
    }
    
    public function search_keyword(){
        $data['iklan'] = $this->m_materi->getIklan();
      
       $keyword = $this->input->post("keyword");
       $data['results'] = $this->m_materi->search($keyword);
       
       $this->template->load('header','academySearch',$data);
    }

   
}