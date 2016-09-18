<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class students extends MY_Controller
{
    public function save_student(){
        $data = json_decode(file_get_contents("php://input"));
        //show_array($data);
        
        $student = new student();
        $student->studentId = isset($data->studentId)? $data->studentId : 0;
        $student->studentName = $data->studentName;
        $student->matricule = $data->matricule;
        $student->gender = $data->gender;
        $student->dateOfBirth = $data->dateofBirth;
        $student->email = $data->email;
        $student->phoneNumber = $data->phoneNumber;
        $student->address = $data->address;
        $student->save();   
            
        $savedStudent = (array)$student;        
        echo json_encode($savedStudent);
    }    
}