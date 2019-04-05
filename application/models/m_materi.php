<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_materi extends CI_model {

    public function getIklan(){
        
        $iklan = $this->db->query('SELECT * FROM tb_iklan_materi;');
        return $iklan;
    }
    
    public function getMateriTerbaru(){
         $this->db->select('*');
         $this->db->from('tb_materi, tb_jenis_kelas');
        $this->db->where('tb_jenis_kelas.jenis_kelas_id=tb_materi.jenis_kelas_id');
        $this->db->order_by('tb_materi.materi_tgl DESC');
        $materi = $this->db->get();
//        $materi = $this->db->query("SELECT * FROM tb_materi, tb_jenis_kelas WHERE tb_materi.materi_id = tb_jenis_kelas.jenis_kelas_id order by tb_materi.materi_tgl");
        return $materi;
        
    }
    
    public function getMateriTerlaris(){
         $this->db->select('*');
         $this->db->from('tb_materi, tb_jenis_kelas');
        $this->db->where('tb_jenis_kelas.jenis_kelas_id=tb_materi.jenis_kelas_id');
        $this->db->order_by('tb_materi.materi_jum_siswa DESC');
        $materi = $this->db->get();
//        $materi = $this->db->query("SELECT * FROM tb_materi, tb_jenis_kelas WHERE tb_materi.materi_id = tb_jenis_kelas.jenis_kelas_id order by tb_materi.materi_tgl");
        return $materi;

    }
    
    public function getMateri(){
         $this->db->select('*');
         $this->db->from('tb_materi');
        $materi = $this->db->get();
//        $materi = $this->db->query("SELECT * FROM tb_materi, tb_jenis_kelas WHERE tb_materi.materi_id = tb_jenis_kelas.jenis_kelas_id order by tb_materi.materi_tgl");
        return $materi;

    }
    
    public function getFavorite(){
        
    }
    

    public function jumSiswa($id)
    {
        $this->db->select('tb_belajar.materi_id');
        $this->db->where('materi_id',$id);
        $query = $this->db->get('tb_belajar');
        
        if($query->num_rows()>0)
        {
         return $query->num_rows();
        }
        else{
            return 0;
        }
        
    }
    
    public function jumId($id)
    {
        $this->db->select('tb_materi.materi_id');
        $this->db->where('materi_id',$id);
        $query = $this->db->get('tb_materi');
        
        if($query->num_rows()>0)
        {
         return $query->num_rows();
        }
        else{
            return 0;
        }
        
    }
    
    function search($keyword){
        $this->db->select('*');
        $this->db->from('tb_materi');
        $this->db->like('materi_nama', $keyword);
        return $this->db->get()->result();
    }


//     public function jumSiswa(){
//      $sql = $this->db->query('SELECT * FROM tb_materi;');
//     
//     //getting images 
//     $result = $this->db->count_all_result();
//     
//     
//     //traversing through all the rows 
//     while($row = mysqli_fetch_array($result)){
//         $temp = array(); 
//         $temp['materi_id']=$row['materi_id'];
//         $temp['materi_nama']=$row['materi_nama'];
//         $temp['materi_deskripsi']=$row['materi_deskripsi'];
//         $temp['materi_jml_siswa']=$row['materi_jml_siswa'];
//         $temp['materi_platform']=$row['materi_platform'];
//         $temp['materi_gambar']=$row['materi_gambar'];
//         $temp['jenis_kelas_id']=$row['jenis_kelas_id'];
//         $temp['materi_harga']=$row['materi_harga'];
//         $temp['materi_diskon']=$row['materi_diskon'];
//         $temp['materi_xp']=$row['materi_xp'];
//         $temp['materi_rating']=$row['materi_rating'];
//         $temp['materi_jml_modul']=$row['materi_jml_modul'];
//         $temp['mitra_id']=$row['mitra_id'];
//
//	//$sql_count = "SELECT materi_id FROM tb_belajar WHERE materi_id='".$temp['materi_id']."'";
//	$sql_count = "SELECT count(materi_id) as total from tb_belajar WHERE materi_id='".$temp['materi_id']."'";
//     $result1 = mysqli_query($con,$sql_count);
//         $data= mysqli_fetch_array($result1);
//	//count($result1);
//	$temp['student'] = $data;
//         
//         array_push($response['images'],$temp);
//     }
//     //displaying the response 
//     echo json_encode($response);
//
//    }
//    
}