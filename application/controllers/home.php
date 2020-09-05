<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_siswa');
        $this->load->model('model_admin');
    }

    public function index()
    {
        $data['judul'] = 'PPDB ONLINE SMK ATM';
        $data['oc'] = $this->model_admin->getoc();
        $data['sekolah'] = $this->model_admin->getallsekolah();
        $this->load->view('templates/header1', $data);
        $this->load->view('utama/index', $data);
        $this->load->view('templates/footer1', $data);
    }
    public function info_ppdb()
    {
        $data['judul'] = 'INFO PPDB';
        $data['sekolah'] = $this->model_admin->getallsekolah();
        $this->load->view('templates/header1', $data);
        $this->load->view('utama/info-ppdb', $data);
        $this->load->view('templates/footer1', $data);
    }
    public function kontak_kami()
    {
        $data['judul'] = 'KONTAK KAMI';
        $data['sekolah'] = $this->model_admin->getallsekolah();
        $this->load->view('templates/header1', $data);
        $this->load->view('utama/kontak', $data);
        $this->load->view('templates/footer1', $data);
    }
    public function cek_status()
    {
        $data['judul'] = 'CEK STATUS PPDB';
        $data['siswa'] = $this->model_siswa->getallsiswa();
        $data['sekolah'] = $this->model_admin->getallsekolah();
        $this->load->view('templates/header1', $data);
        $this->load->view('utama/cek_status', $data);
        $this->load->view('templates/footer1', $data);
    }
    public function belum_masa_daftar()
    {
        $close = $this->db->get_where('oc', ['status' => '1'])->row();
        if (!$close) {
            redirect('home');
        } else {
            $data['judul'] = 'NOT AVAILABLE';
            $data['sekolah'] = $this->model_admin->getallsekolah();
            $this->load->view('templates/header1', $data);
            $this->load->view('errors/NotAvailable');
            $this->load->view('templates/footer1', $data);
        }
    }
}
