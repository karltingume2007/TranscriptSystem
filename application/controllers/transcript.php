<?php 

class transcript extends MY_Controller
{
    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('transcript/transcript');
        $this->LoadViewFooter();
    }
}

