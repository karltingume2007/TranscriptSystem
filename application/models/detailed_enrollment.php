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
        
    public $matricule;
    
    public $program_name;
    
    public function get_detailed_enrollments($academic_year, $program_id, $level_id, $student_id)
    {
        $sql = "CALL get_detailed_enrollments('$academic_year', $student_id, $program_id, $level_id)";
        return $this->execute_query($sql);
    }
}

