<?php

class studentCourse extends MY_Model
{
    const DB_TABLE = 'studentCourses';
    const DB_TABLE_PK = 'enrollmentId';
    
    public $enrollmentId;
    
    public $courseId;
    
    public $caMark;
    
    public $examMark;
    
    public $teacherId;
}
