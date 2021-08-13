<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {
    public function load_gaji(){
        $dat = $this->m_gaji->GetDataGaji();
        $this->load->view('template/header');
        $this->load->view('v_gaji', array('dat' => $dat));
        $this->load->view('template/footer');
    }
    public function add_gaji(){
        $this->load->view('add_form_gaji');
        $this->load->view('template/footer');
    }
    public function doo_insert(){
        $kd_gaji = $_POST['kd_gaji'];
        $nip = $_POST['nip'];
        $tglMasuk = $_POST['tglMasuk'];
        $golongan = $_POST['golongan'];
        $tunjangan = $_POST['tunjangan'];
        $gajiPokok = $_POST['gajiPokok'];
        $dataa_insert = array(
            'kd_gaji' => $kd_gaji,
            'nip' => $nip,
            'tglMasuk' => $tglMasuk,
            'golongan' => $golongan,
            'tunjangan' => $tunjangan,
            'gajiPokok' => $gajiPokok
        );
        $spn =$this->m_gaji->InsertDataa('data_gaji',$dataa_insert);
        if ($spn>=1){
            redirect('gaji/load_gaji');
        }
    }
    public function edit_dataa($kd_gaji){
        $usr = $this->m_gaji->GetDataGaji("where kd_gaji = '$kd_gaji'");
        $data = array(
            "kd_gaji" => $usr[0]['kd_gaji'],
            "nip" => $usr[0]['nip'],
            "tglMasuk" => $usr[0]['tglMasuk'],
            "golongan" => $usr[0]['golongan'],
            "tunjangan" => $usr[0]['tunjangan'],
            "gajiPokok" => $usr[0]['gajiPokok']);
        $this->load->view('edit_form_gaji', $data);
        $this->load->view('template/footer');
    }
    public function doo_update(){
        $kd_gaji = $_POST['kd_gaji'];
        $nip = $_POST['nip'];
        $tglMasuk = $_POST['tglMasuk'];
        $golongan = $_POST['golongan'];
        $tunjangan = $_POST['tunjangan'];
        $gajiPokok = $_POST['gajiPokok'];
        $dataa_update = array(
            'kd_gaji' => $kd_gaji,
            'nip' => $nip,
            'tglMasuk' => $tglMasuk,
            'golongan' => $golongan,
            'tunjangan' => $tunjangan,
            'gajiPokok' => $gajiPokok
        );
        $where = array('kd_gaji' => $kd_gaji);
        $spn =$this->m_gaji->UpdateDataa('data_gaji',$dataa_update,$where);
        if ($spn>=1){
            redirect('gaji/load_gaji');
        }
    }
    public function doo_delete($kd_gaji){
        $where = array('kd_gaji' => $kd_gaji);
        $spn =$this->m_gaji->DeleteDataa('data_gaji',$where);
        if ($spn>=1){
            redirect('gaji/load_gaji');
        }
    }
}