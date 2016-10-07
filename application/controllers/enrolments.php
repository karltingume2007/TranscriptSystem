<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class enrolments extends MY_Controller
{
    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('enrolments/enrolment');
        $this->LoadViewFooter('enrolments/enrolment_js');
    }   
    
    public function search_enrolments()
    {  
        echo "this function is reached";
        
        $criteria = json_decode(file_get_contents("php://input"));
        $enrolment = new enrolment();
        $return_value = array(); 
        foreach($enrolment->search_enrolments($criteria) as $enrolment_object)
        {
            $enr = (array)$enrolment_object;
            $enr['programId'] = $enrolment_object->programId;
            $enr['studentId'] = $enrolment_object->studentId;
            $enr['level'] = $enrolment_object->level;
            $enr['matricule'] = $enrolment_object->matricule;
            $return_value[] = $enr;
        }
        echo json_encode($return_value);
    }
    
    public function get_all_enrolments() {
        $enrolment = new enrolment();
        $return_value = array();        
        foreach($enrolment->get() as $enrolment_object)
        {
            $enr = (array)$enrolment_object;
            $enr['program'] = $enrolment_object->get_program();
            $enr['student'] = $enrolment_object->get_student();
            $return_value[] = $enr;
        }
        echo json_encode($return_value);
    }
    
    public function save_enrolment(){
        $data = json_decode(file_get_contents("php://input"));
        //show_array($data);
        
        $enrolment = new enrolment();
        $enrolment->enrollmentId = isset($data->enrolmentId)? $data->enrolmentId : 0;
        $enrolment->studentId = $data->studentId;
        $enrolment->level = $data->level;
        $enrolment->programId = $data->programId;
        $enrolment->academicYear = $data->academicYear;
        $enrolment->save();   
            
        $enrol = (array)$enrolment;        
        echo json_encode($enrol);
    }
}
