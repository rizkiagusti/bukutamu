<?php
class M_pengunjung extends CI_Model{


    public function tampil()
    {
        $this->db->select("*");
        $this->db->FROM("pengunjung");
        $this->db->where('pengunjung.tgl',date('y-m-d'));       
        return $this->db->get()->result();
    }

    public function tampilBulanIni()
    {
        $this->db->select("*");
        $this->db->FROM("pengunjung");
        $this->db->where('month(pengunjung.tgl)',date('m'));
        return $this->db->get()->result();
    }

    function jumlahHariIni(){
        $this->db->select('count(*) AS jumHariIni');
        $this->db->from('pengunjung');
        $this->db->where('pengunjung.tgl',date('y-m-d'));
        $query = $this->db->get();
        return $query;
    }

    function jumlahBulanIni(){
        $this->db->select('count(*) AS jumBulanIni');
        $this->db->from('pengunjung');
        $this->db->where('month(pengunjung.tgl)',date('m'));
        $query = $this->db->get();
        return $query;
    }

    function jumlahSeluruh(){
        $this->db->select('count(*) AS jumSeluruh');
        $this->db->from('pengunjung');
        $query = $this->db->get();
        return $query;
    }

    function statistikPengunjung(){
        $this->db->select('yearweek(tgl) as tanggal, count(*) as jumlah');
        $this->db->from('pengunjung');
        $this->db->group_by('yearweek(tgl)');
        $query = $this->db->get();
        return $query;
    }

    public function tampilSeluruh()
    {
        $this->db->select("*");
        $this->db->FROM("pengunjung");
        return $this->db->get()->result();
    }

    function tampilAPI()
    {
        $query = ('SELECT * FROM pengunjung');
        return $this->db->query($query);
        
    }

    public function getTampil($idPeng)
    {
        $this->db->select('*');
        $this->db->FROM('pengunjung');
        $this->db->where('pengunjung.idPeng',$idPeng);
        return $this->db->get();
    }

    
    public function tampilPilihan($idPeng)
    {
        $this->db->select('pegawai.nip,pegawai.namaPegawai');
        $this->db->FROM('pegawai');
        $this->db->join("pengunjung","pegawai.idBidang=pengunjung.idBidang");
        $this->db->where('pengunjung.idPeng',$idPeng);
        return $this->db->get()->result();
    }


    function cari()
    {
        $cari     = $this->input->post('noKtp');
            
        $this->db->select('*');
        $this->db->FROM('daftarPengunjung');
        $this->db->where('daftarPengunjung.noKtp',$cari);
        
        return $this->db->get()->result();
    }


	function inputPengunjung() {
            //kode unik
            $q = $this->db->query("SELECT MAX(RIGHT(idPeng,4)) AS idmax FROM pengunjung");
            $kd = ""; //kode awal
            if($q->num_rows()>0){ //jika data ada
                foreach($q->result() as $k){
                    $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                    $kd = sprintf("%04s",$tmp); //kode ambil 4 karakter terakhir
                }
            }else{ //jika data kosong diset ke kode awal
                $kd = "001";
            }
            $kar = "P"; //karakter depan kodenya
            //gabungkan string dengan kode yang telah dibuat tadi

            $nama       = $this->input->post('nama');
            $noKtp       = $this->input->post('noKtp');
            $institusi  = $this->input->post('institusi');
            $tujuan  = $this->input->post('tujuan');
            $idBidang  = $this->input->post('idBidang');
            $tanggal = date('y-m-d');


            $image = $this->input->post('image');
            $image = str_replace('data:image/jpeg;base64,','', $image);
            $image = base64_decode($image);
            $nama_file = $noKtp.'.jpg';
            file_put_contents(FCPATH.'/assets/utama/img/pengunjung/'.$nama_file,$image);


            
                    $input = array(
                        'idPeng'     =>$kar.$kd,
                        'nama'   =>$nama,
                        'noKtp'=>$noKtp,
                        'institusi'=>$institusi,
                        'tujuan'=>$tujuan,
                        'fotoPengunjung'     =>$nama_file,
                        'tgl'=> $tanggal,
                        'idBidang'   =>$idBidang
                    );

                    $inputDaftarPengunjung = array(
                        
                        'nama'   =>$nama,
                        'noKtp'=>$noKtp,
                        'fotoPengunjung'     =>$nama_file
                    );
            
                    $this->db->insert('pengunjung',$input);
                    $this->db->insert('daftarPengunjung',$inputDaftarPengunjung);

                    redirect('Welcome/index2');
    
    }

    function inputPengunjung2() {
            //kode unik
            $q = $this->db->query("SELECT MAX(RIGHT(idPeng,4)) AS idmax FROM pengunjung");
            $kd = ""; //kode awal
            if($q->num_rows()>0){ //jika data ada
                foreach($q->result() as $k){
                    $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                    $kd = sprintf("%04s",$tmp); //kode ambil 4 karakter terakhir
                }
            }else{ //jika data kosong diset ke kode awal
                $kd = "001";
            }
            $kar = "P"; //karakter depan kodenya
            //gabungkan string dengan kode yang telah dibuat tadi

            $nama       = $this->input->post('nama');
            $noKtp       = $this->input->post('noKtp');
            $institusi  = $this->input->post('institusi');
            $tujuan  = $this->input->post('tujuan');
            $idBidang  = $this->input->post('idBidang');
            $tanggal = date('y-m-d');

            $nama_file = $noKtp.'.jpg';

                        
            $this->load->library('upload');
            
                    $input = array(
                        'idPeng'     =>$kar.$kd,
                        'nama'   =>$nama,
                        'noKtp'=>$noKtp,
                        'institusi'=>$institusi,
                        'tujuan'=>$tujuan,
                        'fotoPengunjung'     =>$nama_file,
                        'tgl'=> $tanggal,
                        'idBidang'   =>$idBidang
                    );
            
                    $this->db->insert('pengunjung',$input);
    }


    function kirimPengunjung($id,$idPeng) {

            $nip    = $this->input->post('nip');
            $status = 'sudah';
            $idAkses = $id; 

                        
            
                    $input = array(
                        
                        'nip'   =>$nip,
                        'status'=>$status,
                        'idAkses'=>$idAkses
                    );
            
            $this->db->set($input);
            $this->db->where('idPeng', $idPeng);
            $this->db->update('pengunjung');
    }


}
?>