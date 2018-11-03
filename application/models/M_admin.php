<?php
class M_admin extends CI_Model{


    function getkodeunik() { 

        $q = $this->db->query("SELECT MAX(RIGHT(idAkses,2)) AS idmax FROM akseslogin");
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%02s",$tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "01";
        }
        $kar = "A"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
    }

    function tambah(){
        $idAkses  = $this->input->post('idAkses');
        $hakAkses  = $this->input->post('hakAkses');
        $nama        = $this->input->post('nama');
        $email       = $this->input->post('email');
        $password    = $this->input->post('password');

        $data = array(
                    'idAkses'  =>$idAkses,
                    'namaAkses'    =>$nama,
                    'email'   =>$email,
                    'password'=>md5($password),
                    'hakAkses'   =>$hakAkses
                );

        $this->db->insert('akseslogin',$data);
    }


}
?>