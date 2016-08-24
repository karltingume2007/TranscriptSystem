<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class school_settings extends MY_Controller {

    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('school_configuration/school_settings');
        $this->LoadViewFooter();
    }
}