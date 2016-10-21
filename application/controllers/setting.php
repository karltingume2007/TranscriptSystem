<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class setting extends MY_Controller {
    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('school_configuration/settings');
        $this->LoadViewFooter();
    }

    public function save(){
        $logo = $this->do_upload();
        $school_name = $this->input->post('school', 'School Name');
        $this->load->model('system_setting');
        $data = array('schoolName' => $school_name, 'schoolLogo' => $logo);
        $saveSettings = $this->system_setting->changeSchoolName($data);
       redirect('setting');
    }
    // function that handles the image upload
    private function do_upload(){
        $type = explode('.', $_FILES["logo"]["name"]);
        $type = $type[count($type)-1];
        $url = "./resources/uploads/". uniqid(rand()). '.' . $type;
        if (in_array($type, array("jpg", "jpeg", "png", "gif"))) {
            if (is_uploaded_file($_FILES["logo"]["tmp_name"])) {
                if ( move_uploaded_file($_FILES["logo"]["tmp_name"], $url)){
                    return $url;
                }
        }
        }
        
    }

}