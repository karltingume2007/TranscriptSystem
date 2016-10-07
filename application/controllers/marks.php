<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class marks extends MY_Controller 
{
    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('marks/marks');
        $this->LoadViewFooter('marks/marks_js');
    }
}
