<?php

class schoolprograms extends MY_Controller
{
    public function get_all_programs()
    {
        $program = new school_program();
        $return_value = array();        
        foreach($program->get() as $school_program_object)
        {
            $prog = (array)$school_program_object;            
            $return_value[] = $prog;
   //         sort($return_value);
        }
        sort($return_value);
        echo json_encode($return_value);
    }
}

