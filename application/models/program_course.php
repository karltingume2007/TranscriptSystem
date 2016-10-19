<?php

class program_course extends MY_Model
{
    const DB_TABLE = 'program_courses';
    const DB_TABLE_PK = 'program_course_id';
    
    public $program_course_id;
    
    public $program_id;
    
    public $course_id;
    
    public $level_id;
    
    public $semester;
    
    public $credit_value;
}
