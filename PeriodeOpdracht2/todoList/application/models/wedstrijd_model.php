<?php

// +----------------------------------------------------------
// | De Diamantjes
// +----------------------------------------------------------
// | KDG - Project Korfbal
// +----------------------------------------------------------
// | Wedstrijd model
// +----------------------------------------------------------
// | Wouter Eskens - Stijn De Ridder
// +----------------------------------------------------------

class Wedstrijd_model extends CI_Model {

    function __construct() {
        parent::__construct();
        
        $this->load->model('evenement_model');
        $this->load->model('locatie_model');
        $this->load->model('soort_wedstrijd_model');
        $this->load->model('team_model');
    }

    // single game
    function get($wedstrijdID) {
        $this->db->where('WedstrijdID', $wedstrijdID);
        $query = $this->db->get('wedstrijd');
        return $query->row();
    }

    // single game as event
    function getAsEvenement($wedstrijdID) {
        $this->db->where('WedstrijdID', $wedstrijdID);
        $query = $this->db->get('wedstrijd');
        $match = $query->row();

        if ($match->Team1ID != null) {
            $match->team1 = $this->team_model->get($match->Team1ID);
        }
        if ($match->Team2ID != null) {
            $match->team2 = $this->team_model->get($match->Team2ID);
        }

        return $match;
    }

    // all games
    function getAll() {
        $query = $this->db->get('wedstrijd');
        $matches = $query->result();
        
        foreach ($matches as $match) {
            $match->evenement = $this->evenement_model->get($match->EvenementID);
            $match->evenement->locatie = $this->locatie_model->get($match->evenement->LocatieID);
            $match->soort_wedstrijd = $this->soort_wedstrijd_model->get($match->SoortWedstrijdID);

            if ($match->Team1ID != null) {
                $match->team1 = $this->team_model->get($match->Team1ID);
            }
            if ($match->Team2ID != null) {
                $match->team2 = $this->team_model->get($match->Team2ID);
            }
        }

        return $matches;
    }

    // all games by type of game
    function getAllFromSoortWedstrijd($SoortWedstrijdID) {
        $this->db->where('SoortWedstrijdID', $SoortWedstrijdID);
        $query = $this->db->get('wedstrijd');
        $matches = $query->result();

        foreach ($matches as $match) {
            $match->evenement = $this->evenement_model->get($match->EvenementID);
            $match->evenement->locatie = $this->locatie_model->get($match->evenement->LocatieID);
            $match->soort_wedstrijd = $this->soort_wedstrijd_model->get($match->SoortWedstrijdID);
            if ($match->Team1ID != null) {
                $match->team1 = $this->team_model->get($match->Team1ID);
            }
            if ($match->Team2ID != null) {
                $match->team2 = $this->team_model->get($match->Team2ID);
            }
        }

        return $matches;
    }

    // top one game on a location
    function getOneFromLocation($locationID) {
        $this->db->select('*');
        $this->db->from('wedstrijd');
        $this->db->join('evenement', 'evenement.EvenementID = wedstrijd.EvenementID');
        $this->db->where('evenement.LocatieID', $locationID);
        $this->db->order_by('evenement.Datum', 'ASC');
        $this->db->limit(1);

        $query = $this->db->get();

        $match = $query->row();

        if ($match != null) {

            $match->evenement = $this->evenement_model->get($match->EvenementID);

            if ($match->Team1ID != null) {
                $match->team1 = $this->team_model->get($match->Team1ID);
            }
            if ($match->Team2ID != null) {
                $match->team2 = $this->team_model->get($match->Team2ID);
            }
        }

        return $match;
    }

    // create game
    function insert($wedstrijd) {
        $this->db->insert('wedstrijd', $wedstrijd);
        return $this->db->insert_id();
    }

    // update game
    function update($wedstrijd) {
        $this->db->where('WedstrijdID', $wedstrijd->WedstrijdID);
        $this->db->update('wedstrijd', $wedstrijd);
    }

    // delete game
    function delete($wedstrijdID) {
        $this->db->where('WedstrijdID', $wedstrijdID);
        $this->db->delete('wedstrijd');
    }

}

?>
