<?php

defined('BASEPATH') or exit('No direct script access allowed');

class modelsystem extends CI_Model
{
	// for login & register
	public function simpanPetugas()
	{
		$data = array(
			'id_petugas' => "",
			'nama_petugas' => $this->input->post('namapetugas'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'id_level' => $this->input->post('role')
		);


		$this->db->insert('tb_petugas', $data);
		header("Location: " . base_url() . 'index.php/homecontroller/viewOfficer');
	}

	// register
	public function simpanUser()
	{
		$data = array(
			'id_petugas' => "",
			'nama_petugas' => $this->input->post('namauser'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'id_level' => $this->input->post('idlevel')
		);


		$this->db->insert('tb_petugas', $data);
		header("Location: " . base_url() . 'index.php/homecontroller/login');
	}

	public function get_user()
	{
		$data = $this->db->get('tb_petugas');
		return $data->result();
	}

	public function count_user()
	{
		$data = $this->db->get('tb_petugas');
		return $data->num_rows();
	}

	public function cek_login($user)
	{
		$datauser = $this->db->get_where('tb_petugas', $user);
		return $datauser;
	}

	public function get_barang()
	{
		$data = $this->db->get('tb_barang');
		return $data->result_array();
	}

	// public function count_barang()
	// {
	// 	$data = $this->db->get('tb_barang');
	// 	return $data->num_rows();
	// }

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function dataAdmin()
	{
		$this->db->where('id_level', '1');
		return $this->db->count_all_results('tb_petugas');
	}

	public function dataPetugas()
	{
		$this->db->where('id_level', '2');
		return $this->db->count_all_results('tb_petugas');
	}

	public function dataBarang()
	{
		// $query = $this->db->query("SELECT COUNT(id_barang) FROM tb_barang");
		// return $query->result();
		$data = $this->db->get('tb_barang');
		return $data->num_rows();
	}

	// AJAX MODEL
	// function edit
	public function getIdBarang($id_barang)
	{
		$this->db->where("id_barang", $id_barang);
		$query = $this->db->get('tb_barang');
		return $query->result();
	}

	public function updateBarang($id_barang, $data)
	{
		$this->db->where("id_barang", $id_barang);
		$this->db->update("tb_barang", $data);
	}
}
