<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}
	public function index()
	{
		$data['title'] = "Lihat Data User";

		$user = $this->db->get('user')->result();
		$data['user'] = $user;
		$this->load->view('user/list_user', $data);
	}

	public function get_all_data()
	{
		$data_user = $this->M_user->get_all()->result();
		echo json_encode($data_user);
	}
	public function simpan()
	{
		$id_user=$this->input->post('id_user');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$hp=$this->input->post('hp');
		$jenkel=$this->input->post('jenkel');

		$data_user = array(
			'id' => $id_user, 
			'nama' => $nama, 
			'alamat' => $alamat, 
			'no_hp' => $hp, 
			'jenis_kelamin' => $jenkel, 
		);
		$data = $this->M_user->save($data_user);
		echo json_encode($data);
	}

	public function get_row()
	{
		$id = $this->input->get('id');
		$data = $this->M_user->get_by_id($id);
		echo json_encode($data);
	}

	public function update()
	{
		$id_user=$this->input->post('id_user');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$hp=$this->input->post('hp');
		$jenkel=$this->input->post('jenkel');

		$data_user = array(
			'nama' => $nama, 
			'alamat' => $alamat, 
			'no_hp' => $hp, 
			'jenis_kelamin' => $jenkel, 
		);
		$data = $this->M_user->update($id_user,$data_user);
		echo json_encode($data);
	}
	public function hapus_user()
	{
		$data = $this->M_user->delete($this->input->post('id_user'));
		echo json_encode($data);
	}
}
