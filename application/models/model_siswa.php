<?php

class model_siswa extends CI_model
{
    //READ
    public function getallsiswa()
    {
        return $this->db->get('siswa')->result_array();
    }
    public function getallsiswaATU()
    {
        return $this->db->get_where('siswa', ['Prodi' => 'Agribisnis Ternak Unggas', 'status' => 2])->result_array();
    }
    public function getallsiswaPem()
    {
        return $this->db->get_where('siswa', ['Prodi' => 'Pemasaran', 'status' => 2])->result_array();
    }
    public function getallsiswaUPW()
    {
        return $this->db->get_where('siswa', ['Prodi' => 'Usaha Perjalanan Wisata', 'status' => 2])->result_array();
    }
    public function getsiswaproses()
    {
        return $this->db->get_where('siswa', ['status' => 1])->result_array();
    }
    public function getsiswalulus()
    {
        return $this->db->get_where('siswa', ['status' => 2])->result_array();
    }
    public function getsiswatlulus()
    {
        return $this->db->get_where('siswa', ['status' => 3])->result_array();
    }
    /*public function getsiswaquery()
    {
        $this->db->query('SELECT * FROM siswa');
    }*/
    public function getalladmin()
    {
        return $this->db->get('admin', ['username' => $this->session->userdata('username')])->row_array();
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
    public function no_approve_request($id)
    {
        $this->db->where('id', $id);
        $this->db->set('status', '3');
        $this->db->update('siswa');
    }
    public function back_approve_request($id)
    {
        $this->db->where('id', $id);
        $this->db->set('status', '1');
        $this->db->update('siswa');
    }

    //DELETE
    public function hapusdatasiswa($id)
    {
        $fileInfo = $this->db->get_where('siswa', ['id' => $id])->row();
        $query = $this->db->delete('siswa', ['id' => $id]);
        if ($query) {
            $file0 = $fileInfo->Foto;
            if ($file0 != null) {
                unlink('./pendaftar/Foto_Siswa/' . $file0);
            }
            $file1 = $fileInfo->Akta_Lahir;
            if ($file1 != null) {
                unlink('./pendaftar/Akta_Lahir/' . $file1);
            }
            $file2 = $fileInfo->KK;
            if ($file2 != null) {
                unlink('./pendaftar/KK/' . $file2);
            }
            $file3 = $fileInfo->Raport;
            if ($file3 != null) {
                unlink('./pendaftar/Bio_Raport/' . $file3);
            }
            $file4 = $fileInfo->KTP_Ayah;
            if ($file4 != null) {
                unlink('./pendaftar/KTP_Ayah/' . $file4);
            }
            $file5 = $fileInfo->KTP_Ibu;
            if ($file5 != null) {
                unlink('./pendaftar/KTP_Ibu/' . $file5);
            }
            $file6 = $fileInfo->KTP_Ibu;
            if ($file6 != null) {
                unlink('./pendaftar/KTP_Ayah/' . $file6);
            }
            $file7 = $fileInfo->SKHUN;
            if ($file7 != null) {
                unlink('./pendaftar/SKHUN/' . $file7);
            }
            $file8 = $fileInfo->Surat_Lulus;
            if ($file8 != null) {
                unlink('./pendaftar/Surat_Lulus/' . $file8);
            }
        }
    }
}
