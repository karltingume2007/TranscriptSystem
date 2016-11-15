<?php

class student extends MY_Model
 {
    const DB_TABLE = 'students';
    const DB_TABLE_PK = 'student_id';

    public $student_id;
    public $student_name;
    public $email;
    public $phone_number;
    public $address;
    public $matricule;
    public $gender;
    public $date_of_birth;
    
    public function get_by_keyword($keyword)
    {
        $sql = "CALL search_student('$keyword')";
        return $this->execute_query($sql);
    }
}
