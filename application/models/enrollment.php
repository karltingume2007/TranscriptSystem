<?php

class enrollment extends MY_Model
{
    const DB_TABLE = 'enrollments';
    const DB_TABLE_PK = 'enrollmentId';
    
    public $enrollmentId;
    
    public $studentId;
    
    public $academicYear;
    
    public $programId;
    
    public $level;
    
    public function get_enrollment($username, $password)
    {
        $query =  $this->db->get_where('users', array('username' => $username, 'password'=>$password));
        
        if($query->num_rows() > 0)
        { 
            $this->populate($query->row());           
        }        
    }
    
    public function search_enrollments($criteria = null)
    {
        $sql = generate_query($criteria);       
    //    $this->db->select($sql);        
        $query = $this->execute_query($sql);
        
        return $query;
    }
    
    private function generate_query($criteria)
    {
        $query = "SELECT * FROM enrollments";
        if ($criteria['academicYear'] != null)
        {
            $query += " WHERE " + $this->academicYear == $criteria['academicYear'];
        }
        if ($criteria['programId'] != null)
        {
            $query += " AND " + $this->programId == $criteria['programId'];
        }
        if ($criteria['level'] != null)
        {
            $query += " AND " + $this->level == $criteria['level'] + ";";
        }
    //    if ($criteria['studentName'] != null)
    //    {
    //        $query += " AND " + $this-> == $criteria['academicYear'];
    //   }
        return $query;
    }
    
    public function get_all_enrollments()
    {
        $query = $this->db->get('enrollments');
        return $query;
    }
}
