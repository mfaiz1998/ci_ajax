<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	private $table = 'user';
	
	public function get_all()
	{
		$query =  $this->db->get($this->table);

		if ($query->num_rows()>0) {
			return $query;
		}else{
			return false;
		}
	}
	public function save($data)
	{
		return $this->db->insert($this->table, $data);	
	}
	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
	}
	public function get_by_id($id)
	{
		return $this->db->get_where($this->table, array('id' => $id))->row_array();
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete($this->table);
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */