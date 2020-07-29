<?php

class model_form_input extends CI_model
{
    //CREATE
    public function tambahdatasiswa()
    {
        //Akta Lahir
        $config = array();
        $config['upload_path'] = './pendaftar/Akta_Lahir/';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $this->load->library('upload', $config, 'akteupload');
        $this->akteupload->initialize($config);
        $upload_akte = $this->akteupload->do_upload('akta');

        // KK upload
        $config = array();
        $config['upload_path'] = './pendaftar/KK/';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $this->load->library('upload', $config, 'kkupload');
        $this->kkupload->initialize($config);
        $upload_kk = $this->kkupload->do_upload('kk');

        //Raport
        $config = array();
        $config['upload_path'] = './pendaftar/Raport/';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $this->load->library('upload', $config, 'raportupload');
        $this->raportupload->initialize($config);
        $upload_raport = $this->raportupload->do_upload('bioraport');

        //KTP_Ayah
        $config = array();
        $config['upload_path'] = './pendaftar/KTP_Ayah/';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $this->load->library('upload', $config, 'ktpaupload');
        $this->ktpaupload->initialize($config);
        $upload_ktpa = $this->ktpaupload->do_upload('ktpa');

        //KTP_Ibu
        $config = array();
        $config['upload_path'] = './pendaftar/KTP_Ibu/';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $this->load->library('upload', $config, 'ktpiupload');
        $this->ktpiupload->initialize($config);
        $upload_ktpi = $this->ktpiupload->do_upload('ktpi');

        //Ijazah
        $config = array();
        $config['upload_path'] = './pendaftar/Ijazah_SMP/';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $this->load->library('upload', $config, 'sijazahupload');
        $this->sijazahupload->initialize($config);
        $upload_sijazah = $this->sijazahupload->do_upload('sijazah');

        //SKHUN
        $config = array();
        $config['upload_path'] = './pendaftar/SKHUN_SMP/';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $this->load->library('upload', $config, 'sskhunupload');
        $this->sskhunupload->initialize($config);
        $upload_sskhun = $this->sskhunupload->do_upload('sskhun');

        //Surat_Lulus
        $config = array();
        $config['upload_path'] = './pendaftar/Surat_Lulus_SMP/';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $this->load->library('upload', $config, 'sulusupload');
        $this->sulusupload->initialize($config);
        $upload_sulus = $this->sulusupload->do_upload('sulus');

        //Kartu Bantuan
        $config = array();
        $config['upload_path'] = './pendaftar/KPS/';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $config['file_name'] = 'KPS-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config, 'kpspkhupload');
        $this->kpspkhupload->initialize($config);
        $upload_kpspkh = $this->kpspkhupload->do_upload('kpspkh');

        $data1 = $this->akteupload->data();
        $data2 = $this->kkupload->data();
        $data3 = $this->raportupload->data();
        $data4 =  $this->ktpaupload->data();
        $data5 = $this->ktpiupload->data();
        $data6 =  $this->sijazahupload->data();
        $data7 =  $this->sskhunupload->data();
        $data8 =  $this->sulusupload->data();
        $data9 =  $this->kpspkhupload->data();

        $Akta_Lahir = $data1['file_name'];
        $KK = $data2['file_name'];
        $Bio_Raport = $data3['file_name'];
        $KTPA = $data4['file_name'];
        $KTPI = $data5['file_name'];
        $Ijazah = $data6['file_name'];
        $SKHUN = $data7['file_name'];
        $Sulus = $data8['file_name'];
        $KPSPKH = $data9['file_name'];


        if (
            $upload_akte && $upload_kk && $upload_raport && $upload_ktpa && $upload_ktpi
            && $upload_sijazah && $upload_sskhun && $upload_sulus && $upload_kpspkh
        ) {
            $data1;
            $data2;
            $data3;
            $data4;
            $data5;
            $data6;
            $data7;
            $data8;
            $data9;

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

            'Akta_Lahir' => $Akta_Lahir, 'KK' => $KK, 'Bio_Raport' => $Bio_Raport,
            'KTP_Ayah' => $KTPA, 'KTP_Ibu' => $KTPI, 'Ijazah_SMP' => $Ijazah, 'SKHUN_SMP' => $SKHUN,
            'Surat_Lulus_SMP' => $Sulus, 'KPS' => $KPSPKH
        ];
        $this->db->insert('siswa', $data);
    }
}
