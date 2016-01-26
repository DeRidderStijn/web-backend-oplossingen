<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        // load model

    }

    public function index() {
        // populate data
        $data['current'] = $data['title'] = $data['active'] = 'Home';
        $this->session->set_userdata('user_messages', "");
        // load page
        $partials = array('content' => 'home');
        $this->template->load('main', $partials, $data);
    }

}