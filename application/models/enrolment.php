<?php

class enrolment extends MY_Model
{
    const DB_TABLE = 'enrollments';
    const DB_TABLE_PK = 'enrollmentId';
    
    public $enrollmentId;
    
    public $studentId;
    
    public $academicYear;
    
    public $programId;
    
    public $level;
    
    public function get_program($id = 0)
    {
        if($id == 0){
            $id = $this->programId;
        }
        $program = new school_program();
        return $program->get_where(array('programId'=>$id));
    }
    
    public function get_student($id = 0)
    {
        if($id == 0){
            $id = $this->studentId;
        }
        $student = new student();
        return $student->get_where(array('studentId'=>$id));
    }
    
    public function search_enrolments($criteria = null)
    {
        //$sql = generate_query($criteria);    
        
        $sql = 'SELECT * FROM enrollments';
        if ($criteria['academicYear'] != null)
        {
            $sql += " WHERE academicYear = " + $criteria['academicYear'];
        }
        if ($criteria['programId'] != null)
        {
            $sql += " AND programId = " + $criteria['programId'];
        }
        if ($criteria['level'] != null)
        {
            $sql += " AND level = '" +  $criteria['level'] + "'";
        }
        if ($criteria['studentName'] != null)
        {
            $sql += " AND studentId = " 
                    + "any (select enrollments.studentId from enrollments "
                    . "join students on enrollments.studentId = students.studentId  "
                    . "where students.studentName like '%" + $criteria['studentName'] + "%'";
        }
        $sql += ";";
        
        $query = $this->execute_query($sql);
        
        return $query;
    }
    
//    private function generate_query($criteria)
//    {
//        $query = "SELECT * FROM enrollments";
//        if ($criteria['academicYear'] != null)
//        {
//            $query += " WHERE " + $this->academicYear == $criteria['academicYear'];
//        }
//        if ($criteria['programId'] != null)
//        {
//            $query += " AND " + $this->programId == $criteria['programId'];
//        }
//        if ($criteria['level'] != null)
//        {
//            $query += " AND " + $this->level == $criteria['level'];
//        }
//        if ($criteria['studentName'] != null)
//        {
//            $query += " AND " + $this->studentId == 
//                    + "any (select enrollments.studentId from enrollments "
//                    . "join students on enrollments.studentId = students.studentId  "
//                    . "where students.studentName like '%" + $criteria['studentName'] + "%'";
//        }
//        $query += ";";
//        return $query;
//    }
}

