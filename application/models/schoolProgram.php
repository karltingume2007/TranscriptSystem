<?php

class schoolProgram extends MY_Model
{
    const DB_TABLE = 'schoolPrograms';
    const DB_TABLE_PK = 'programId';
    
    public $programId;
    
    public $programName;
    
    public $schoolId;
}
