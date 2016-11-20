<?php

class enrolment extends MY_Model
{
    const DB_TABLE = 'enrollments';
    const DB_TABLE_PK = 'enrollment_id';
    
    public $enrollment_id;
    
    public $student_id;
    
    public $academic_year;
    
    public $program_id;
    
    public $level_id;
    
    public function get_enrolment_courses()
    {
        $enrolment_courses = array();
        
        $pc = new program_course();
        $all_courses = $pc->get_where(array('program_id' => $this->program_id, 'level_id'=>$this->level_id));
        foreach ($all_courses as $p_course)
        {
            $sc = new student_course();
            $sc->enrollment_id = $this->enrollment_id;
            $sc->course_id = $p_course->course_id;
            $sc->teacher_id = $p_course->teacher_id;
            $sc->semester = $p_course->semester;
            $sc->credit_value = $p_course->credit_value;
            $sc->save();
            
            $enrolment_courses[] = $sc;
        }
        
        return $enrolment_courses;
    }
}

