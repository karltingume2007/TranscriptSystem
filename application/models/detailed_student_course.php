<?php

class detailed_student_course extends MY_Model
{
    const DB_TABLE = 'detailed_student_courses';
    const DB_TABLE_PK = 'student_course_id';
    
    public $enrollmentId;
    
    public $courseId;
    
    public $caMark;
    
    public $examMark;
    
    public $teacherId;
    
    public $semester;
    
    public $credit_value;
    
    public $academic_year;
    
    public $level_id;
    
    public $level_name;
    
    public $student_id;
    
    public $student_name;  
    
    public $matricule;
    
    public $course_code;
    
    public $course_name;
    
    public $person_name;

}
