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
            $file = $fileInfo->Akta_Lahir;
            unlink('pendaftar/Akta_Lahir/' . $file);

            $file = $fileInfo->KK;
            unlink('pendaftar/KK/' . $file);

            $file = $fileInfo->Bio_Raport;
            unlink('pendaftar/Raport/' . $file);

            $file = $fileInfo->KTP_Ayah;
            unlink('pendaftar/KTP_Ayah/' . $file);

            $file = $fileInfo->KTP_Ibu;
            unlink('pendaftar/KTP_Ibu/' . $file);

            $file = $fileInfo->Ijazah_SMP;
            unlink('pendaftar/Ijazah_SMP/' . $file);

            $file = $fileInfo->SKHUN_SMP;
            unlink('pendaftar/SKHUN_SMP/' . $file);

            $file = $fileInfo->Surat_Lulus_SMP;
            unlink('pendaftar/Surat_Lulus_SMP/' . $file);

            $file = $fileInfo->KPS;
            unlink('pendaftar/KPS/' . $file);
        }
    }
}
