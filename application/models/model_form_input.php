<?php

class model_form_input extends CI_model
{
    //CREATE
    public function tambahdatasiswa()
    {
        //Berkas
        $config = array();
        $config['upload_path'] = './pendaftar/Berkas/';
        $config['allowed_types'] = 'doc|docx|pdf|';
        $this->load->library('upload', $config, 'berkasupload');
        $this->berkasupload->initialize($config);
        $upload_berkas = $this->berkaspload->do_upload('berkas');

        //Foto
        $config = array();
        $config['upload_path'] = './pendaftar/Foto/';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $this->load->library('upload', $config, 'fotoupload');
        $this->fotoupload->initialize($config);
        $upload_foto = $this->fotoupload->do_upload('foto');

        $data1 = $this->berkasupload->data();
        $data2 = $this->fotoupload->data();
        $berkas = $data1['file_name'];
        $foto = $data2['file_name'];


        if ($upload_berkas && $upload_foto) {
            $data1;
            $data2;

            //success
            //other codes
        } else {
            //error
            //other codes

            //optional
            echo 'Akte upload Error : ' . $this->akteupload->display_errors() . '<br/>';
            echo 'KK upload Error : ' . $this->kkupload->display_errors() . '<br/>';
        }
        $post = $this->input;
        $data = [
            //DATA SISWA
            /*"Tingkat" => $post->post('Tingkat'),
            "Prodi" => $post->post('Prodi'),*/
            "Nama_siswa" => $post->post('Nama_Siswa', true),
            /* "Jenis_Kelamin" => $post->post('jk'),
            "Asal_Sekolah" => $post->post('asek'),
            "NISN" => $post->post('nisn', true),
            "No_Ijazah" => $post->post('ijazah', true),
            "No_SKHUN" => $post->post('No.SKHUN', true),
            "No_UN" => $post->post('UN', true),
            "NIK" => $post->post('nik', true),
            "TTL" => $post->post('tl', true),
            "Alamat_Tinggal" => $post->post('att', true),
            "Transportasi" => $post->post('transport'),
            "Jenis_Tinggal" => $post->post('jtinggal'),
            "Rencana_Tinggal" => $post->post('rtinggal'),
            "Ukuran_Pakaian" => $post->post('pakaian'),
            "No_Hp" => $post->post('hp', true),
            "Email" => $post->post('email', true),
            "Jenis_Bantuan" => $post->post('bantuan'),
            "No_KKS" => $post->post('kps', true),

            //DATA ORTU
            "Nama_Ayah" => $post->post('nayah', true),
            "Lahir_Ayah" => $post->post('tlayah', true),
            "Pekerjaan_Ayah" => $post->post('jobayah'),
            "Pendidikan_Ayah" => $post->post('edua'),
            "Penghasilan_Ayah" => $post->post('hasila'),
            "Nama_Ibu" => $post->post('nibu', true),
            "Lahir_Ibu" => $post->post('tlibu', true),
            "Pekerjaan_Ibu" => $post->post('jobibu'),
            "Pendidikan_Ibu" => $post->post('edui'),
            "Penghasilan_Ibu" => $post->post('hasili'),
            "Nama_Wali" => $post->post('nwali', true),
            "Lahir_Wali" => $post->post('tlwali', true),
            "Pekerjaan_Wali" => $post->post('jobwali'),
            "Pendidikan_Wali" => $post->post('eduw'),
            "Penghasilan_Wali" => $post->post('hasilw'),

            //DATA PERIODIK
            "Tinggi_Badan" => $post->post('tinggi', true),
            "Berat_Badan" => $post->post('bb', true),
            "Jarak_Sekolah" => $post->post('jarak', true),
            "Waktu_Tempuh" => $post->post('waktu', true),
            "Saudara_Kandung" => $post->post('saudara', true),

            //PRESTASI & BEASISWA
            "Prestasi_1" => $post->post('prestasi1', true),
            "Prestasi_2" => $post->post('prestasi2', true),
            "Prestasi_3" => $post->post('prestasi3', true),
            "Beasiswa_1" => $post->post('beasiswa1', true),
            "Beasiswa_2" => $post->post('beasiswa2', true),
            "Beasiswa_3" => $post->post('beasiswa3', true),*/

            'Berkas' => $berkas, 'Foto' => $foto

        ];
        $this->db->insert('siswa', $data);
    }
}
