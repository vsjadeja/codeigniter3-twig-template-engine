<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('twig');
    }

    public function index() {
        $this->session->set_userdata('user', 'Virendra Jadeja');
        $this->load->view('welcome.html.twig');
    }

}
