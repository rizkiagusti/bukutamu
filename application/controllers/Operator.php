<?php 
    class Operator extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->database();
		  	$this->load->model(array('M_bidang','M_pengunjung'));
            $this->load->library(array('form_validation','session'));
            $this->load->database();
            $this->load->helper(array('url', 'download'));
            date_default_timezone_set('Asia/Jakarta');
        }

        //tampilan
        public function beranda(){
            $email    = $this->session->userdata('operator_email');
            $id       = $this->session->userdata('id');   
            $data['namaOp']   = $this->session->userdata('nama_operator');   
            
            if ($email==NULL) {
                redirect('login');        
            }else{
                $data['data'] = $this->M_pengunjung->tampil();  
                $data['isi'] = 'operator/dafpengunjung';
                $this->load->view('operator/home',$data);
            }
           
        }

        public function tampil($idPeng){
                $data['namaOp']   = $this->session->userdata('nama_operator');        

           		$data['pilih'] = $this->M_pengunjung->tampilPilihan($idPeng);	
                $data['kirim'] = $this->M_pengunjung->getTampil($idPeng)->row();

                $data['isi'] = 'operator/tampilpengunjung';
                $this->load->view('operator/home',$data);
                 
        }

        public function kirimPesan($idPeng)
        {
            $id = $this->session->userdata('id');
               
            if($_POST == NULL){
                redirect('Operator/beranda');
            }else{
                
                $this->M_pengunjung->kirimPengunjung($id,$idPeng);
                redirect('Operator/beranda');

            }
        }


        public function tampilSeluruh(){
            $email    = $this->session->userdata('operator_email');
            $id       = $this->session->userdata('id');  
            $data['namaOp']   = $this->session->userdata('nama_operator');   
            
            if ($email==NULL) {
                redirect('login');        
            }else{
                
                $data['data'] = $this->M_pengunjung->tampilSeluruh();  
                $data['isi'] = 'operator/dafpengunjungSeluruh';
                $this->load->view('operator/home',$data);
            }
                 
        }

    }
?>