<?php

class Done_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getDoneByUserID($userID) {
        $this->db->where('UserID', $userID);
        $query = $this->db->get('done');
        return $done = $query->result();
    }

    function getDoneByID($doneID) {
        $this->db->where('DoneID', $doneID);
        $query = $this->db->get('done');
        return $query->row();
    }

    function newDone($done) {
        $this->db->insert('done', $done);
        return $this->db->insert_id();
    }    

    function deleteDone($doneID) {
        $this->db->where('DoneID', $doneID);
        $this->db->delete('done');
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