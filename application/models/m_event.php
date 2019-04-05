<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_event extends CI_model {

    public function getIklan(){
        
        $iklan = $this->db->query('SELECT * FROM tb_iklan_event;');
        return $iklan;
    }
    
    public function getEvent(){
         $this->db->select('*');
         $this->db->from('tb_event');
        $event = $this->db->get();
//        $materi = $this->db->query("SELECT * FROM tb_materi, tb_jenis_kelas WHERE tb_materi.materi_id = tb_jenis_kelas.jenis_kelas_id order by tb_materi.materi_tgl");
        return $event;
        
    }
}