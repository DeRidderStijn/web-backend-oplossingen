<!--    
insert into users (username, password) values ('username', MD5('password'));
VB_bureau
VB_16a2BE2547935ZC
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user_model');
 }

  function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('login');
 }


function logout() {
    $this->session->unset_userdata('logged_in');
    $this->session->sess_destroy();

    $message = "Je bent afgemeld. Tot de volgende keer!";
    $this->session->set_userdata('user_messages', $message);
     
    redirect('home', 'refresh');
}

 function viewCreateUser()
 {

 	$user                  = new stdClass();
    $user->Id         = 0;
    $user->Username            = '';
    $user->Password          = '';
        
    $data['user'] = $user;
        
    $data['current'] = $data['title'] = "new_user";
    $data['active'] = "register";

    $partials = array('content' => 'register');
    $this->template->load('main', $partials, $data); //?
 }
 function createUser()
 {
 	$user              = new stdClass();
            
    $user->username    = $this->input->post('email');
    $user->Password    = MD5($this->input->post('password'));    

	$this->user_model->insert($user);
	redirect('home');

 }


}

?>