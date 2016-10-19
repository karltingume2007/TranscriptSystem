<?php

class level extends MY_Model
{
    const DB_TABLE = 'levels';
    const DB_TABLE_PK = 'level_id';
    
    public $level_id;
    
    public $level_name;
    
    public $level_index;
}
