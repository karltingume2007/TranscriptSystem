<?php

class student_course extends MY_Model
{
    const DB_TABLE = 'studentCourses';
    const DB_TABLE_PK = 'enrollmentId';
    
    public $enrollmentId;
    
    public $courseId;
    
    public $caMark;
    
    public $examMark;
    
    public $teacherId;
    
    public function get_course($id = 0)
    {
        if($id == 0){
            $id = $this->courseId;
        }
        $course = new course();
        return $course->get_where(array('courseId'=>$id));
    }
    
    public function get_enrolment($id = 0)
    {
        if($id == 0){
            $id = $this->enrollmentId;
        }
        $enrolment = new enrolment();
        return $enrolment->get_where(array('enrollmentId'=>$id));
    }
    
    public function get_lecturer($id = 0)
    {
        if($id == 0){
            $id = $this->teacherId;
        }
        $lecturer = new personel();
        return $lecturer->get_where(array('personId'=>$id));
    }
}
