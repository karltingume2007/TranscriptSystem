<?php

class school_program extends MY_Model
{
    const DB_TABLE = 'school_programs';
    const DB_TABLE_PK = 'program_id';
    
    public $program_id;
    
    public $program_name;
    
    public $school_id;
    
    public function get_program($id = 0)
    {
        if($id == 0){
            $id = $this->programId;
        }
        $program = new school_program();
        return $program->get_where(array('programId'=>$id));
    }
    
//    public function get_all_programs()
 //   {
//        $query = $this->get('school_programs');
 //       return $query;
 //   }
}
