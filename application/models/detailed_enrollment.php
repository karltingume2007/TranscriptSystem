<?php

class detailed_enrollment extends MY_Model
{
    const DB_TABLE = 'detailed_enrollments';
    const DB_TABLE_PK = 'enrollment_id';
    
    public $enrollment_id;
    
    public $student_id;
    
    public $academic_year;
    
    public $program_id;
    
    public $level_id;
    
    public $level_name;
    
    public $student_name;
    
    public $program_name;
}

