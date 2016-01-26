<?php

class Todo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function getTodoByUserID($userID) {
        $this->db->where('UserID', $userID);
        $query = $this->db->get('todo');
        return $todo = $query->result();
    }

    function newTodo($todo) {
        $this->db->insert('todo', $todo);
        return $this->db->insert_id();
    }    

    function deleteTodo($todoID) {
        $this->db->where('TodoID', $todoID);
        $this->db->delete('todo');
    }
    function getTodoByID($todoID) {
        $this->db->where('TodoID', $todoID);
        $query = $this->db->get('todo');
        return $query->row();
    }

    /*function get($gammaID) {
        $this->db->where('GammaID', $gammaID);
        $query = $this->db->get('gamma');
        return $query->row();
    }
    function getAll() {
        $this->db->order_by("Naam", "ASC");
        $query = $this->db->get('gamma');
        return $gammas = $query->result();
    }
    function insert($gamma) {
        $this->db->insert('gamma', $gamma);
        return $this->db->insert_id();
    }
    function update($gamma) {
        $this->db->where('GammaID', $gamma->GammaID);
        $this->db->update('gamma', $gamma);
    }
    function delete($gammaID) {
        $this->db->where('GammaID', $gammaID);
        $this->db->delete('gamma');
    }*/

}
?>