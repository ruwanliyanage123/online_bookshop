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
}

?>

