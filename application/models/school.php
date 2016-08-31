<?php

class school extends MY_Model
{
    const DB_TABLE = 'schools';
    const DB_TABLE_PK = 'school_id';
    
    public $school_id;
    
    public $school_name;
    
    public function get_programs($id = 0)
    {
        if($id == 0){
            $id = $this->school_id;
        }
        $program = new school_program();
        return $program->get_where(array('school_id'=>$id));
    }
    
    public function delete_programs($programsNotToDelete, $school_id = 0)
    {
        if($school_id == 0)
        {
            $school_id = $this->school_id;
        }
        //-3 is a place holder in case the list is empty, 
        //we'll nto have an exception thrown
        $sql = "Delete from school_programs where school_id = " . $school_id .  " and program_id not in (-3,"; 

        foreach($programsNotToDelete as $prog)
        {
            $sql .= $prog->program_id . ',';
        }
        $sql = rtrim($sql, ',');
        $sql .= ')';
        
        $this->execute_command($sql);
    }
}
