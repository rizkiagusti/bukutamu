<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model(array('M_bidang','M_pegawai','M_pengunjung','M_operator','M_admin'));
            $this->load->library(array('form_validation','session'));
            $this->load->database();
            $this->load->helper(array('url', 'download'));    
            date_default_timezone_set('Asia/Jakarta');
    }
   
    public function beranda(){
        $email    = $this->session->userdata('email_admin');
        $id       = $this->session->userdata('id_admin');   
        $nama['namaAd']   = $this->session->userdata('nama_admin');   
            
        if ($email==NULL) {
             redirect('login');        
        }else{
            $data['pengunjung'] = $this->M_pengunjung->jumlahHariIni()->row();
            $data['bulan'] = $this->M_pengunjung->jumlahBulanIni()->row();
            $data['tahun'] = $this->M_pengunjung->jumlahSeluruh()->row();
            $data['data'] = $this->M_pengunjung->statistikPengunjung()->result();

            $this->load->view('admin/header',$nama);
            $this->load->view('admin/home',$data);
    		$this->load->view('admin/footer');
        }
	}

    public function hariIni(){
        $email    = $this->session->userdata('email_admin');
        $id       = $this->session->userdata('id_admin');   
        $nama['namaAd']   = $this->session->userdata('nama_admin');   
            
        if ($email==NULL) {
            redirect('login');        
        }else{
            $data['data'] = $this->M_pengunjung->tampil();  
            $this->load->view('admin/header',$nama);
            $this->load->view('operator/dafpengunjungSeluruh',$data);
            $this->load->view('admin/footer');
        }
           
    }

    public function bulanIni(){
        $email    = $this->session->userdata('email_admin');
        $id       = $this->session->userdata('id_admin');   
        $nama['namaAd']   = $this->session->userdata('nama_admin');   
            
        if ($email==NULL) {
            redirect('login');        
        }else{
            $data['data'] = $this->M_pengunjung->tampilBulanIni();  
            $this->load->view('admin/header',$nama);
            $this->load->view('operator/dafpengunjungSeluruh',$data);
            $this->load->view('admin/footer');
        }
           
    }

    public function tampilSeluruh(){
        $email    = $this->session->userdata('email_admin');
        $id       = $this->session->userdata('id_admin');   
        $nama['namaAd']   = $this->session->userdata('nama_admin');   
            
        if ($email==NULL) {
            redirect('login');        
        }else{
                
            $data['data'] = $this->M_pengunjung->tampilSeluruh();  
            $this->load->view('admin/header',$nama);
            $this->load->view('operator/dafpengunjungSeluruh',$data);
            $this->load->view('admin/footer');
        }
                 
    }

    public function dataOperator(){
        $email    = $this->session->userdata('email_admin');
        $id       = $this->session->userdata('id_admin');   
        $nama['namaAd']   = $this->session->userdata('nama_admin');   
            
        if ($email==NULL) {
             redirect('login');        
        }else{
            $data['data'] = $this->M_operator->tampilOperator();
            $this->load->view('admin/header',$nama);
            $this->load->view('admin/dataOperator',$data);
            $this->load->view('admin/footer');
        }
    }


    public function dataBidang(){
        $email    = $this->session->userdata('email_admin');
        $id       = $this->session->userdata('id_admin');   
        $nama['namaAd']   = $this->session->userdata('nama_admin');   
            
        if ($email==NULL) {
             redirect('login');        
        }else{
            $data['data'] = $this->M_bidang->tampilBidang();
            $this->load->view('admin/header',$nama);
            $this->load->view('admin/dataBidang',$data);
            $this->load->view('admin/footer');
        }
    }


    public function dataPegawai(){
        $email    = $this->session->userdata('email_admin');
        $id       = $this->session->userdata('id_admin');   
        $nama['namaAd']   = $this->session->userdata('nama_admin');   
            
        if ($email==NULL) {
             redirect('login');        
        }else{
            $data['data'] = $this->M_pegawai->tampilPegawai();
            $this->load->view('admin/header',$nama);
            $this->load->view('admin/dataPegawai',$data);
            $this->load->view('admin/footer');
        }
    }

    function hapusOperator($idAkses){
        //admin
        $email    = $this->session->userdata('email_admin');
            
        if ($email==NULL) {
             redirect('login');        
        }else{
            $this->M_operator->hapus($idAkses);
            $this->session->set_flashdata('info', 'SUKSESS : Berhasil di Hapus');
            redirect('admin/dataOperator');
        }
    }

    function hapusBidang($idBidang){
        //admin
        $email    = $this->session->userdata('email_admin');
            
        if ($email==NULL) {
             redirect('login');        
        }else{
            $this->M_bidang->hapus($idBidang);
            $this->session->set_flashdata('info', 'SUKSESS : Berhasil di Hapus');
            redirect('admin/dataBidang');
        }
    }

    function hapusPegawai($nip){
        //admin
        $email    = $this->session->userdata('email_admin');
            
        if ($email==NULL) {
             redirect('login');        
        }else{
            $this->M_pegawai->hapus($nip);
            $this->session->set_flashdata('info', 'SUKSESS : Berhasil di Hapus');
            redirect('admin/dataPegawai');
        }
    }


    function tambah()
    {
        //cek login
        $email    = $this->session->userdata('email_admin');
        $id       = $this->session->userdata('id_admin');   
        $nama['namaAd']   = $this->session->userdata('nama_admin');   
            
        if ($email==NULL) {
             redirect('login');        
        }else{
            if($this->input->method()=='post'){
                $this->M_admin->tambah();
                $this->session->set_flashdata('info', 'Data berhasil ditambah');
                redirect('admin/dataOperator');
            }else{
                
                $data['kodeunik'] = $this->M_admin->getkodeunik();
                
                $this->load->view('admin/header',$nama);
                $this->load->view('admin/tambahOperator',$data);
                $this->load->view('admin/footer');
            }
        }
    }

    function tambahBidang()
    {
        //cek login
        $email    = $this->session->userdata('email_admin');
        $id       = $this->session->userdata('id_admin');   
        $nama['namaAd']   = $this->session->userdata('nama_admin');   
            
        if ($email==NULL) {
             redirect('login');        
        }else{
            if($this->input->method()=='post'){
                $this->M_bidang->tambah();
                $this->session->set_flashdata('info', 'Data berhasil ditambah');
                redirect('admin/dataBidang');
            }else{
                
                $data['kodeunik'] = $this->M_bidang->getkodeunik();
                
                $this->load->view('admin/header',$nama);
                $this->load->view('admin/tambahBidang',$data);
                $this->load->view('admin/footer');
            }
        }
    }

    function tambahPegawai()
    {
        //cek login
        $email    = $this->session->userdata('email_admin');
        $id       = $this->session->userdata('id_admin');   
        $nama['namaAd']   = $this->session->userdata('nama_admin');   
            
        if ($email==NULL) {
             redirect('login');        
        }else{
            if($this->input->method()=='post'){
                $this->M_pegawai->tambah();
                $this->session->set_flashdata('info', 'Data berhasil ditambah');
                redirect('admin/dataPegawai');
            }else{
                
                $data['data'] = $this->M_bidang->tampil()->result_object();
                
                $this->load->view('admin/header',$nama);
                $this->load->view('admin/tambahPegawai',$data);
                $this->load->view('admin/footer');
            }
        }
    }


}
