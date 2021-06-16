<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Dokter extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/model_dokter');
		$this->load->model('admin/model_jadwal');
		$this->load->model('m_poli');
		$this->load->model('m_rs');
		$this->load->model('admin/model_rs');
		$this->load->library('form_validation');
		$this->load->model('admin/m_admin');
		$this->load->library('session');
	}

	public function index()
	{
		$this->m_admin->checklogin();
		$data['title'] = 'Curiter | Admin';
		$data['d'] = $this->model_dokter->get_dokter();
		$data['rs'] = $this->model_dokter->get_rs();
		$this->load->view('header_page_admin', $data);
		$this->load->view('admin/v_rumahsakit', $data);
		$this->load->view('footer_page');
	}

	public function detaildokter($id)
	{
		$data['title'] = 'Curiter | Admin';
		$data['d'] = $this->model_dokter->get_dokterbyid($id);
		$data['rs'] = $this->m_rs->get_datars($id);
		$data['poli'] = $this->m_poli->get_polibyid($id);
		$this->load->view('header_page_admin', $data);
		$this->load->view('admin/v_datadokter', $data);
		$this->load->view('footer_page');
	}

	public function tambah()
	{
		$data = [
			'id_rs' => $this->input->post('id_rs', true),
			'no_dokter' => $this->input->post('no', true),
			'nama_dokter' => $this->input->post('nama', true),
			'id_poli' => $this->input->post('id_poli', true),
			'email_dokter' => $this->input->post('email', true)
		];
		$this->model_dokter->tambah_dokter($data);
		redirect('admin/dokter/detaildokter/' . $data['id_rs']);
	}
	public function edit($id)
	{
		$data = [
			'id_rs' => $this->input->post('rs', true),
			'no_dokter' => $this->input->post('no', true),
			'nama_dokter' => $this->input->post('nama', true),
			'email_dokter' => $this->input->post('email', true),

		];
		$this->model_dokter->update_dokter($id, $data);
		redirect('admin/dokter/index');
	}
	public function hapus($id)
	{
		$this->model_dokter->delete_dokter($id);
		redirect('admin/dokter/index');
	}

	public function jadwal($id)
	{
		$data['title'] = 'Curiter | Admin';
		$data['jadwal'] = $this->model_jadwal->getjadwal($id);
		$data['dokter'] = $this->model_dokter->get_dokter($id);
		$this->load->view('header_page_admin', $data);
		$this->load->view('admin/v_jadwal_dokter', $data);
		$this->load->view('footer_page');
	}

	public function tambahJadwal()
	{
		$data = [
			'id_dokter' => $this->input->post('id_dokter', true),
			'senin' => $this->input->post('senin', true),
			'selasa' => $this->input->post('selasa', true),
			'rabu' => $this->input->post('rabu', true),
			'kamis' => $this->input->post('kamis', true),
			'jumat' => $this->input->post('jumat', true),
			'sabtu' => $this->input->post('sabtu', true),
			'minggu' => $this->input->post('minggu', true)
		];
		$this->model_jadwal->tambah_jadwal($data);
		redirect('admin/dokter/jadwal/' . $data['id_dokter']);
	}

	public function editJadwal($id)
	{
		$data = [
			'id_dokter' => $this->input->post('id_dokter', true),
			'senin' => $this->input->post('senin', true),
			'selasa' => $this->input->post('selasa', true),
			'rabu' => $this->input->post('rabu', true),
			'kamis' => $this->input->post('kamis', true),
			'jumat' => $this->input->post('jumat', true),
			'sabtu' => $this->input->post('sabtu', true),
			'minggu' => $this->input->post('minggu', true)

		];
		$this->model_jadwal->update_jadwal($id, $data);
		redirect('admin/dokter/jadwal/' . $data['id_dokter']);
	}

	public function hapusJadwal($id)
	{
		$this->model_jadwal->delete_jadwal($id);
		redirect('admin/dokter/index/');
	}
}
