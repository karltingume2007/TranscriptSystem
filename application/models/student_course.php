<?php

class student_course extends MY_Model
{
    const DB_TABLE = 'student_courses';
    const DB_TABLE_PK = 'student_course_id';
    
    public $enrollment_id;
    
    public $course_id;
    
    public $ca_mark;
    
    public $exam_mark;
    
    public $teacher_id;
    
    public $semester;
    
    public $credit_value;
}
