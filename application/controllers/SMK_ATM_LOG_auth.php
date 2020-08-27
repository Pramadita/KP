<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SMK_ATM_LOG_auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // tampilkan halaman login
        $data['judul'] = 'PPDB | LOGIN';
        $this->load->view('templates/header2', $data);
        $this->load->view('daftar&admin/s_login');
        $this->load->view('templates/footer2');

        if ($this->input->post()) {
            if ($this->login_model->doLogin()) {
                redirect(site_url('admin_dash'));
            }
            if ($this->login_model->isNotLogin()) {
                $this->session->set_flashdata('pw', 'username/email dan password tidak cocok');
                redirect(site_url('SMK_ATM_LOG_auth'));
            }
        }
    }
    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
}
