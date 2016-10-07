<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class courses extends MY_Controller 
{
    public function get_all_courses()
    {
        $course = new course();
        $return_value = array();        
        foreach($course->get() as $course_object)
        {
            $course_array = (array)$course_object;
            $course_array['courseId'] = $course_object->courseId;
            $course_array['courseName'] = $course_object->courseName;
            $course_array['courseCode'] = $course_object->courseCode;
            $course_array['creditValue'] = $course_object->creditValue;
            $return_value[] = $course_array;
        }
        echo json_encode($return_value);
    }
}
