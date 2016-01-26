<?php

// +----------------------------------------------------------
// | De Diamantjes
// +----------------------------------------------------------
// | KDG - Project Korfbal
// +----------------------------------------------------------
// | Language switch controller
// +----------------------------------------------------------
// | Wouter Eskens - Stijn De Ridder
// +----------------------------------------------------------

class Language_Switch extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
 
    function switchLanguage($language = "") {
        $language = ($language != "") ? $language : "english";
        $this->session->set_userdata('site_lang', $language);
        redirect(base_url());
    }
}