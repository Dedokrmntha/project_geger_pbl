<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
	}

	public function index()
	{
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/login');
        $this->load->view('admin/footer');
            
	}

	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->Auth->login_user($username,$password))
		{
			redirect('Home');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('Login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		redirect('Login');
	}

	

}