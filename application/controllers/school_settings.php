<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class school_settings extends MY_Controller {

    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('school_configuration/school_settings');
        $this->LoadViewFooter('school_configuration/school_settings_js');
    }
    
    
    public function get_all_schools() {
        $school = new school();
        $return_value = array();        
        foreach($school->get() as $school_object)
        {
            $scl = (array)$school_object;
            $scl['school_programs'] = $school_object->get_programs();
            $return_value[] = $scl;
        }
        echo json_encode($return_value);
        
    }
    
    
    public function save_school(){
        $data = json_decode(file_get_contents("php://input"));
        //show_array($data);
        
        $school = new school();
        $school->school_id = isset($data->school_id)? $data->school_id : 0;
        $school->school_name = $data->school_name;
        $school->save();
        //show_array($school);
   
        $programs = array();
        
        foreach($data->school_programs as $p){
            $prog = new school_program();
            $prog->program_id = isset($p->program_id)? $p->program_id : 0;
            $prog->program_name = $p->program_name;
            $prog->school_id = $school->school_id;
            $prog->save();
            $programs[] = $prog;
            //show_array($prog);
        }
        
        $school->delete_programs($programs);
        
        $sc = (array)$school;
        $sc['school_programs'] = $programs;
        
        echo json_encode($sc);
    }
    
    
    public function save_school_program()
    {
        $data = json_decode(file_get_contents("php://input"));
        //show_array($data->levels);
        
        foreach($data->levels as $level)
        {
            foreach($level->courses as $courseObject)
            {                
                $course = new course();
                $course->course_id = $courseObject->course_id;
                $course->course_name = $courseObject->course_name;
                $course->course_code = $courseObject->course_code;
                $course->credit_value = $courseObject->credit_value;
                $course->save();
                
                $pc = new program_course();
                $pc->program_course_id = $courseObject->program_course_id;
                $pc->program_id = $courseObject->program_id;
                $pc->course_id = $course->course_id;
                $pc->level_id = $courseObject->level_id;
                $pc->semester = $courseObject->semester;
                $pc->credit_value = $courseObject->credit_value;
                $pc->save();
            }
        }
    }
    
    
    public function get_program_course_levels($program_id)
    {
        $pc = new detailed_program_course();
        $level = new level();
        
        $all_levels = $level->get();
        $ret_val = array();
        foreach ($all_levels as $l)
        {
            $level = (array)$l;
            $level['courses'] = $pc->get_where(array('program_id' => $program_id, 'level_id'=>$l->level_id));
            $ret_val[] = $level;
        }
        echo json_encode($ret_val);
    }
    
    public function get_all_courses()
    {
        $course = new course();
        $all_courses = $course->get();
        echo json_encode($all_courses);
    }
}
