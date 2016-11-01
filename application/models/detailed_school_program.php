<?php

class detailed_school_program extends MY_Model
{
    const DB_TABLE = 'detailed_school_programs';
    const DB_TABLE_PK = 'program_id';
    
    public $program_id;
    
    public $program_name;
    
    public $school_id;
    
    public $school_name;
    
    public $program_and_school;
    
    public function get_all_school_programs_ordered()
    {        
        return $this->get_ordered_by('school_name', 'ASC');
    }
}
