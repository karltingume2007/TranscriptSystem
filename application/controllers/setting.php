<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class setting extends MY_Controller {

    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('school_configuration/schoolConfig');
        $this->LoadViewFooter();
    }
}