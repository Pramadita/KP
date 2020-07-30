<?php

class model_form_update extends CI_model
{
    //UPDATE
    public function editdatasiswa($id)
    {
        $fileInfo = $this->db->get_where('siswa', ['id' => $id])->row();

        if ($_FILES['akta']['size'] != 0) {
            //Akta Lahir
            $config = array();
            $config['upload_path'] = './pendaftar/Akta_Lahir/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['file_name'] = 'Akta-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
            $this->load->library('upload', $config, 'aktaupload');
            $this->aktaupload->initialize($config);
            $upload_akta = $this->aktaupload->do_upload('akta');
            $data1 = $this->aktaupload->data();
            if ($upload_akta) {
                $data1;
                $this->db->set('Akta_Lahir', $data1['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');

                $file = $fileInfo->Akta_Lahir;
                if ($file != null) {
                    unlink('pendaftar/Akta_Lahir/' . $file);
                }
            } else {
                //error
                //other codes

                //optional
                echo 'KK upload Error : ' . $this->aktaupload->display_errors() . '<br/>';
            }
        }
        if ($_FILES['kk']['size'] != 0) {
            // KK upload
            $config = array();
            $config['upload_path'] = './pendaftar/KK/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['file_name'] = 'KK-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
            $this->load->library('upload', $config, 'kkupload');
            $this->kkupload->initialize($config);
            $upload_kk = $this->kkupload->do_upload('kk');
            $data2 = $this->kkupload->data();
            if ($upload_kk) {
                $data2;
                $this->db->set('KK', $data2['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');
                $file = $fileInfo->KK;
                $kk = 'pendaftar/KK/' . $file;
                if ($kk != null) {
                    unlink($kk);
                }
            } else {
                //error
                //other codes

                //optional
                echo 'KK upload Error : ' . $this->kkupload->display_errors() . '<br/>';
            }
        }

        if ($_FILES['bioraport']['size'] != 0) {
            //Raport
            $config = array();
            $config['upload_path'] = './pendaftar/Raport/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['file_name'] = 'Raport-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
            $this->load->library('upload', $config, 'raportupload');
            $this->raportupload->initialize($config);
            $upload_raport = $this->raportupload->do_upload('bioraport');
            $data3 = $this->raportupload->data();
            if ($upload_raport) {
                $data3;
                $this->db->set('Bio_Raport', $data3['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');
                $file = $fileInfo->Bio_Raport;
                if ($file != null) {
                    unlink('pendaftar/Raport/' . $file);
                }
            } else {
                //error
                //other codes

                //optional
                echo 'KK upload Error : ' . $this->raportupload->display_errors() . '<br/>';
            }
        }
        if ($_FILES['ktpa']['size'] != 0) {
            //KTP_Ayah
            $config = array();
            $config['upload_path'] = './pendaftar/KTP_Ayah/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['file_name'] = 'KTP_Ayah-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
            $this->load->library('upload', $config, 'ktpaupload');
            $this->ktpaupload->initialize($config);
            $upload_ktpa = $this->ktpaupload->do_upload('ktpa');
            $data4 =  $this->ktpaupload->data();
            if ($upload_ktpa) {
                $data4;
                $this->db->set('KTP_Ayah', $data4['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');
                $file = $fileInfo->KTP_Ayah;
                if ($file != null) {
                    unlink('pendaftar/KTP_Ayah/' . $file);
                }
            } else {
                //error
                //other codes

                //optional
                echo 'KK upload Error : ' . $this->ktpaupload->display_errors() . '<br/>';
            }
        }
        if ($_FILES['ktpi']['size'] != 0) {
            //KTP_Ibu
            $config = array();
            $config['upload_path'] = './pendaftar/KTP_Ibu/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['file_name'] = 'KTP_Ibu-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
            $this->load->library('upload', $config, 'ktpiupload');
            $this->ktpiupload->initialize($config);
            $upload_ktpi = $this->ktpiupload->do_upload('ktpi');
            $data5 = $this->ktpiupload->data();
            if ($upload_ktpi) {
                $data5;
                $this->db->set('KTP_Ibu', $data5['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');
                $file = $fileInfo->KTP_Ibu;
                if ($file != null) {
                    unlink('pendaftar/KTP_Ibu/' . $file);
                }
            } else {
                //error
                //other codes

                //optional
                echo 'KK upload Error : ' . $this->ktpiupload->display_errors() . '<br/>';
            }
        }
        if ($_FILES['sijazah']['size'] != 0) {
            //Ijazah
            $config = array();
            $config['upload_path'] = './pendaftar/Ijazah_SMP/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['file_name'] = 'Ijazah-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
            $this->load->library('upload', $config, 'sijazahupload');
            $this->sijazahupload->initialize($config);
            $upload_sijazah = $this->sijazahupload->do_upload('sijazah');
            $data6 =  $this->sijazahupload->data();
            if ($upload_sijazah) {
                $data6;
                $this->db->set('Ijazah_SMP', $data6['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');
                $file = $fileInfo->Ijazah_SMP;
                if ($file != null) {
                    unlink('pendaftar/Ijazah_SMP/' . $file);
                }
            } else {
                //error
                //other codes

                //optional
                echo 'KK upload Error : ' . $this->sijazahupload->display_errors() . '<br/>';
            }
        }
        if ($_FILES['sskhun']['size'] != 0) {
            //SKHUN
            $config = array();
            $config['upload_path'] = './pendaftar/SKHUN_SMP/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['file_name'] = 'SKHUN_SMP-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
            $this->load->library('upload', $config, 'sskhunupload');
            $this->sskhunupload->initialize($config);
            $upload_sskhun = $this->sskhunupload->do_upload('sskhun');
            $data7 =  $this->sskhunupload->data();
            if ($upload_sskhun) {
                $data7;
                $this->db->set('SKHUN_SMP', $data7['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');
                $file = $fileInfo->SKHUN_SMP;
                if ($file != null) {
                    unlink('pendaftar/SKHUN_SMP/' . $file);
                }
            } else {
                //error
                //other codes

                //optional
                echo 'KK upload Error : ' . $this->sskhunupload->display_errors() . '<br/>';
            }
        }

        if ($_FILES['sulus']['size'] != 0) {
            //Surat_Lulus
            $config = array();
            $config['upload_path'] = './pendaftar/Surat_Lulus_SMP/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['file_name'] = 'Surat_Lulus_SMP-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
            $this->load->library('upload', $config, 'sulusupload');
            $this->sulusupload->initialize($config);
            $upload_sulus = $this->sulusupload->do_upload('sulus');
            $data8 =  $this->sulusupload->data();
            if ($upload_sulus) {
                $data8;
                $this->db->set('Surat_Lulus_SMP', $data8['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');
                $file = $fileInfo->Surat_Lulus_SMP;
                if ($file != null) {
                    unlink('pendaftar/Surat_Lulus_SMP/' . $file);
                }
            } else {
                //error
                //other codes

                //optional
                echo 'KK upload Error : ' . $this->sulusupload->display_errors() . '<br/>';
            }
        }

        if ($_FILES['kpspkh']['size'] != 0) {
            //Kartu Bantuan
            $config = array();
            $config['upload_path'] = './pendaftar/KPS/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['file_name'] = 'KPS-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
            $this->load->library('upload', $config, 'kpspkhupload');
            $this->kpspkhupload->initialize($config);
            $upload_kpspkh = $this->kpspkhupload->do_upload('kpspkh');
            $data9 =  $this->kpspkhupload->data();
            if ($upload_kpspkh) {
                $data9;
                $this->db->set('KPS', $data9['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');
                $file = $fileInfo->KPS;
                if ($file != null) {
                    unlink('pendaftar/KPS/' . $file);
                }
            } else {
                //error
                //other codes

                //optional
                echo 'KK upload Error : ' . $this->kpspkhupload->display_errors() . '<br/>';
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
        ];
        $this->db->where('id', $post->post('id'));
        $this->db->update('siswa', $data);
    }
}
