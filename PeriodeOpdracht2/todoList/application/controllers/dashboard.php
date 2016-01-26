<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        // load model

    }

    public function index() {
        // populate data
        $data['current'] = $data['title'] = $data['active'] = 'Dashboard';

        // load page
        $partials = array('content' => 'dashboard');
        $this->template->load('main', $partials, $data);
    }

}