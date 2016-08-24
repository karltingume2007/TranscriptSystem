<?php

class Enrollment extends MY_Controller
{
    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('enrollments/enrollment');
        $this->LoadViewFooter();
    }
}
