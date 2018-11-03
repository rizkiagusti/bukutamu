<?php
class Welcome extends CI_Controller {
	public function __construct() {
        parent::__construct();
      	$this->load->database();
      	$this->load->model(array('M_bidang','M_pengunjung'));
        $this->load->helper(array('url', 'download'));
        date_default_timezone_set('Asia/Jakarta');
  	 	
	}


	function tambahPengunjung()
    {
           
        if($_POST==NULL){
            $data['data'] = $this->M_bidang->tampil()->result_object();
            $this->load->view('index',$data);
        }else{
            
            $this->M_pengunjung->inputPengunjung();
            echo "<script language='javascript'>alert('test');</script>";

        }
    }

    function tambahPengunjung2()
    {
           
        if($_POST==NULL){
            $data['data'] = $this->M_bidang->tampil()->result_object();
            $this->load->view('index',$data);
        }else{
            $this->M_pengunjung->inputPengunjung2();
            redirect('Welcome/index');
        }
    }


    function index()
    {
        $this->load->view('utama');

    }

    public function cariPengunjung()
    {
        $data['noKtp'] = $this->input->post('noKtp');
        $data['dapat'] = $this->M_pengunjung->cari();
        if ($data['dapat'] == NULL) {
            $data['data'] = $this->M_bidang->tampil()->result_object();
            $this->load->view('index',$data);
        } else {
            $data['data'] = $this->M_bidang->tampil()->result_object();
            $this->load->view('index2', $data);
        }
    }



    public function tampilAPI()
    {
        $ambil = $this->M_pengunjung->tampilSeluruh();  
        
        $data['ambil'] =  $ambil;

        $ray = array();
        $isi = array();

        foreach ($ambil as $hasil) {
            $isi[] = array('id' => $hasil->idPeng,
                            'nama' => $hasil->nama,
                            'noKtp' => $hasil->noKtp,
                            'institusi' => $hasil->institusi, 
             );
            # code...
        }

        $rey  = $isi;
        header('Content-Type: application/json');
        echo '{ "message" : "Berhasil" ,"results":'.json_encode($rey).'}';

    }
    

	
}
