<?php

class enrollment extends MY_Model
{
    const DB_TABLE = 'enrollments';
    const DB_TABLE_PK = 'enrollmentId';
    
    public $enrollmentId;
    
    public $studentId;
    
    public $academicYear;
    
    public $programId;
    
    public $level;
}
