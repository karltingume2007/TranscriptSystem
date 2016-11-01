<?php

class personel extends MY_Model
{
    const DB_TABLE = 'personel';
    const DB_TABLE_PK = 'person_id';
    
    public $person_id;
    
    public $person_name;
    
    public $qualification;
}
