<?php

class CustomerRegistrationController extends CI_Controller{
    public function construct(){
        parent::_construct();
        $this->load->helper('url');
    }

    public function customerRegistrationView(){
        
        $this->load->view('customer/CustomerRegistrationView');
    }
}

?>

