<?php

class school_program extends MY_Model
{
    const DB_TABLE = 'school_programs';
    const DB_TABLE_PK = 'program_id';
    
    public $program_id;
    
    public $program_name;
    
    public $school_id;
    
    public function get_program($program_id)
    {
        $query = $this->db->get_where('school_programs', array('program_id' => $program_id));
        return $query;
    }
    
    public function get_all_programs()
    {
        $query = $this->get('school_programs');
        return $query;
    }
}
