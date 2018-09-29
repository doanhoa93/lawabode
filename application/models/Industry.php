<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 30/07/2018
 * Time: 22:48
 */

class Industry extends CI_Model
{
	var $table = 'industries';

	// Public methods
	public function findAll() {
		$this->db->select('*');
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get($this->table);

		if ($query->num_rows() > 0) {
			return $query->result_array();
		}
	}

	public function findById($id) {
		$this->db->select('*');
		$this->db->where('id', $id);

		$query = $this->db->get($this->table, 1);

		if ($query->num_rows() > 0) {
			return $query->row_array();
		}
	}

	function find($limit = null, $offset = 0){
		$this->db->select('industries.*');
		$this->db->limit(4, $offset);
		$this->db->order_by('id', 'asc');
		$query = $this->db->get($this->table);

		return $query->result_array();
	}

	public function update($data, $id) {
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
	}

	function create($customer){
		$this->db->insert($this->table, $customer);
	}
	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
}
