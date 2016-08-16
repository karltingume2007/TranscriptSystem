<?php

class programCourse extends MY_Model
{
    const DB_TABLE = 'programCourses';
    const DB_TABLE_PK = 'programId';
    
    public $programId;
    
    public $courseId;
    
    public $level;
    
    public $semester;
}
