<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelsystem');
		$this->load->model('modelexcel');
		$this->load->helper('url');
	}

	public function index()
	{
		$title['title'] = "Auction";
		$this->load->view('home', $title);
	}

	public function homeUser()
	{
		if ($this->session->userdata('id_level') == 3) {
			$data['title'] = "Auction";
			$data['barang'] = $this->modelsystem->get_barang();
			$data['c_barang'] = $this->modelsystem->count_barang();
			$this->load->view('users/homeuser', $data);
		} else {
			echo 'this is user view';
		}
	}

	// view login
	public function login()
	{
		if ($this->session->userdata('status') == "login") {
			if ($this->session->userdata('id_level') == 3) {
				$data['title'] = "Auction";
				$data['barang'] = $this->modelsystem->get_barang();
				$data['c_barang'] = $this->modelsystem->count_barang();
				$this->load->view('users/homeuser', $data);
			} else if ($this->session->userdata('id_level') == 1 && 2) {
				$data['title'] = "Auction";
				$data['barang'] = $this->modelsystem->get_barang();
				$data['c_barang'] = $this->modelsystem->count_barang();
				$this->load->view('admin/homeadmin', $data);
			}
		} else {
			$title['title'] = "Auction";
			$this->load->view('login', $title);
		}
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
		$this->modelsystem->simpanUser();
	}

	// register petugas
	public function registerPetugas()
	{
		$this->modelsystem->simpanPetugas();
	}

	// load data
	public function datauser()
	{
		if ($this->session->userdata('id_level') == 3) {
			$data['title'] = "Auction";
			$data['user'] = $this->modelsystem->get_user();
			$data['c_user'] = $this->modelsystem->count_user();

			$this->load->view('test', $data);
		} else {
			echo 'this is user view';
		}
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
				$namauser = $this->modelsystem->cek_login($where)->row(0)->nama_petugas;
				if ($idlevel == '1') {
					$data_session = array(
						'id_level' => $idlevel,
						'nama_user' => $namauser,
						'usernama' => $usernames,
						'role' => 'Administrator',
						'status' => 'login'
					);
					$this->session->set_userdata($data_session);
					if ($this->session->userdata('status') == 'login') {
						header("Location: " . base_url() . 'index.php/homecontroller/adminHome');
					} else {
						echo "Username Atau Password Anda Salah!";
					}
				} else {
					$data_session = array(
						'id_level' => $idlevel,
						'nama_user' => $namauser,
						'usernama' => $usernames,
						'role' => 'Officer',
						'status' => 'login'
					);
					$this->session->set_userdata($data_session);
					if ($this->session->userdata('status') == 'login') {
						header("Location: " . base_url() . 'index.php/homecontroller/adminHome');
					} else {
						echo "Username Atau Password Anda Salah!";
					}
				}
			} else {
				$idlevel = $this->modelsystem->cek_login($where)->row(0)->id_level;
				$namauser = $this->modelsystem->cek_login($where)->row(0)->nama_petugas;
				$data_session = array(
					'id_level' => $idlevel,
					'nama_user' => $namauser,
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

	public function dataBarang()
	{
		$databarang = $this->modelsystem->get_barang();
		foreach ($databarang as $value) {
			$tbody = array();
			$tbody[] = $value['id_barang'];
			$tbody[] = $value['nama_barang'];
			$tbody[] = $value['tanggal_upload'];
			$tbody[] = $value['harga_awal'];
			$tbody[] = $value['deskripsi_barang'];
			$tbody[] = $value['kategori_barang'];
			$img = "<img style='width: 100%;' src='http://localhost/auction_ci/assets/fotobarang/" . $value['foto_barang'] . "' ?>";
			$tbody[] = $img;
			$tbody[] = $value['status'];
			$btn = "<button type='button' class='btn btn-primary btn-icon-split editbtn' name='editbtn' data-toggle='modal' id=" . $value['id_barang'] . " 	style='padding-right: 6%;'>
						<span class='icon text-white'>
							<i class='fas fa-edit'></i>
						</span>
						<span class='text'>Edit Data</span>
						</button>
						<button type='button' data-toggle='modal' name='deletebtn' id=" . $value['id_barang'] . " class='btn btn-danger btn-icon-split mt-2 deletebtn'>
							<span class='icon text-white'>
								<i class='fas fa-trash'></i>
							</span>
							<span class='text'>Delete Data</span>
						</button>";
			$tbody[] = $btn;
			$data[] = $tbody;
		}
		if ($databarang) {
			echo json_encode(array('data' => $data));
		} else {
			echo json_encode(array('data' => 0));
		}
	}

	public function viewGoods()
	{
		if ($this->session->userdata('id_level') == 1 || 2) {
			$data['title'] = "Auction";
			$this->load->view('admin/viewgoods', $data);
		} else {
			echo 'this is user view';
		}
	}

	// admin home
	public function adminHome()
	{
		if ($this->session->userdata('id_level') == 1 || 2) {
			$data['title'] = "Auction";
			$data['totaladmn'] = $this->modelsystem->dataAdmin();
			$data['totaluser'] = $this->modelsystem->dataPetugas();
			$data['totalbarang'] = $this->modelsystem->dataBarang();
			$this->load->view('admin/homeadmin', $data);
		} else {
			echo 'this is user view';
		}
	}

	// add user
	public function addOfficerdata()
	{
		$this->modelsystem->simpanPetugas();
	}

	// add goods
	public function addData()
	{
		if ($_POST["action"] == "Add") {
			$data = array(
				'id_barang' => "",
				'nama_barang' => $this->input->post('namabarang'),
				'harga_awal' => $this->input->post('hargabarang'),
				'deskripsi_barang' => $this->input->post('deskripsiitem'),
				'kategori_barang' => $this->input->post('kategoriitem'),
				'foto_barang' => $this->upload_image(),
				'status' => $this->input->post('status')
			);
			$this->db->set('tanggal_upload', 'NOW()', FALSE);
			$this->db->insert('tb_barang', $data);
			echo 'Data Inserted';
		}
	}

	public function editData()
	{
		if ($_POST["action"] == "Edit") {
			$idbarang = $this->input->post('id_barang');
			$data = array(
				'nama_barang' => $this->input->post('namabarang'),
				'harga_awal' => $this->input->post('hargabarang'),
				'deskripsi_barang' => $this->input->post('deskripsiitem'),
				'kategori_barang' => $this->input->post('kategoriitem'),
				'foto_barang' => $this->upload_image(),
				'status' => $this->input->post('status')
			);

			$where = array(
				'id_barang' => $idbarang
			);

			$this->db->set('tanggal_upload', 'NOW()', FALSE);
			$this->modelsystem->update_data($where, $data, 'tb_barang');
			echo 'Data Updated';
		}
	}

	// function upload image
	public function upload_image()
	{
		if (isset($_FILES['user_image'])) {
			$extension = explode('.', $_FILES['user_image']['name']);
			$new_name = rand() . '.' . $extension[1];
			$destination = './assets/fotobarang/' . $new_name;
			move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
			return $new_name;
		}
	}

	// function edit data
	public function getIdBarang()
	{
		$output = array();
		$data = $this->modelsystem->getIdBarang($_POST["id_barang"]);
		foreach ($data as $row) {
			$output['nama_barang'] = $row->nama_barang;
			$output['harga_awal'] = $row->harga_awal;
			$output['deskripsi_barang'] = $row->deskripsi_barang;
			$output['kategori_barang'] = $row->kategori_barang;
			if ($row->foto_barang != '') {
				$output['foto_barang'] = '<img style="width: 100%;" src="' . base_url() . 'assets/fotobarang/' . $row->foto_barang . '" /><input type="hidden" name="hidden_barang_image" value="' . $row->foto_barang . '"/>';
			} else {
				$output['foto_barang'] = '<input type="hidden" name="hidden_barang_image" value=""/>';
			}
			$output['status'] = $row->status;
		}
		echo json_encode($output);
	}

	// Delete Barang
	public function deleteBarang()
	{
		$idbarang = $_POST['id_barang'];
		$where = array(
			'id_barang' => $idbarang
		);

		$this->modelsystem->hapus_data($where, 'tb_barang');
	}

	// dompdf
	public function cetakData()
	{
		$data['barang'] = $this->modelsystem->get_barang();
		$data['c_barang'] = $this->modelsystem->count_barang();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Laporan-Data-Barang-" . date('d-m-Y') . ".pdf";
		$this->pdf->load_view('cetakpdf', $data);
	}

	// export excel
	public function cetakExcel()
	{
		$this->modelexcel->exportBarang();
	}

	// view officer view
	public function viewOfficer()
	{
		if ($this->session->userdata('id_level') == 1 || 2) {
			$data['users'] = $this->modelsystem->get_user();
			$data['c_users'] = $this->modelsystem->count_user();
			$data['title'] = "Auction";
			$this->load->view('officer/viewofficer', $data);
		} else {
			echo 'this is user view';
		}
	}

	// update data officer
	public function updateOfficer()
	{
		$idpetugas = $this->input->post('idpetugas');
		$namapetugas = $this->input->post('namapetugas');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = $this->input->post('role');

		$data = array(
			'nama_petugas' => $namapetugas,
			'username' => $username,
			'password' => $password,
			'id_level' => $role

		);

		$where = array(
			'id_petugas' => $idpetugas
		);

		$this->modelsystem->update_data($where, $data, 'tb_petugas');
		header("Location: " . base_url() . 'index.php/homecontroller/viewOfficer');
	}

	// delete user
	public function deleteOfficer()
	{
		$idpetugas = $this->input->post('idpetugass');

		$where = array(
			'id_petugas' => $idpetugas
		);

		echo $where;

		$this->modelsystem->hapus_data($where, 'tb_petugas');
		header("Location: " . base_url() . 'index.php/homecontroller/viewOfficer');
	}

	// 404 password
	public function error404()
	{
		$data['title'] = "404";
		$this->load->view('errors/404', $data);
	}
}
