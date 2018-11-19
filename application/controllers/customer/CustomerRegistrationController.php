<?php

class CustomerRegistrationController extends CI_Controller{
    public function construct(){
        parent::_construct();
        $this->load->helper('url');
    }

    public function customerRegistrationView(){
        $this->load->view('customer/CustomerSignUpView');
    }

    public function customerLoginView(){
        $this->load->view('customer/CustomerSignInView');
    }

    //for get the posted values of the sigh up page
    public function getValesBySignUp(){
        
        $Username = $this->input->post('Name');
        $Email    = $this->input->post('Email');
        $Password = $this->input->post('Pass');

        //check that the inputs are not empty
        $this->load->model('CustomerRegistrationModel');
        $this->CustomerRegistrationModel->validateCustomers($Username,$Email, $Password);
    }
}

?>

