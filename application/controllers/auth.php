<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function ubah_pw_admin()
    {
        $data['judul'] = 'PPDB | UBAH PASSWORD ADMIN';
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin');
        $this->load->view('daftar&admin/a_ubah_pw');
        $this->load->view('templates/footer2');
    }
}
