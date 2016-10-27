<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class setting extends MY_Controller {

    public function index()
    {
        $this->LoadViewHeader();
        $this->load->view('school_configuration/settings', array('error' => ' ' ));
        $this->LoadViewFooter('school_configuration/settings_js');
    }
   	
    // function that gets school name and logo from db
   	public function getData(){
   		  //validate form input
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('logo', 'School logo', 'callback__image_upload');
        

        if ($this->form_validation->run() == true){       

         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
            
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
         }
            
         else { 
            $data = array('upload_data' => $this->upload->data()); 
         } 
        
    }else{
        $validate = array('error' => validation_errors());
            $this->session->set_flashdata($validate);
            // redirect('setting');
    }


   	}
}
