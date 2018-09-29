<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 20/08/2018
 * Time: 22:49
 */

class Slider extends CI_Model{

    var $table = 'slider';
    var $status = array(
        0 => 'Inactive',
        1 => 'Active'
    );

    function find($limit = null, $offset = 0){
        $this->db->select('slider.*');
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    // Public methods
    public function findAll() {
        $this->db->select('*');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    // Public methods
    public function findAllActive($status) {
        $this->db->select('*');
        $this->db->where('status', $status);
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
