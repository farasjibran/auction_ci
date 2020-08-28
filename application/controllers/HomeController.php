<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelsystem');
		$this->load->helper('url');
	}

	public function index()
	{
		$title['title'] = "Auction";
		$this->load->view('home', $title);
	}

	public function homeUser()
	{
		$title['title'] = "Auction";
		$this->load->view('users/homeuser', $title);
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
		$cek = $this->modelsystem->cek_login($where)->num_rows();

		if ($cek > 0) {
			$idlevel = $this->modelsystem->cek_login($where)->row(0)->id_level;
			print_r($idlevel);
			if ($idlevel == '1' || $idlevel == '2') {
				$idlevel = $this->modelsystem->cek_login($where)->row(0)->id_level;
				$data_session = array(
					'id_level' => $idlevel,
					'usernama' => $usernames,
					'status' => 'login'
				);
				$this->session->set_userdata($data_session);
				if ($this->session->userdata('status') == 'login') {
					header("Location: " . base_url() . 'index.php/homecontroller/adminHome');
				} else {
					echo "Username Atau Password Anda Salah!";
				}
			} else {
				$idlevel = $this->modelsystem->cek_login($where)->row(0)->id_level;
				$data_session = array(
					'id_level' => $idlevel,
					'usernama' => $usernames,
					'status' => 'login'
				);
				$this->session->set_userdata($data_session);
				if ($this->session->userdata('status') == 'login') {
					header("Location: " . base_url() . 'index.php/homecontroller/homeUser');
				} else {
					echo "Username Atau Password Anda Salah!";
				}
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

	// update barang
	public function updateData()
	{
		$idbarangs = $this->input->post('idbarang');
		$namabarangs = $this->input->post('namabarang');
		$hargabarangs = $this->input->post('hargabarang');
		$deskripsiitems = $this->input->post('deskripsiitem');
		$foto = $_FILES['foto']['tmp_name'];
		if ($foto = '') {
			echo "Tidak Ada Gambar!";
		} else {
			$config['upload_path'] = './assets/fotobarang';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload');
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')) {
				echo "gagal upload";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_barang' => $namabarangs,
			'harga_awal' => $hargabarangs,
			'deskripsi_barang' => $deskripsiitems,
			'foto_barang' => $foto

		);

		$where = array(
			'id_barang' => $idbarangs
		);

		$this->db->set('tanggal_upload', 'NOW()', FALSE);
		$this->modelsystem->update_data($where, $data, 'tb_barang');
		header("Location: " . base_url() . 'index.php/homecontroller/adminHome');
	}

	// delete barang
	public function deleteData()
	{
		$idbarangs = $this->input->post('idbarangs');

		$where = array(
			'id_barang' => $idbarangs
		);

		echo $where;

		$this->modelsystem->hapus_data($where, 'tb_barang');
		header("Location: " . base_url() . 'index.php/homecontroller/adminHome');
	}

	// dompdf
	public function cetakData()
	{
		$data['barang'] = $this->modelsystem->get_barang();
		$data['c_barang'] = $this->modelsystem->count_barang();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Laporan-Data-Barang.pdf";
		$this->pdf->load_view('cetakpdf', $data);
	}


	// 404 password
	public function error404()
	{
		$data['title'] = "404";
		$this->load->view('errors/404', $data);
	}
}
