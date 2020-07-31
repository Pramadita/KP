<?php
defined('BASEPATH') or exit('No direct script access allowed');

class download extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'download'));
    }
    public function download_bantuan($id)
    {
        // Download
        $fileInfo = $this->db->get_where('sekolah', ['id' => $id])->row();
        force_download('sekolah/Panduan/' . $fileInfo->tata_cara, NULL);
        //redirect('home');
    }
    public function download_berkas($id)
    {
        // Download
        $fileInfo = $this->db->get_where('sekolah', ['id' => $id])->row();
        force_download('sekolah/berkas/' . $fileInfo->berkas, NULL);
        //redirect('home');
    }
    public function download_foto($id)
    {
        // Download
        $fileInfo = $this->db->get_where('sekolah', ['id' => $id])->row();
        force_download('sekolah/foto/' . $fileInfo->foto, NULL);
        //redirect('home');
    }
}
