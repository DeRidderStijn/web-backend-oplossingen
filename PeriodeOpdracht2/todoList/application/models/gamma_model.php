<?php

class Gamma_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get($gammaID) {
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
    }

    // upload picture
    function do_upload($afbeelding) {
        // path where the picture needs to be uploaded
        echo $album_path = APPPATH . 'images/covers';
        
        // configuration for the upload
        $ext = end(explode(".", $_FILES['userfile']['name']));
        $config = array(
            'file_name' => $afbeelding . '.' . $ext,
            'upload_path' => $album_path,
            'allowed_types' => 'gif|jpg|jpeg|png',
            'max_size' => '5120'
        );
        // load upload library with the configuration
        $this->load->library('upload', $config);
        // upload picture with the upload library
        if (!$this->upload->do_upload()) {
            echo $this->upload->display_errors();
            die();
        }
        // get data array of the uploaded picture
        $image_data = $this->upload->data();
        // configuration for the picture thumbnail resize
        echo $image_data['full_path'];
        $config = array(
            'source_image' => $image_data['full_path'],
            'new_image' => realpath($album_path . '/thumb'),
            'maintain_ration' => TRUE,
            'width' => 300,
            'height' => 300
        );
        // load image manupulation library with the configuration
        $this->load->library('image_lib', $config);
        // resize picture
        $this->image_lib->resize();
        $this->image_lib->clear();
        // submit file name of the uploaded picture to save it in the database
        $bestandsnaam = $image_data['file_name'];
        return $bestandsnaam;
    }

function upload_image($filename) {
    if($filename!='' )
    {
    $filename1 = explode(',',$filename);
    $counter = 0;
    foreach($filename1 as $file){
        $counter += 1;
        $file_data = array(
        'name' => $file,
        'datetime' => date('Y-m-d h:i:s')
        );} }

}

}
?>