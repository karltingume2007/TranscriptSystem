<?php

class course extends MY_Model
{
    const DB_TABLE = 'courses';
    const DB_TABLE_PK = 'courseId';
    
    public $courseId;
    
    public $courseName;
    
    public $courseCode;
    
    public $creditValue;
}
