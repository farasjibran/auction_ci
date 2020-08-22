<?php

defined('BASEPATH') or exit('No direct script access allowed');

class modelsystem extends CI_Model
{
	// for login & register
	public function simpanData()
	{
		// $config['upload_path'] = './assets/';
		// $config['allowed_types'] = 'jpg|png|gif';
		// $config['max_size'] = '2048000';
		// $config['file_name'] = url_title($this->input->post('gambar'));
		// $filename = $this->upload->file_name;
		// $this->upload->initialize($config);
		// $this->upload->do_upload('gambar');
		// $data = $this->upload->data();

		$data = array(
			'id_petugas' => "",
			'nama_petugas' => $this->input->post('username'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'id_level' => $this->input->post('role')
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

	public function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}


	// for barang
	public function simpanBarang()
	{
		$data = array(
			'id_barang' => "",
			'nama_barang' => $this->input->post('namabarang'),
			'harga_awal' => $this->input->post('hargabarang'),
			'deskripsi_barang' => $this->input->post('deskripsiitem')
		);

		$this->db->set('tanggal_upload', 'NOW()', FALSE);
		$this->db->insert('tb_barang', $data);
		header("Location: " . base_url() . 'index.php/homecontroller/addGoods');
	}

	public function get_barang()
	{
		$data = $this->db->get('tb_barang');
		return $data->result();
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function count_barang()
	{
		$data = $this->db->get('tb_barang');
		return $data->num_rows();
	}
}
