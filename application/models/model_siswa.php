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
            $file1 = $fileInfo->Berkas;
            unlink('./pendaftar/Berkas/' . $file1);

            $file2 = $fileInfo->Foto;
            unlink('./pendaftar/Foto/' . $file2);
        }
    }
}
