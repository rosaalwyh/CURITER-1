<?php
defined('BASEPATH') or exit('No direct script access allowed');

class caridokterrs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_user');
        $this->load->model('m_poli');
        $this->load->model('m_dokter');
        $this->load->model('admin/model_jadwal');
    }

    public function index()
    {
        $this->m_user->checklogin();
        $data['title'] = "Curiter | Cari Dokter";
        $data['rs'] = $this->db->get('rumahsakit')->result_array();
        $this->load->view('header_page', $data);
        $this->load->view('v_dokter_rs');
        $this->load->view('footer_page');
    }

    public function poli($id)
    {
        $data['title'] = "Curiter | Cari Dokter";
        $data['poli'] = $this->m_poli->get_polibyid($id);
        // $data['jadwal'] = $this->model_jadwal->getjadwal($id);
        $this->load->view('header_page', $data);
        $this->load->view('v_polidokter', $data);
        $this->load->view('footer_page');
    }

    public function dokter($id)
    {
        $data['title'] = "Curiter | Cari Dokter";
        $data['dokter'] = $this->m_dokter->get_dokterbyidpoli($id);
        $data['jadwal'] = $this->model_jadwal->getjadwall();
        $data['poli'] = $this->m_poli->get_poli();
        $this->load->view('header_page', $data);
        $this->load->view('v_dokter_bypoli', $data);
        $this->load->view('footer_page', $data);
    }

    public function jadwal($id)
    {
        $data['title'] = "Curiter | Cari Dokter";
        $data['jadwal'] = $this->model_jadwal->getjadwal($id);
        $data['dokter'] = $this->model_dokter->get_dokter();
        $this->load->view('header_page', $data);
        $this->load->view('v_dokter_bypoli', $data);
        $this->load->view('footer_page');
    }
}
