<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
    public function index(){
        $data = $this->m_pegawai->GetDataUser();
        $this->load->view('template/header');
        $this->load->view('v_pegawai', array('data'=> $data));
        $this->load->view('template/footer');
    }
    public function add_data(){
        $this->load->view('add_form');
    }
    public function do_insert(){
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $tglLahir = $_POST['tglLahir'];
        $alamat = $_POST['alamat'];
        $status = $_POST['status'];
        $email = $_POST['email'];
        $data_insert = array(
            'nip' => $nip,
            'nama' => $nama,
            'jenisKelamin' => $jenisKelamin,
            'tglLahir' => $tglLahir,
            'alamat' => $alamat,
            'status' => $status,
            'email' => $email
        );
        $spn =$this->m_pegawai->InsertData('data_pegawai',$data_insert);
        if ($spn>=1){
            redirect('pegawai/index');
        }
    }
    public function edit_data($nip){
        $usr = $this->m_pegawai->GetDataUser("where nip = '$nip'");
        $data = array(
            "nip" => $usr[0]['nip'],
            "nama" => $usr[0]['nama'],
            "jenisKelamin" => $usr[0]['jenisKelamin'],
            "tglLahir" => $usr[0]['tglLahir'],
            "alamat" => $usr[0]['alamat'],
            "status" => $usr[0]['status'],
            "email" => $usr[0]['email']);
        $this->load->view('edit_form', $data);
    }
    public function do_update(){
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $tglLahir = $_POST['tglLahir'];
        $alamat = $_POST['alamat'];
        $status = $_POST['status'];
        $email = $_POST['email'];
        $data_update = array(
            'nama' => $nama,
            'jenisKelamin' => $jenisKelamin,
            'tglLahir' => $tglLahir,
            'alamat' => $alamat,
            'status' => $status,
            'email' => $email
        );
        $where = array('nip' => $nip);
        $spn =$this->m_pegawai->UpdateData('data_pegawai',$data_update,$where);
        if ($spn>=1){
            redirect('pegawai/index');
        }
    }
    public function do_delete($nip){
        $where = array('nip' => $nip);
        $spn =$this->m_pegawai->DeleteData('data_pegawai',$where);
        if ($spn>=1){
            redirect('pegawai/index');
        }
    }
}