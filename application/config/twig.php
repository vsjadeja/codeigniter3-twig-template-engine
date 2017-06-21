<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Twig template extension (default)
$config['twig.extension'] = ".twig";

// Default template locations
$config['twig.locations'] = array(
    APPPATH . "views/" => "../views/",
    FCPATH . "views/" => "../../views/"
);

$config['twig.functions'] = array(
    'asset',
    'base_url',
    '_pre',
    '_jobcategory'
);

$config['twig.filters'] = array(
        // Register filters for use in Twig templates here
);

$config['twig.environment'] = array(
    "cache_location" => APPPATH . "cache/twig/",
    "cache_status" => FALSE,
    "auto_reload" => NULL,
    "debug_mode" => FALSE,
    "autoescape" => FALSE,
    "optimizations" => -1
);
