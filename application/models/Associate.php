<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 13/10/2018
 * Time: 23:01
 */

class Associate extends CI_Model{

    var $table = 'associates';



    // Public methods
    public function findAll() {
        $this->db->select('*');
        $this->db->where('type', 'associate');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function find($limit = null, $offset = 0){
        $this->db->select('associates.*');
        $this->db->limit(4, $offset);
        $this->db->order_by('id', 'asc');
        $query = $this->db->get($this->table);

        return $query->result_array();
    }

    public function findById($id) {
        $this->db->select('*');
        $this->db->where('id', $id);

        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
    }

    public function create($data = array()) {

        $this->db->insert($this->table, $data);
    }

    public function update($data, $id) {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    function delete($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }
}