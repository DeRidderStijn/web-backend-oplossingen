<?php

// +----------------------------------------------------------
// | De Diamantjes
// +----------------------------------------------------------
// | KDG - Project Korfbal
// +----------------------------------------------------------
// | Video model
// +----------------------------------------------------------
// | Wouter Eskens - Stijn De Ridder
// +----------------------------------------------------------

class Video_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // single video
    function get($videoID) {
        $this->db->where('VideoID', $videoID);
        $query = $this->db->get('video');
        return $query->row();
    }

    // all album videos
    function getByAlbum($albumID) {
        $this->db->where('AlbumID', $albumID);
        $query = $this->db->get('video');
        return $query->result();
    }

    // all videos
    function getAll() {
        $query = $this->db->get('video');
        return $query->result();
    }

    // create video
    function insert($video) {
        $this->db->insert('video', $video);
        return $this->db->insert_id();
    }
    
    // create video in album
    function insertVideoInAlbum($video) {
        $this->db->where('AlbumID', $albumID);
        $this->db->insert('video', $video);
        return $this->db->insert_id();
    }

    // update video
    function update($video) {
        $this->db->where('VideoID', $video->VideoID);
        $this->db->update('video', $video);
    }

    // delete video
    function delete($videoID) {
        $this->db->where('VideoID', $videoID);
        $this->db->delete('video');
    }

    // delecte videos from album
    function deleteByAlbum($albumID) {
        $this->db->where('AlbumID', $albumID);
        $this->db->delete('video');
    }

    

}

?>
