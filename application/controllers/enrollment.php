<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class enrollment extends MY_Controller
{
    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('enrollments/enrollment');
        
        $footer_data = array('angular_js_view' => 'enrollments/enrollment_js');
        
        $this->load->view('includes/footer', $footer_data);
    }   
    
    public function search_enrollments($criteria = null)
    {
        $query = $this->enrollment->search_enrollments($criteria);
        return $query;
    }
}
