<?php

class schoolprograms extends MY_Controller
{
    public function get_all_programs()
    {
        $query = $this->school_program->get_all_programs();
        return $query;
    }
}

