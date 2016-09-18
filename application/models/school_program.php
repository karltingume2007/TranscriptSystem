<?php

class school_program extends MY_Model
{
    const DB_TABLE = 'schoolprograms';
    const DB_TABLE_PK = 'programId';
    
    public $programId;
    
    public $programName;
    
    public $schoolId;
    
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
