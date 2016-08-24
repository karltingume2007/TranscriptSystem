<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class authentication extends CI_Controller {
        

    public function index(){  
           /*
         * Check if user already has a session, if yes
         * redirect to the home page
         */
      
        if($this->session->userdata('user_id'))
        {
            redirect(site_url('home'));
        }  
        else
        {
            redirect(site_url('authentication/login'));
        }
    }
    
    /*
     * This function is our dedicated login handler.
     */
    public function login()
    {
        $this->load->view('includes/header');
        $this->load->view("login/login");
        
        $footer_data = array('angular_js_view' => 'login/login_js');
        
        $this->load->view('includes/footer', $footer_data);
    }
    
    /*
     * Our logout handler
     */
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('authentication/login'));
    }
    
    public function check_credentials($username, $password)
    {
        $user= new user();
        $user->get_user($username, $password);
        
        $returnValue = array();
        
        if($user->user_id > 0)
        {
            $this->session->set_userdata('user_id', $user->user_id);
            $this->session->set_userdata('user_language', $user->language);

            $user->set_language_cookie(); 
            $returnValue['isValidLogin'] = true;
            $returnValue['redirectURL'] = site_url('home');
        }
        else
        {
            $this->session->sess_destroy();
            $returnValue['isValidLogin'] = false;
        }
        
        echo json_encode($returnValue);
    }
    
    
    public function change_current_user_language($language)
    {
        $user = current_user();
        $user->language = $language;
        
        $user->save();
        
        redirect(site_url('home'));
    }
}