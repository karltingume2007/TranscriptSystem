<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class studentCourses extends MY_Controller
{
    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('marks/marks');
        $this->LoadViewFooter('marks/marks_js');
    }   
    
    public function get_all_student_courses()
    {
        $studentCourse = new studentCourse();
        $return_value = array();        
        foreach($studentCourse->get() as $studentCourse_object)
        {
            $studentCourse_course_array = (array)$studentCourse_object;
            $studentCourse_course_array['course'] = $studentCourse_object->get_course();
            $studentCourse_course_array['enrolment'] = $studentCourse_object->get_enrolment();
            
            $enrolment = $studentCourse_object->get_enrolment();
            $studentCourse_course_array['student'] = $enrolment[0]->get_student();
            
            $result_array['caMark'] = $studentCourse_object->caMark;
            $result_array['examMark'] = $studentCourse_object->examMark;
            $studentCourse_course_array['lecturer'] = $studentCourse_object->get_lecturer();
            $return_value[] = $studentCourse_course_array;
        }
        echo json_encode($return_value);
    }
    
    public function search_student_courses()
    {  
        $criteria = json_decode(file_get_contents("php://input"));
        $studentCourse = new studentCourse();
        $return_value = array(); 
        foreach($studentCourse->search_studentCourses($criteria) as $studentCourse_object)
        {
            $result_array = (array)$studentCourse_object;
            $result_array['course'] = $studentCourse_object->get_course();
            $result_array['enrolment'] = $studentCourse_object->get_enrolment();
            
            $enrolment = $studentCourse_object->get_enrolment();
            $result_array['student'] = $enrolment[0]->get_student();
            
            $result_array['caMark'] = $studentCourse_object->caMark;
            $result_array['examMark'] = $studentCourse_object->examMark;
            $return_value[] = $result_array;
        }
        echo json_encode($return_value);
    }
    
    public function save_studentCourse(){
        $data = json_decode(file_get_contents("php://input"));
        //show_array($data);
        
        $studentCourse = new studentCourse();
 //       $enrolment->enrollmentId = isset($data->enrolmentId)? $data->enrolmentId : 0;
        $studentCourse->studentId = $data->studentId;
        $enrolment->level = $data->level;
        $enrolment->programId = $data->programId;
        $enrolment->academicYear = $data->academicYear;
 //       $enrolment->save();   
            
  //      $enrol = (array)$enrolment;        
//        echo json_encode($enrol);
    }
}
