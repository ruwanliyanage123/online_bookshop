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

        $this->load->model('CustomerRegistrationModel');
        $this->CustomerRegistrationModel->validateCustomers($Username,$Email, $Password);
    }

    //for show the message in registration while try for register an user but alreadyexists

    public function messageForAlreadyExistsAccount(){
        //echo"hello ruwan liyanage";
        $this->load->view('messages/RegistreationAlreadyExistsAccont');
    }

    

    //for show the message that if the massage success
    public function messageForRegistrationSuccessfully(){
        //echo"hello ruwan liyanage";
        $this->load->view('messages/RegistrationSuccessfully');
    }

    /**
     * for move the customer for the registered customers dashboard after the registration or after the login
     */
    public function moveToCustomerDashboard(){
        $this->load->view('customer/RegisteredCustomerDashboard');
    }

}

?>

