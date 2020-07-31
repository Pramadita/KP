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
        $post = $this->input;
        $data = [
            //DATA INFO
            "periode_daftar" => $post->post('periode')
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

            $data1 = $this->panduansupload->data();
            if ($upload_panduan) {
                $data1;
                $this->db->set('tata_cara', $data1['file_name']);
                $this->db->where('id', $id);
                $this->db->update('sekolah');

                $file = $fileInfo->tata_cara;
                if ($file != null) {
                    unlink('sekolah/Panduan/' . $file);
                }
            } else {
                //error
                //other codes

                //optional
                echo 'Berkas upload Error : ' . $this->panduanupload->display_errors() . '<br/>';
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
            } else {
                //error
                //other codes

                //optional
                echo 'Berkas upload Error : ' . $this->berkasupload->display_errors() . '<br/>';
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
            } else {
                //error
                //other codes

                //optional
                echo 'Berkas upload Error : ' . $this->fotoupload->display_errors() . '<br/>';
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
