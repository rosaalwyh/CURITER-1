<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Model_jadwal extends CI_Model
{
    public function tes($id)
    {
        $this->db->select('*');
        $this->db->from('dokter');
        $this->db->join('jadwal', 'dokter.id_dokter = jadwal.id_dokter');
        $this->db->where('jadwal.id_dokter = ' . $id);
        return $this->db->get();
    }
    public function getjadwal($id)
    {
        $this->db->select('*');
        $this->db->join('dokter', 'dokter.id_dokter = jadwal.id_dokter');
        return $this->db->get_where('jadwal', array('jadwal.id_dokter' => $id))->result_array();
    }

    public function getjadwall()
    {
        // $this->db->select('*');
        // $this->db->join('dokter', 'dokter.id_dokter = jadwal.id_dokter');
        // return $this->db->get_where('jadwal', array('jadwal.id_dokter' => $id))->result_array();

        $this->db->select('*');
        $this->db->from('jadwal');
        return $this->db->get()->result_array();
    }

    public function tambah_jadwal($data)
    {
        $this->db->insert('jadwal', $data);
    }

    public function update_jadwal($id, $data)
    {
        $this->db->where('id_dokter', $id);
        $this->db->update('jadwal', $data);
    }

    public function delete_jadwal($id)
    {
        $this->db->where('id_dokter', $id);
        return $this->db->delete('jadwal');
    }
}
