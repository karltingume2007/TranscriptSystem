<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class enrolments extends MY_Controller
{
    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('enrolments/enrolment');
        $this->LoadViewFooter('enrolments/enrolment_js');
    }   
    
    public function get_enrolments()
    {
        $data = json_decode(file_get_contents("php://input"));
        
        $academic_year = isset($data->academic_year)? $data->academic_year: 'NULL';
        $program_id = isset($data->program_id )? $data->program_id : 'NULL';
        $level_id = isset($data->level_id)? $data->level_id: 'NULL';
        
        $de = new detailed_enrollment();
        
        $return_value = $de->get_detailed_enrollments($academic_year, $program_id, $level_id, 'NULL');
        
        echo json_encode($return_value);
    }
}
