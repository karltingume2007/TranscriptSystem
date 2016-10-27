<?php

class detailed_school_program extends MY_Model
{
    const DB_TABLE = 'detailed_school_programs';
    const DB_TABLE_PK = 'program_id';
    
    public $program_id;
    
    public $program_name;
    
    public $school_id;
    
    public $program_and_school;
}
