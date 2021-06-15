<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Model_jadwal extends CI_Model
{
    public function getjadwal($id)
    {
        $this->db->select('*');
        $this->db->join('dokter', 'dokter.id_dokter = jadwal.id_dokter');
        return $this->db->get_where('jadwal', array('jadwal.id_dokter' => $id))->result_array();
    }

    public function tambah_jadwal($data)
    {
        $this->db->insert('jadwal', $data);
    }
}
