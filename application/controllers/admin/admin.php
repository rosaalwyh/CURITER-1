<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('admin/m_admin');
        $this->load->library('session');
        // if ($this->session->has_userdata('admin')){
        //     redirect('admin/admin/login');
        // }
    }

    public function login(){
        $data['title'] = 'Curiter | Sign In';
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        if($this->form_validation->run() == false){
            $this->load->view('v_signinadmin',$data);
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $admin = $this->m_admin->verifikasi($username);
            if ($admin){
                // user ada
                if($password === $admin['password']){
                    $dataA['admin'] = [
                        "id" => $admin['id'],
                    	"username" => $admin['username'],
                        "password" => $admin['password']
                    ];
                    $this->session->set_userdata($dataA);
                    redirect('admin/user/index');
                }else{
                    $this->session->set_flashdata('flash','Wrong Password !');
                    redirect('admin/admin/login');
                }
            }else{
                $this->session->set_flashdata('flash','Unregistered user !');
                redirect('admin/admin/login');
            }
        }
    }
    public function logout(){
        $array_items = array('admin');
        $this->session->unset_userdata($array_items);
        $this->session->set_flashdata('flash','Anda Berhasil Logout ! :)');
        redirect('admin/admin/login');
    	/*$this->session->session_destroy();
    	redirect(site_url('admin/admin/login'));*/
    }
}
