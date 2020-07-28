<?php

class model_form_update extends CI_model
{
    //UPDATE
    public function editdatasiswa($id)
    {
        $data1 = $this->akteupload->data();
        $data2 = $this->kkupload->data();
        // Akte upload
        if ($_FILES['akta']['size'] != 0) {
            $config = array();
            $config['upload_path'] = './assets/uploads/akta/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['file_name'] = 'Akta-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
            $this->load->library('upload', $config, 'akteupload');
            $this->akteupload->initialize($config);
            $upload_akte = $this->akteupload->do_upload('akta');

            if ($upload_akte) {
                $this->akteupload->data();
                //success
                //other codes
            } else {
                //error
                //other codes

                //optional
                echo 'Akte upload Error : ' . $this->akteupload->display_errors() . '<br/>';
            }
        }

        // KK upload
        if ($_FILES['kk']['size'] != 0) {
            $config = array();
            $config['upload_path'] = './assets/uploads/kk/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['file_name'] = 'KK-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
            $this->load->library('upload', $config, 'kkupload');
            $this->kkupload->initialize($config);
            $upload_kk = $this->kkupload->do_upload('kk');

            if ($upload_kk) {
                $this->kkupload->data();

                $this->db->set('file_name', $config['file_name']);
                $this->db->where('id', $id);
                $this->db->update('nama_tabel');

                //success
                //other codes
            } else {
                //error
                //other codes

                //optional
                echo 'KK upload Error : ' . $this->kkupload->display_errors() . '<br/>';
            }
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

            'Akta_Lahir' => $Akta_Lahir, 'KK' => $KK /* 'Bio_Raport' => $Bio_Raport,
            'KTP_Ayah' => $KTPA, 'KTP_Ibu' => $KTPI, 'Ijazah_SMP' => $Ijazah, 'SKHUN_SMP' => $SKHUN,
            'Surat_Lulus_SMP' => $Sulus, 'KPS/PKH' => $KPSPKH*/
        ];
        $this->db->where('id', $post->post('id'));
        $this->db->update('siswa', $data);
    }
}
