<?php

class model_form_update extends CI_model
{
    //UPDATE
    public function editdatasiswa($id)
    {
        $fileInfo = $this->db->get_where('siswa', ['id' => $id])->row();

        if ($_FILES['foto']['size'] != 0) {
            //Akta
            $config = array();
            $config['upload_path'] = './pendaftar/Foto_Siswa/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['max_size'] = '800';
            $this->load->library('upload', $config, 'fotoupload');
            $this->fotoupload->initialize($config);
            $upload_foto = $this->fotoupload->do_upload('foto');
            $data0 = $this->fotoupload->data();
            if ($upload_foto) {
                $data0;
                $this->db->set('Foto', $data0['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');

                $file = $fileInfo->Foto;
                if ($file != null) {
                    unlink('pendaftar/Foto_Siswa/' . $file);
                }
            } else {
                $this->session->set_flashdata('salah', 'Pastikan file sesuai ketentuan');
            }
        }
        if ($_FILES['akta']['size'] != 0) {
            //Akta
            $config = array();
            $config['upload_path'] = './pendaftar/Akta_Lahir/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['max_size'] = '800';
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
                $this->session->set_flashdata('salah', 'Pastikan file sesuai ketentuan');
            }
        }
        if ($_FILES['kk']['size'] != 0) {
            //KK
            $config = array();
            $config['upload_path'] = './pendaftar/KK/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['max_size'] = '800';
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
                if ($file != null) {
                    unlink('pendaftar/KK/' . $file);
                }
            } else {
                $this->session->set_flashdata('salahs', 'Pastikan file sesuai ketentuan');
            }
        }
        if ($_FILES['raport']['size'] != 0) {
            //raport
            $config = array();
            $config['upload_path'] = './pendaftar/Bio_Raport/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['max_size'] = '800';
            $this->load->library('upload', $config, 'raportupload');
            $this->raportupload->initialize($config);
            $upload_raport = $this->raportupload->do_upload('raport');
            $data3 = $this->raportupload->data();
            if ($upload_raport) {
                $data3;
                $this->db->set('Raport', $data3['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');

                $file = $fileInfo->Raport;
                if ($file != null) {
                    unlink('pendaftar/Bio_Raport/' . $file);
                }
            } else {
                $this->session->set_flashdata('salah', 'Pastikan file sesuai ketentuan');
            }
        }
        if ($_FILES['ktpa']['size'] != 0) {
            //ktpa
            $config = array();
            $config['upload_path'] = './pendaftar/KTP_Ayah/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['max_size'] = '800';
            $this->load->library('upload', $config, 'ktpaupload');
            $this->ktpaupload->initialize($config);
            $upload_ktpa = $this->ktpaupload->do_upload('ktpa');
            $data4 = $this->ktpaupload->data();
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
                $this->session->set_flashdata('salah', 'Pastikan file sesuai ketentuan');
            }
        }
        if ($_FILES['ktpi']['size'] != 0) {
            //ktpi
            $config = array();
            $config['upload_path'] = './pendaftar/KTP_Ibu/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['max_size'] = '800';
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
                $this->session->set_flashdata('salah', 'Pastikan file sesuai ketentuan');
            }
        }
        if ($_FILES['ijazah']['size'] != 0) {
            //ijazah
            $config = array();
            $config['upload_path'] = './pendaftar/Ijazah/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['max_size'] = '800';
            $this->load->library('upload', $config, 'ijazahupload');
            $this->ijazahupload->initialize($config);
            $upload_ijazah = $this->ijazahupload->do_upload('ijazah');
            $data6 = $this->ijazahupload->data();
            if ($upload_ijazah) {
                $data6;
                $this->db->set('Ijazah', $data6['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');

                $file = $fileInfo->ijazah;
                if ($file != null) {
                    unlink('pendaftar/Ijazah/' . $file);
                }
            } else {
                $this->session->set_flashdata('salah', 'Pastikan file sesuai ketentuan');
            }
        }
        if ($_FILES['skhun']['size'] != 0) {
            //SKHUN
            $config = array();
            $config['upload_path'] = './pendaftar/SKHUN/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['max_size'] = '800';
            $this->load->library('upload', $config, 'skhunupload');
            $this->skhunupload->initialize($config);
            $upload_skhun = $this->skhunupload->do_upload('skhun');
            $data7 = $this->skhunupload->data();
            if ($upload_skhun) {
                $data7;
                $this->db->set('SKHUN', $data7['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');

                $file = $fileInfo->SKHUN;
                if ($file != null) {
                    unlink('pendaftar/SKHUN/' . $file);
                }
            } else {
                $this->session->set_flashdata('salahs', 'Pastikan file sesuai ketentuan');
            }
        }
        if ($_FILES['sulus']['size'] != 0) {
            //sulus
            $config = array();
            $config['upload_path'] = './pendaftar/Surat_Lulus/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['max_size'] = '800';
            $this->load->library('upload', $config, 'sulusupload');
            $this->sulusupload->initialize($config);
            $upload_sulus = $this->sulusupload->do_upload('sulus');
            $data8 = $this->sulusupload->data();
            if ($upload_sulus) {
                $data8;
                $this->db->set('Surat_Lulus', $data8['file_name']);
                $this->db->where('id', $id);
                $this->db->update('siswa');

                $file = $fileInfo->Surat_Lulus;
                if ($file != null) {
                    unlink('pendaftar/Surat_Lulus/' . $file);
                }
            } else {
                $this->session->set_flashdata('salah', 'Pastikan file sesuai ketentuan');
            }
        }
        $post = $this->input;
        $data = [
            //DATA SISWA
            "Tingkat" => $post->post('Tingkat'),
            "Prodi" => $post->post('Prodi'),
            "Nama_siswa" => $post->post('Nama_Siswa', true),
            "Jenis_Kelamin" => $post->post('jk'),
            "Asal_Sekolah" => $post->post('asek'),
            "NISN" => $post->post('nisn', true),
            "No_Ijazah" => $post->post('ijazah', true),
            "No_SKHUN" => $post->post('noskhun', true),
            "No_UN" => $post->post('un', true),
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
            "Beasiswa_3" => $post->post('beasiswa3', true),
        ];
        $this->db->where('id', $post->post('id'));
        $this->db->update('siswa', $data);
    }
}
