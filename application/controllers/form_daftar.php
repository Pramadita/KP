<?php
defined('BASEPATH') or exit('No direct script access allowed');

class form_daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_form_input');
        $this->load->model('model_admin');
    }

    public function index()
    {
        $data['judul'] = 'PPDB | LOGIN SISWA ';
        $this->load->view('templates/header2', $data);
        $this->load->view('daftar&admin/s_login');
        $this->load->view('templates/footer2');
    }
    public function form_daftar()
    {
        $data['judul'] = 'PPDB | FORM PENDAFTARAN SMK ATM';
        $data['sekolah'] = $this->model_admin->getallsekolah();
        $this->load->view('templates/header2', $data);
        $this->load->view('daftar&admin/s_form_pendaftaran', $data);
        $this->load->view('templates/footer2');
    }
    public function tambah_form()
    {
        $this->model_form_input->tambahdatasiswa();
        redirect('home');
    }
    public function tambah_form_admin()
    {
        $this->model_form_input->tambahdatasiswa();
        redirect('admin_dash/tambah_daftar');
    }
    public function ubah_pw()
    {
        $data['judul'] = 'PPDB | UBAH PASSWORD';
        $this->load->view('templates/header2', $data);
        $this->load->view('daftar&admin/as_ubah_pw');
        $this->load->view('templates/footer2');
    }
}
