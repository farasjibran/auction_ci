<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelsystem');
	}

	public function index()
	{
		$title['title'] = "Auction";
		$this->load->view('home', $title);
	}

	// view login
	public function login()
	{
		$title['title'] = "Auction";
		$this->load->view('login', $title);
	}

	// view register
	public function register()
	{
		$title['title'] = "Auction";
		$this->load->view('register', $title);
	}

	// register user
	public function registerUser()
	{
		$this->modelsystem->simpanData();
	}

	// load data
	public function datauser()
	{
		$data['title'] = "Auction";
		$data['user'] = $this->modelsystem->get_user();
		$data['c_user'] = $this->modelsystem->count_user();

		$this->load->view('test', $data);
	}

	// login user
	public function loginUser()
	{
		$usernames = $this->input->post('username');
		$passwords = $this->input->post('password');
		$where = array(
			'username' => $usernames,
			'password' => $passwords
		);
		$cek = $this->modelsystem->cek_login("tb_petugas", $where)->num_rows();

		if ($cek > 0) {
			$data_session = array(
				'usernama' => $usernames,
				'status' => 'login'
			);

			$this->session->set_userdata($data_session);

			if ($this->session->userdata('status') == 'login') {
				header("Location: " . base_url() . 'index.php/homecontroller/adminhome');
			} else {
				echo "Username Atau Password Anda Salah!";
			}
		} else {
			header("Location: " . base_url() . 'index.php/homecontroller/error404');
		}
	}

	// logout user
	public function logoutUser()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	// admin home
	public function adminHome()
	{
		$data['title'] = "Auction";
		$data['barang'] = $this->modelsystem->get_barang();
		$data['c_barang'] = $this->modelsystem->count_barang();
		$this->load->view('admin/homeadmin', $data);
	}

	// add goods view
	public function addGoods()
	{
		$data['title'] = "Auction";
		$this->load->view('admin/addgoods', $data);
	}

	// add goods
	public function addData()
	{
		$this->modelsystem->simpanBarang();
	}

	// 404 password
	public function error404()
	{
		$data['title'] = "404";
		$this->load->view('404', $data);
	}
}
