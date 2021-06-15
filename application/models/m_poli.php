<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class M_Poli extends CI_Model
{
    public function get_polibyid($id)
    {
        return $this->db->get_where('poliklinik', array('id_rs' => $id))->result_array();
    }

    public function get_poli()
    {
        $this->db->select('*');
        $this->db->from('poliklinik');
        $this->db->join('rumahsakit', 'rumahsakit.id_rs = poliklinik.id_rs');
        return $this->db->get()->result_array();
    }
    // public function get_dokterbyidpoli($id)
    // {
    //     $this->db->select('*');

    //     $this->db->join('dokter', 'dokter.id_poli = poliklinik.id_poli');

    //     return $this->db->get_where('poliklinik', array('poliklinik.id_poli' => $id))->result_array();
    // }
}
