<?php

class systemSetting extends MY_Model
{
    const DB_TABLE = 'systemSettings';
    const DB_TABLE_PK = 'settingName';
    
    public $settingName;
    
    public $settingValue;
}
