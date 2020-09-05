<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_dash extends CI_Controller
{
    private $_table = "admin";
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_siswa');
        $this->load->model('model_admin');
        $this->load->model('model_form_input');
        $this->load->model('model_form_update');
        $this->load->model("login_model");
        $this->load->library('form_validation');
        if ($this->login_model->isNotLogin()) redirect(site_url('SMK_ATM_LOG_auth'));
    }

    public function index()
    {
        $data['judul'] = 'PPDB | ADMIN';
        $data['oc'] = $this->model_siswa->getalloc();
        $data['admin'] = $this->model_siswa->getalladmin();
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin', $data);
        $this->load->view('daftar&admin/a_akun_admin', $data);
        $this->load->view('templates/footer2');
    }

    //CREATE
    public function tambah_daftar()
    {
        $data['judul'] = 'PPDB | ADMIN TAMBAH DAFTAR';
        $data['admin'] = $this->model_siswa->getalladmin();
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin', $data);
        $this->load->view('daftar&admin/a_tambah_daftar');
        $this->load->view('templates/footer2');
    }
    public function tambah_form_admin()
    {
        $this->model_form_input->tambahdatasiswa();
        redirect('admin_dash/tambah_daftar');
    }
    public function tambah_info()
    {
        $this->model_admin->tambahinfo();
        redirect('admin_dash/upload_data');
    }

    //READ
    public function pendaftar()
    {
        $data['judul'] = 'PPDB | ADMIN PENDAFTAR';
        $data['siswa'] = $this->model_siswa->getallsiswa();
        $data['admin'] = $this->model_siswa->getalladmin();
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin', $data);
        $this->load->view('daftar&admin/a_pendaftar', $data);
        $this->load->view('templates/footer2');
    }
    public function pendaftar_proses()
    {
        $data['judul'] = 'PPDB | ADMIN PENDAFTAR';
        $data['siswa'] = $this->model_siswa->getsiswaproses();
        $data['admin'] = $this->model_siswa->getalladmin();
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin', $data);
        $this->load->view('daftar&admin/a_pendaftar', $data);
        $this->load->view('templates/footer2');
    }
    public function pendaftar_lulus()
    {
        $data['judul'] = 'PPDB | ADMIN PENDAFTAR';
        $data['siswa'] = $this->model_siswa->getsiswalulus();
        $data['admin'] = $this->model_siswa->getalladmin();
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin', $data);
        $this->load->view('daftar&admin/a_pendaftar', $data);
        $this->load->view('templates/footer2');
    }
    public function pendaftar_tlulus()
    {
        $data['judul'] = 'PPDB | ADMIN PENDAFTAR';
        $data['siswa'] = $this->model_siswa->getsiswatlulus();
        $data['admin'] = $this->model_siswa->getalladmin();
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin', $data);
        $this->load->view('daftar&admin/a_pendaftar', $data);
        $this->load->view('templates/footer2');
    }
    public function detail($id)
    {
        $data['judul'] = 'PPDB | ADMIN DETAIL SISWA';
        $data['siswa'] = $this->model_siswa->getsiswabyid($id);
        $data['admin'] = $this->model_siswa->getalladmin();
        $data['status'] = ['1', '2', '3'];
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin', $data);
        $this->load->view('daftar&admin/detail/a_detail', $data);
        $this->load->view('templates/footer2');
    }

    //DELETE
    public function hapus($id)
    {
        $this->model_siswa->hapusdatasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin_dash/pendaftar_tlulus');
    }

    //UPDATE
    public function edit($id)
    {
        $data['judul'] = 'PPDB | EDIT FORM PENDAFTARAN SMK ATM';
        $data['admin'] = $this->model_siswa->getalladmin();
        $data['siswa'] = $this->model_siswa->getsiswabyid($id);
        $data['Tingkat'] = ['', '1', '2', '3'];
        $data['Prodi'] = ['', 'Agribisnis Ternak Unggas', 'Usaha Perjalanan Wisata', 'Pemasaran'];
        $data['Jenis_Kelamin'] = ['', 'Laki-laki', 'Perempuan'];
        $data['Transport'] = ['', 'Jalan Kaki', 'Kendaraan Pribadi', 'Kendaraan Umum', 'Lainnya'];
        $data['Tinggal'] = ['', 'Bersama Orang Tua', 'Asrama', 'Kost', 'Panti Asuhan', 'Lainnya'];
        $data['Pakaian'] = ['', 'S', 'M', 'L', 'XL', 'XXL'];
        $data['Pekerjaan'] = ['', 'Tidak Bekerja', 'Nelayan', 'Petani', 'Peternak', 'PNS/TNI/POLRI', 'Karyawan Swasta', 'Pedagang Kecil', ' Wiraswasta', 'Wirausaha', 'Buruh', 'Pekerja Seni', 'Pensiunan', 'Lainnya'];
        $data['Pendidikan'] = ['', 'Tidak Sekolah', 'SD Sederajat', 'SMP Sederajat', 'SMA Sederajat', 'D1-D3', 'D4/S1', 'S2', 'S3'];
        $data['Penghasilan'] = ['', 'Kurang dari Rp.1.000.000', 'Rp.1.000.000 - Rp.2.000.000', 'Lebih dari Rp.2.000.000'];
        $data['Bantuan'] = ['', 'Kartu Indonesia Pintar (KIP)', 'Kartu Indonesia Sehat (KIS)', 'PKH', 'KPS'];

        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin', $data);
        $this->load->view('daftar&admin/a_edit', $data);
        $this->load->view('templates/footer2');
    }
    public function edit_form($id)
    {
        $this->model_form_update->editdatasiswa($id);
        $this->session->set_flashdata('flash', 'Diedit');
        redirect(base_url() . "admin_dash/detail/" . $id);
    }

    public function upload_data()
    {
        $data['judul'] = 'PPDB | DATA ADMIN';
        $data['sekolah'] = $this->model_admin->getallsekolah();
        $data['admin'] = $this->model_siswa->getalladmin();
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin', $data);
        $this->load->view('daftar&admin/a_set_pengumuman', $data);
        $this->load->view('templates/footer2');
    }
    public function update_info($id)
    {
        $this->model_admin->updateinfo($id);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('admin_dash/upload_data');
    }
    public function update_tatacara($id)
    {
        $this->model_admin->updatetatacara($id);
        redirect('admin_dash/upload_data');
    }

    // Status siswa
    public function approve_siswa($id)
    {
        $this->model_siswa->approve_request($id);
        redirect(base_url() . "admin_dash/detail/" . $id);
    }
    public function no_approve_siswa($id)
    {
        $this->model_siswa->no_approve_request($id);
        redirect(base_url() . "admin_dash/detail/" . $id);
    }
    public function back_approve_siswa($id)
    {
        $this->model_siswa->back_approve_request($id);
        redirect(base_url() . "admin_dash/detail/" . $id);
        //$this->send_email($id);
        //$this->approve_success();
    }

    //Open Close Pendaftaran
    public function approve_o($id)
    {
        $this->model_admin->approve_open($id);
        redirect('admin_dash');
    }
    public function approve_c($id)
    {
        $this->model_admin->approve_close($id);
        redirect('admin_dash');
    }
    public function approve_success()
    {
        echo '
            <script>
                alert("Berhasil Menyetujui Request");
                window.location.href="' . base_url("admin_dash/pendaftar") . '";
            </script>
        ';
    }
    public function ubah_pw_admin()
    {
        $data['judul'] = 'PPDB | UBAH PASSWORD ADMIN';
        $data['admin'] = $this->model_siswa->getalladmin();
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin', $data);
        $this->load->view('daftar&admin/a_ubah_pw');
        $this->load->view('templates/footer2');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('SMK_ATM_LOG_auth'));
    }

    //PRINT
    public function print_ATU()
    {
        $data['judul'] = 'Agribisnis Ternak Unggas';
        $data['siswa'] = $this->model_siswa->getallsiswaATU();
        $this->load->view('templates/header2', $data);
        $this->load->view('daftar&admin/detail/print_siswa', $data);
        $this->load->view('templates/footer2');
    }
    public function print_pem()
    {
        $data['judul'] = 'Pemasaran';
        $data['siswa'] = $this->model_siswa->getallsiswaPem();
        $this->load->view('templates/header2', $data);
        $this->load->view('daftar&admin/detail/print_siswa', $data);
        $this->load->view('templates/footer2');
    }
    public function print_UPW()
    {
        $data['judul'] = 'Usaha Perjalanan Wisata';
        $data['siswa'] = $this->model_siswa->getallsiswaUPW();
        $this->load->view('templates/header2', $data);
        $this->load->view('daftar&admin/detail/print_siswa', $data);
        $this->load->view('templates/footer2');
    }
}
