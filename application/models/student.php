<?php

class student extends MY_Model
 {
    const DB_TABLE = 'students';
    const DB_TABLE_PK = 'studentId';

    public $studentId;
    public $studentName;
    public $email;
    public $phoneNumber;
    public $address;
    public $matricule;
    public $gender;
    public $dateOfBirth;
}
