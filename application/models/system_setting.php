<?php

class system_setting extends MY_Model
{
    const DB_TABLE = 'systemSettings';
    const DB_TABLE_PK = 'settingName';
    
    public $settingName;
    
    public $settingValue;

    // function to handle the change of the school name and logo
    public function changeSchoolName($data){
        $this->db->update('systemSettings', $data);

	}
}
