<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 27/09/2018
 * Time: 22:33
 */

class Contact extends CI_Model
{
    var $table = 'contacts';

    function find($limit = null, $offset = 0, $user_id = null, $q = null){
        $this->db->select('contacts.*');
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    function findNotReplied($limit = null, $offset = 0, $user_id = null, $q = null){
        $this->db->select('*');
        $this->db->where('status', '0');
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

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

    public function findReplied() {
        $this->db->select('*');
        $this->db->where('status', 0);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
    }

    public function update($data, $id) {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    function create($contact){
        $this->db->insert($this->table, $contact);
    }
    function delete($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }
}