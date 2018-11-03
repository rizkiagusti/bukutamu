<?php
class M_bidang extends CI_Model{

	public function tampil()
    {
             return $this->db->get('bidang');
    }


    public function tampilBidang()
    {
        $this->db->select("*");
        $this->db->FROM("bidang");
        return $this->db->get()->result();
    }

    function hapus($idBidang){
        $this->db->where('idBidang', $idBidang);
        $this->db->delete('bidang');        
    }



    function getkodeunik() { 

        $q = $this->db->query("SELECT MAX(RIGHT(idBidang,2)) AS idmax FROM bidang");
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%02s",$tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "01";
        }
        $kar = "B"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
    }



    function tambah(){
        $idBidang  = $this->input->post('idBidang');
        $namaBidang        = $this->input->post('namaBidang');
      
        $data = array(
                    'idBidang'    =>$idBidang,
                    'namaBidang'   =>$namaBidang                  
                );

        $this->db->insert('bidang',$data);
    }


}
?>