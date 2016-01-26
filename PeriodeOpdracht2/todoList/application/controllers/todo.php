<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Todo extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('todo_model');    
        $this->load->model('done_model');
        $this->load->model('user_model');       
        $this->load->library('session');   
    }

    public function viewTodo()
    {
        $data['current']    = $data['title'] = $data['active'] = "todo";
        $id                 = $this->session->userdata["logged_in"]["id"];
        $data['todo']       = $this->todo_model->getTodoByUserID($id);
        $data['done']       = $this->done_model->getDoneByUserID($id);

        $partials           = array('content' => 'todo'); 
        $this->template->load('main', $partials, $data);
    }

    public function viewCreateTodo()
    {
        $todo                           = new stdClass();
        $todo->TodoID                   = 0;
        $todo->UserID                   = 0;
        $todo->Beschrijving             = '';

        $data['todo'] = $todo;
        
        $data['current'] = $data['title'] = "new_todo";
        $data['active'] = "create_todo";
       

        $partials = array('content' => 'create_todo');
        $this->template->load('main', $partials, $data); 
    }

    public function createTodo() {
        
        $todo                   = new stdClass();
            
        $todo->UserID           = $this->session->userdata["logged_in"]["id"];
        $todo->Beschrijving     = $this->input->post('beschrijving');
        
        $todo->TodoID           = $this->todo_model->newTodo($todo);


        $message = "Todo " . $todo->Beschrijving . " toegevoegd.";
        $this->session->set_userdata('user_messages', $message);

        
        redirect('todo/viewTodo');
    }

    public function todoCompleted($todoID) {
        $todo           = new stdClass();
        $todo           = $this->todo_model->getTodoByID($todoID);

        $done           = new stdClass();
        $done->UserID   = $todo->UserID;
        $done->Beschrijving = $todo->Beschrijving;

        $done->DoneID   = $this->done_model->newDone($done);
        $this->todo_model->deleteTodo($todoID);

        $message = "Alright! Dat is geschrapt.";
        $this->session->set_userdata('user_messages', $message);

        redirect('todo/viewTodo');
    }

    public function uncomplete($doneID) {
        $done           = new stdClass();
        $done           = $this->done_model->getDoneByID($doneID);

        $todo           = new stdClass();
        $todo->UserID   = $done->UserID;
        $todo->Beschrijving = $done->Beschrijving;

        $todo->DoneID   = $this->todo_model->newTodo($todo);
        $this->done_model->deleteDone($doneID);

        $message = "Ai ai, nog meer werk...";
        $this->session->set_userdata('user_messages', $message);

        redirect('todo/viewTodo');
    }

    public function deleteTodo($todoID) {
        $todo           = new stdClass();
        $todo           = $this->todo_model->getTodoByID($todoID);

        $message = "Het item " . $todo->Beschrijving . " werd verwijderd.";
        $this->session->set_userdata('user_messages', $message);

        $this->todo_model->deleteTodo($todoID);
        redirect('todo/viewTodo');

        
    } 

    public function deleteDone($doneID) {
        $done           = new stdClass();
        $done           = $this->done_model->getDoneByID($doneID);

        $message = "Het item " . $done->Beschrijving . " werd verwijderd.";
        $this->session->set_userdata('user_messages', $message);

        $this->done_model->deleteDone($doneID);
        redirect('todo/viewTodo');
    } 



    /*public function viewContact(){
        $data['current']    = $data['title'] = $data['active'] = "Contact";
        $data['vertegenwoordiger']     = $this->contact_model->getAllVertegenwoordigers();
        $data['afdeling'] = $this->contact_model->getAllAfdelingen();
        
        $partials           = array('content' => 'contact_overview');
        $this->template->load('main', $partials, $data);
    }
    public function viewAll() {
        $data['current']    = $data['title'] = $data['active'] = "Contact";
        $data['vertegenwoordiger']     = $this->contact_model->getAllVertegenwoordigers();
        $data['afdeling'] = $this->contact_model->getAllAfdelingen();

        $partials           = array('content' => 'contact_viewAll');
        $this->template->load('main', $partials, $data);

    }
    public function viewLocatie(){
        $data['current']    = $data['title'] = $data['active'] = "Contact";

        $partials           = array('content' => 'contact_locatie');
        $this->template->load('main', $partials, $data);
    }
    public function viewFinancieel(){
        $data['current']    = $data['title'] = $data['active'] = "Contact";

        $partials           = array('content' => 'contact_financieel');
        $this->template->load('main', $partials, $data);
    }
    public function viewAdminContact() {
        $data['current']    = $data['title'] = $data['active'] = "manage_contact";
        $data['vertegenwoordiger']     = $this->contact_model->getAllVertegenwoordigers();
        $data['afdeling'] = $this->contact_model->getAllAfdelingen();

        $partials = array('content' => 'admin_contact');
        $this->template->load('main', $partials, $data);
        
    }
    public function viewCreateVertegenwoordigerPage() {
        $vertegenwoordiger                          = new stdClass();
        $vertegenwoordiger->VertegenwoordigerID     = 0;
        $vertegenwoordiger->Voornaam                ='';
        $vertegenwoordiger->Achternaam              ='';
        $vertegenwoordiger->EMail                   ='';
        $vertegenwoordiger->TelefoonNr              ='';
        $vertegenwoordiger->Regio                   ='';

        $data['vertegenwoordiger'] = $vertegenwoordiger;
        
        $data['current'] = $data['title'] = "new_vertegenwoordiger";
        $data['active'] = "manage_contact";
       

        $partials = array('content' => 'create_contact_vertegenwoordiger');
        $this->template->load('main', $partials, $data); 
    }
    public function viewCreateAfdelingPage() {
        $afdeling                          = new stdClass();
        $afdeling->AfdelingID     = 0;
        $afdeling->Dienst                  ='';
        $afdeling->Voornaam                ='';
        $afdeling->Achternaam              ='';
        $afdeling->TelefoonNr              ='';
        $afdeling->EMail                   ='';
       
        

        $data['afdeling'] = $afdeling;
        
        $data['current'] = $data['title'] = "new_afdeling";
        $data['active'] = "manage_contact";
       

        $partials = array('content' => 'create_contact_afdeling');
        $this->template->load('main', $partials, $data); 
    }
     public function createVertegenwoordiger() {
        
            $vertegenwoordiger              = new stdClass();
            
            $vertegenwoordiger->VertegenwoordigerID = $this->input->post('vertegenwoordigerID') == 0 ? null : $this->input->post('vertegenwoordigerID');
            $vertegenwoordiger->Voornaam            = $this->input->post('voornaam');
            $vertegenwoordiger->Achternaam          = $this->input->post('achternaam');
            $vertegenwoordiger->EMail               = $this->input->post('eMail');
            $vertegenwoordiger->TelefoonNr          = $this->input->post('telefoonNr');
            $vertegenwoordiger->Regio               = $this->input->post('regio');
            
            if ($vertegenwoordiger->VertegenwoordigerID == 0) {
                $vertegenwoordiger->VertegenwoordigerID = $this->contact_model->insertVertegenwoordiger($vertegenwoordiger);
            } else {
                $this->contact_model->updateVertegenwoordiger($vertegenwoordiger);
            }
            redirect('contact/viewAdminContact');
    }
    public function createAfdeling() {
        
            $afdeling              = new stdClass();
            
            $afdeling->AfdelingID = $this->input->post('afdelingID') == 0 ? null : $this->input->post('afdelingID');
            $afdeling->Dienst              = $this->input->post('dienst');
            $afdeling->Voornaam            = $this->input->post('voornaam');
            $afdeling->Achternaam          = $this->input->post('achternaam');
            $afdeling->TelefoonNr          = $this->input->post('telefoonNr');
            $afdeling->EMail               = $this->input->post('eMail');
            
            if ($afdeling->AfdelingID == 0) {
                $afdeling->AfdelingID = $this->contact_model->insertAfdeling($afdeling);
            } else {
                $this->contact_model->updateAfdeling($afdeling);
            }
            redirect('contact/viewAdminContact');
    }
    public function viewUpdateVertegenwoordiger($vertegenwoordigerID) {
            $data['vertegenwoordiger']      = $this->contact_model->getVertegenwoordiger($vertegenwoordigerID);
            $data['current']    = $data['title'] = ("edit_vertegenwoordiger");
            $data['active']     = "manage_contact";

            $partials = array('content' => 'create_contact_vertegenwoordiger');
            $this->template->load('main', $partials, $data);
    }
    public function viewUpdateAfdeling($afdelingID) {
            $data['afdeling']      = $this->contact_model->getAfdeling($afdelingID);
            $data['current']    = $data['title'] = ("edit_afdeling");
            $data['active']     = "manage_contact";

            $partials = array('content' => 'create_contact_afdeling');
            $this->template->load('main', $partials, $data);
    }
    public function deleteVertegenwoordiger($vertegenwoordigerID) {

            $this->contact_model->deleteVertegenwoordiger($vertegenwoordigerID);
            redirect('contact/viewAdminContact');
    } 
    public function deleteAfdeling($afdelingID) {

            $this->contact_model->deleteAfdeling($afdelingID);
            redirect('contact/viewAdminContact');
    } */
}
 