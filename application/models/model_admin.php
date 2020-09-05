<?php

class model_admin extends CI_model
{
    //CREATE

    //READ
    public function getallsekolah()
    {
        return $this->db->get('sekolah')->result_array();
    }
    public function getsekolahbyid()
    {
        $id = $this->input->post('id', true);
        return $this->db->get_where('sekolah', ['id' => $id])->row_array();
    }
    public function getoc()
    {
        return $this->db->get('oc')->result_array();
    }

    //UPDATE
    public function updateinfo($id)
    {
        $fileInfo = $this->db->get_where('sekolah', ['id' => $id])->row();
        if ($_FILES['info']['size'] != 0) {
            //Berkas
            $config = array();
            $config['upload_path'] = './sekolah/Info/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $this->load->library('upload', $config, 'infoupload');
            $this->infoupload->initialize($config);
            $upload_info = $this->infoupload->do_upload('info');

            $data1 = $this->infoupload->data();
            if ($upload_info) {
                $data1;
                $this->db->set('Info', $data1['file_name']);
                $this->db->where('id', $id);
                $this->db->update('sekolah');

                $file = $fileInfo->Info;
                if ($file != null) {
                    unlink('sekolah/Info/' . $file);
                }
                $this->session->set_flashdata('flash', 'Diupdate');
            } else {
                $this->session->set_flashdata('wrong', 'Pastikan file sesuai ketentuan');
            }
        }
        $post = $this->input;
        $data = [
            //DATA INFO
            "periode_daftar" => $post->post('periode'),
            "kontak1" => $post->post('kontak1'),
            "kontak2" => $post->post('kontak2'),
        ];
        $this->db->where('id', $id);
        $this->db->update('sekolah', $data);
    }

    public function updatetatacara($id)
    {
        $fileInfo = $this->db->get_where('sekolah', ['id' => $id])->row();

        if ($_FILES['panduan']['size'] != 0) {
            //Berkas
            $config = array();
            $config['upload_path'] = './sekolah/Panduan/';
            $config['allowed_types'] = 'pdf';
            $this->load->library('upload', $config, 'panduanupload');
            $this->panduanupload->initialize($config);
            $upload_panduan = $this->panduanupload->do_upload('panduan');

            $data1 = $this->panduanupload->data();
            if ($upload_panduan) {
                $data1;
                $this->db->set('tata_cara', $data1['file_name']);
                $this->db->where('id', $id);
                $this->db->update('sekolah');

                $file = $fileInfo->tata_cara;
                if ($file != null) {
                    unlink('sekolah/Panduan/' . $file);
                }
                $this->session->set_flashdata('flash', 'Diupdate');
            } else {
                //error
                //other codes

                //optional
                $this->session->set_flashdata('wrongs', 'Pastikan file sesuai ketentuan');
            }
        }
        if ($_FILES['berkas']['size'] != 0) {
            //Berkas
            $config = array();
            $config['upload_path'] = './sekolah/berkas/';
            $config['allowed_types'] = 'pdf';
            $this->load->library('upload', $config, 'berkasupload');
            $this->berkasupload->initialize($config);
            $upload_berkas = $this->berkasupload->do_upload('berkas');

            $data1 = $this->berkasupload->data();
            if ($upload_berkas) {
                $data1;
                $this->db->set('berkas', $data1['file_name']);
                $this->db->where('id', $id);
                $this->db->update('sekolah');

                $file = $fileInfo->berkas;
                if ($file != null) {
                    unlink('sekolah/berkas/' . $file);
                }
                $this->session->set_flashdata('flash', 'Diupdate');
            } else {
                $this->session->set_flashdata('wrongss', 'Pastikan file sesuai ketentuan');
            }
        }
        if ($_FILES['foto']['size'] != 0) {
            //Berkas
            $config = array();
            $config['upload_path'] = './sekolah/foto/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $this->load->library('upload', $config, 'fotoupload');
            $this->fotoupload->initialize($config);
            $upload_foto = $this->fotoupload->do_upload('foto');

            $data1 = $this->fotoupload->data();
            if ($upload_foto) {
                $data1;
                $this->db->set('foto', $data1['file_name']);
                $this->db->where('id', $id);
                $this->db->update('sekolah');

                $file = $fileInfo->foto;
                if ($file != null) {
                    unlink('sekolah/foto/' . $file);
                }
                $this->session->set_flashdata('flash', 'Diupdate');
            } else {
                $this->session->set_flashdata('wrongsss', 'Pastikan file sesuai ketentuan');
            }
        }
    }

    public function approve_open($id)
    {
        $this->db->where('id', $id);
        $this->db->set('status', '2');
        $this->db->update('oc');
    }
    public function approve_close($id)
    {
        $this->db->where('id', $id);
        $this->db->set('status', '1');
        $this->db->update('oc');
    }
}
