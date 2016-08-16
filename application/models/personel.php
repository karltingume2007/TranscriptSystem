<?php

class personel extends MY_Model
{
    const DB_TABLE = 'personel';
    const DB_TABLE_PK = 'personId';
    
    public $personId;
    
    public $personName;
    
    public $qualification;
}
