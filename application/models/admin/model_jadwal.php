<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Model_jadwal extends CI_Model
{
    public function getjadwal($id)
    {
        return $this->db->get_where('jadwal', array('id_dokter' => $id))->result_array();
    }
}
