<?php

class student_course extends MY_Model
{
    const DB_TABLE = 'student_courses';
    const DB_TABLE_PK = 'student_course_id';
    
    public $enrollmentId;
    
    public $courseId;
    
    public $caMark;
    
    public $examMark;
    
    public $teacherId;
    
    public $semester;
    
    public $credit_value;
}
