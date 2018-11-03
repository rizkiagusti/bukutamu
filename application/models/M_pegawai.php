<?php
class M_pegawai extends CI_Model{


    public function tampilPegawai()
    {
        $this->db->select("*");
        $this->db->FROM("pegawai");
        return $this->db->get()->result();
    }

    function hapus($nip){
        $this->db->where('nip', $nip);
        $this->db->delete('pegawai');        
    }






    function tambah(){
        $nip  = $this->input->post('nip');
        $nama        = $this->input->post('nama');
        $idBidang       = $this->input->post('idBidang');
        $password    = $this->input->post('password');

        $data = array(
                    'nip'    =>$nip,
                    'namaPegawai'   =>$nama,
                    'idBidang'   =>$idBidang,
                    'password'=>md5($password)                    
                );

        $this->db->insert('pegawai',$data);
    }



}
?>