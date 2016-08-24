<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends MY_Controller {

    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('school_settings');
        $this->LoadViewFooter();
    }
}