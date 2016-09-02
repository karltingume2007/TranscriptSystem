<?php

class Enrollment extends MY_Controller
{
    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('enrollments/enrollment');
        $this->LoadViewFooter();
    }
    
    public function search_enrollments($criteria = null)
    {
        $query = $this->db->get_where('enrollments', array(
            'academicYear' => $criteria['academicYear'],
          //  'programId' => $criteria[''],
            'level' => $criteria['level'],
          //  'studentId' => $criteria['']
        ));
        if ($query->num_rows() > 0)
        {
             $this->populate($query->row());   
        }
  //      $enrollement = new Enrollment();
  //      return $enrollement->g
    }
}
