<?php

class model_siswa extends CI_model
{
    //READ
    public function getallsiswa()
    {
        return $this->db->get('siswa')->result_array();
    }
    public function getalloc()
    {
        return $this->db->get('oc')->result_array();
    }
    public function getsiswabyid($id)
    {
        return $this->db->get_where('siswa', ['id' => $id])->row_array();
    }
    public function countallsiswa()
    {
        return $this->db->get('siswa')->num_rows();
    }

    //update status siswa
    public function approve_request($id)
    {
        $this->db->where('id', $id);
        $this->db->set('status', '2');
        $this->db->update('siswa');
    }

    //DELETE
    public function hapusdatasiswa($id)
    {
        $fileInfo = $this->db->get_where('siswa', ['id' => $id])->row();
        $query = $this->db->delete('siswa', ['id' => $id]);
        if ($query) {
            $file1 = $fileInfo->Akta_Lahir;
            $akta = './pendaftar/Akta_Lahir/' . $file1;
            if ($_FILES[$akta]['size'] != 0) {
                unlink($akta);
            }

            $file2 = $fileInfo->KK;
            $kk = './pendaftar/KK/' . $file2;
            if ($_FILES[$kk]['size'] != 0) {
                unlink($kk);
            }

            $file3 = $fileInfo->Bio_Raport;
            $raport = './pendaftar/Raport/' . $file3;
            if ($_FILES[$raport]['size'] != 0) {
                unlink($raport);
            }

            $file4 = $fileInfo->KTP_Ayah;
            $ktpa = './pendaftar/KTP_Ayah/' . $file4;
            if ($_FILES[$ktpa]['size'] != 0) {
                unlink($ktpa);
            }

            $file5 = $fileInfo->KTP_Ibu;
            $ktpi = './pendaftar/KTP_Ibu/' . $file5;
            if ($_FILES[$ktpi]['size'] != 0) {
                unlink($ktpi);
            }

            $file6 = $fileInfo->Ijazah_SMP;
            $ijazah = './pendaftar/Ijazah_SMP/' . $file6;
            if ($_FILES[$ijazah]['size'] != 0) {
                unlink($ijazah);
            }

            $file7 = $fileInfo->SKHUN_SMP;
            $skhun = './pendaftar/SKHUN_SMP/' . $file7;
            if ($_FILES[$skhun]['size'] != 0) {
                unlink($skhun);
            }

            $file8 = $fileInfo->Surat_Lulus_SMP;
            $sulus = './pendaftar/Surat_Lulus_SMP/' . $file8;
            if ($_FILES[$sulus]['size'] != 0) {
                unlink($sulus);
            }

            $file9 = $fileInfo->KPS;
            $kps = './pendaftar/Surat_Lulus_SMP/' . $file9;
            if ($_FILES[$kps]['size'] != 0) {
                unlink($kps);
            }
        }
    }
}
