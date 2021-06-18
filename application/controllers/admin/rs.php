<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Rs extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/model_rs');
		       $this->load->model('m_rs');
        $this->load->model('m_user');
        $this->load->model('m_dokter');
        $this->load->model('m_poli');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->library('session');
		$this->load->model('admin/m_admin');
	}

	public function index(){
		$this->m_admin->checklogin();
		$data['title'] = 'Curiter | Data Rumah Sakit';
		$data['rs'] = $this->model_rs->get_rs();
		$data['poli'] = $this->model_rs->get_poli();
		$this->load->view('header_page_admin',$data);
		$this->load->view('admin/v_datars',$data);
		$this->load->view('footer_page');
	}
	public function tambah(){
		$nama_rs = $this->input->post('nama', true);
		$alamat_rs = $this->input->post('alamat', true);
		$website = $this->input->post('website', true);
		$kota = $this->input->post('kota', true);
		$telp_rs = $this->input->post('no', true);
		$fasilitas_rs = $this->input->post('fasilitas', true);
		$tentang_rs = $this->input->post('tentang', true);


		$config['upload_path'] = './assets/rs';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $_FILES['gambar']['name'];

		$this->upload->initialize($config);

		if (!empty($_FILES['gambar']['name'])) {
			if ($this->upload->do_upload('gambar')) {
				$foto = $this->upload->data();
				$data = array(
					'nama_rs' => $nama_rs,
					'alamat_rs' =>$alamat_rs,
					'website' =>$website,
					'kota' => $kota,
					'telp_rs' => $telp_rs,
					'fasilitas_rs' => $fasilitas_rs,
					'tentang_rs' => $tentang_rs,
					'foto_rumahsakit'       => $foto['file_name'],
				);
				$this->model_rs->tambah_rs($data);
				redirect('admin/rs/index');
			} else {
				$this->load->view('gagal');
			}
		} else {

			$this->load->view('gagal');
		}
	}
	public function edit(){
		$id_rs = $this->input->post('id', true);
		$nama_rs = $this->input->post('nama', true);
		$alamat_rs = $this->input->post('alamat', true);
		$website = $this->input->post('website', true);
		$kota = $this->input->post('kota', true);
		$telp_rs = $this->input->post('no', true);
		$fasilitas_rs = $this->input->post('fasilitas', true);
		$tentang_rs = $this->input->post('tentang', true);
		
		$path = './assets/rs/';
		$kondisi = array('id_rs' => $id_rs);

		// ambil foto
		$config['upload_path'] = './assets/rs';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048'; // 2MB
		$config['max_widht'] = '4480'; // Pixel
		$config['max_height'] = '4480'; //Pixel
		$config['file_name'] = $_FILES['gambar']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['gambar']['name'])) {
	        if ( $this->upload->do_upload('gambar') ) {
	            $foto = $this->upload->data();
	            $data = array(
	                        'nama_rs'       => $nama_rs,
							  'alamat_rs'			=> $alamat_rs,
							  'website'			=> $website,
							  'kota'			=> $kota,
							  'telp_rs'			=> $telp_rs,
							  'fasilitas_rs'			=> $fasilitas_rs,
							  'tentang_rs'			=> $tentang_rs,
							  'foto_rumahsakit'       => $foto['file_name'],
	                        );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

							$this->model_rs->update_rs($kondisi,$data);
              redirect('admin/rs/index');
	        }else {
                 echo "Upload Gagal";
	        }
	    }else {
	          $this->load->view('gagal');
		}
	}

	public function hapus($id, $data){
		$path = './assets/rs/';
		@unlink($path.$data);
		$this->model_rs->delete_rs($id);
		redirect('admin/rs/index');
	}

	public function detail_rs($id){
		$data['title'] = "Curiter | Detail Rumah Sakit";
        $data['rsid'] = $this->m_rs->get_datars($id);
        $data['drrs'] = $this->m_dokter->get_dokterbyid($id);
		$data['poli'] = $this->m_poli->get_polibyid($id);
		$data['polik'] = $this->model_rs->get_poli();
        $this->load->view('header_page_admin',$data);
        $this->load->view('admin/v_detail_rs',$data);
        $this->load->view('footer_page');
	}

	public function tambah_poliklinik(){
		$id = $this->input->post('id', true);
		$nama_poli = $this->input->post('nama_poli', true);
		$deskripsi = $this->input->post('deskripsi', true);
		
		$config['upload_path'] = './assets/poli';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $_FILES['gambar']['name'];

		$this->upload->initialize($config);

		if (!empty($_FILES['gambar']['name'])) {
			if ($this->upload->do_upload('gambar')) {
				$foto = $this->upload->data();
				$data = array(
					'id_rs'       => $id,
					'nama_poli'			=> $nama_poli,
					'tentang_poli'			=> $deskripsi,
					'gambar'       => $foto['file_name'],
				);
				$this->model_rs->tambah_poliklinik($data);
				redirect('admin/rs/detail_rs/' . $data['id_rs']);
			} else {
				$this->load->view('gagal');
			}
		} else {

			$this->load->view('gagal');
		}
	}

	public function edit_poliklinik(){
		$id_rs = $this->input->post('id_rs', true);
		$id_poli = $this->input->post('id', true);
		$nama_poli = $this->input->post('nama_poli', true);
		$deskripsi = $this->input->post('tentang_poli', true);
		
		$path = './assets/poli/';
		$kondisi = array('id_poli' => $id_poli);

		// ambil foto
		$config['upload_path'] = './assets/poli';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048'; // 2MB
		$config['max_widht'] = '4480'; // Pixel
		$config['max_height'] = '4480'; //Pixel
		$config['file_name'] = $_FILES['gambar']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['gambar']['name'])) {
	        if ( $this->upload->do_upload('gambar') ) {
	            $foto = $this->upload->data();
	            $data = array(
							  'id_rs'       => $id_rs,
	                          'nama_poli'       => $nama_poli,
							  'tentang_poli'	=> $deskripsi,
							  'gambar'       => $foto['file_name'],
	                        );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

							$this->model_rs->update_poliklinik($kondisi,$data);
              redirect('admin/rs/detail_rs/'.$data['id_rs']);
	        }else {
                 echo "Upload Gagal";
	        }
	    }else {
	          $this->load->view('gagal');
		}
	}

	public function hapus_poli($id, $data){
		$path = './assets/poli/';
		@unlink($path.$data);
		$this->model_rs->delete_poli($id);
		redirect('admin/rs/index');
	}

}