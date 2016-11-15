<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class students extends MY_Controller
{
    public function save_student(){
        $receivedObject = file_get_contents("php://input");
        $data = json_decode($receivedObject);
        
        $student = new student();
        $student->student_id = isset($data->student_id)? $data->student_id : 0;
        $student->student_name = isset($data->student_name)? $data->student_name : "";
        $student->matricule = isset($data->matricule)? $data->matricule : "";
        $student->gender = isset($data->gender)? $data->gender : "";
        $student->date_of_birth = isset($data->date_of_birth)? $data->date_of_birth : "";
        $student->email = isset($data->email)? $data->email : "";
        $student->phone_number = isset($data->phone_number)? $data->phone_number : "";
        $student->address = isset($data->address)? $data->address : "";
        //show_array($student);
        $student->save();   
          
        //$saved_student = (array)$student;        
        echo json_encode($student);
    } 
    
    public function get_student($student_id = 0)
    {
        $student = new student();
        
        echo json_encode($student);
    }
    
    public function search_student()
    {
        $keyword = file_get_contents("php://input");
        $student = new student();
        $students = $student->get_by_keyword($keyword);
        echo json_encode($students);
    }
}