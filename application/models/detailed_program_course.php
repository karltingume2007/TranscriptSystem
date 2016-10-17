<?php

class detailed_program_course extends MY_Model
{
    const DB_TABLE = 'detailed_program_courses';
    const DB_TABLE_PK = 'program_id';
    
    public $program_id;
    
    public $course_id;
    
    public $level_id;
    
    public $semester;
    
    public $credit_value;
    
    public $course_code;
    
    public $course_name;
    
    public $school_id;
    
    public $program_name;
}
