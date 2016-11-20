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
    
    public function get_enrolment($id)
    {
        $en = new detailed_enrollment();
        $en->load($id);
        $en_array = (array)$en;
        $en_array['courses'] = $en->get_enrolment_courses();
        
        echo json_encode($en_array);
    }
    
    public function save_new_enrolment()
    {
        $data = json_decode(file_get_contents("php://input"));
        
        $en = new enrolment();
        $en->student_id = isset($data->student_id)? $data->student_id : 0;
        $en->academic_year = isset($data->academic_year)? $data->academic_year : null;
        $en->program_id = isset($data->program_id)? $data->program_id : 0;
        $en->level_id = isset($data->level_id)? $data->level_id : 0;
        
        $en->save();
        
        //create student courses for this enrolment
        $pc = new program_course();
        $all_courses = $pc->get_where(array('program_id' => $en->program_id, 'level_id'=>$en->level_id));
        foreach ($all_courses as $p_course)
        {
            $sc = new student_course();
            $sc->enrollment_id = $en->enrollment_id;
            $sc->course_id = $p_course->course_id;
            $sc->teacher_id = $p_course->teacher_id;
            $sc->semester = $p_course->semester;
            $sc->credit_value = $p_course->credit_value;
            $sc->save();
        }
        
        $this->get_enrolment($en->enrollment_id);
        
    }
}
