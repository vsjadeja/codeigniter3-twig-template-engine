<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('twig');
    }

    public function index() {
        $this->twig->parse('welcome.html.twig', array('name' => 'Virendra Jadeja'));
    }

}
