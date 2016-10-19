<?php

class course extends MY_Model
{
    const DB_TABLE = 'courses';
    const DB_TABLE_PK = 'course_id';
    
    public $course_id;
    
    public $course_name;
    
    public $course_code;
    
    public $credit_value;
}
