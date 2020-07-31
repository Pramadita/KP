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
        $config = array();
        $config['upload_path'] = './sekolah/Panduan/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config, 'panduanupload');
        $this->panduanupload->initialize($config);
        $upload_panduan = $this->panduanupload->do_upload('panduan');

        $data1 =  $this->panduanupload->data();
        $Panduan = $data1['file_name'];
        if ($upload_panduan) {
            $this->panduanupload->data();
            $fileInfo = $this->db->get_where('sekolah', ['id' => $id])->row();
            $file = $fileInfo->tata_cara;
            if ($file != null) {
                unlink('sekolah/Panduan/' . $file);
            }
        } else {
            //error
            //other codes

            //optional
            echo 'panduan upload Error : ' . $this->panduanupload->display_errors() . '<br/>';
        }
        $data = [
            //DATA INFO
            'tata_cara' => $Panduan
        ];
        $this->db->where('id', $id);
        $this->db->update('sekolah', $data);
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
