<?php

class CustomerRegistrationController extends CI_Controller{
    public function construct(){
        parent::_construct();
        $this->load->helper('url');
    }

    /**
     * for move to the sign up page 
     * i used set_serdata() function for restrinct the unnessesary loading the sign up page
     */

    public function customerRegistrationView(){
        $this->load->view('customer/CustomerSignUpView');
        $this->session->set_userdata('flagForSignUp',false);
    }

    /**
     * for move to the sugn in page
     * i used set_serdata() function for restrinct the unnessesary loading the sign in page
     */
    public function customerLoginView(){
        $this->load->view('customer/CustomerSignInView');
        $this->session->set_userdata('flagForSignIn',false);
    }


    /**
     * this function use for logout for a user
     * then the session must be destroy in this moment
     */
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'index.php/commonDashboard/index');
    }

    /*
    * for get the posted values of the sigh up page
    * md5 function added for the encrypt the password from out side
    */
    
    public function getValesBySignUp(){
        
        $Username = $this->input->post('Name');
        $Email    = $this->input->post('Email');
        $Password = $this->input->post('password');
        $Password = md5($Password);

        $this->load->model('CustomerRegistrationModel');
        $this->CustomerRegistrationModel->validateCustomers($Username,$Email, $Password);
    }


    /**
     * this for get the posted vales from the sign in page
     * md5 used 
     * 
     */
    public function getValesBySignIn(){
        $Email    = $this->input->post('your_email');
        $Password = $this->input->post('your_pass');
        $Password = md5($Password);

        echo"$Email\n";
        echo"$Password\n";
        

        $this->load->model('CustomerRegistrationModel');
        $this->CustomerRegistrationModel->checkCustomers($Email, $Password);
    }


    /**
     * for show the message that registration was unsuccess for the user because she or he had already registtered
     */
    public function messageForAlreadyExistsAccount(){
        $this->load->view('messages/RegistreationAlreadyExistsAccont');
        $this->session->set_userdata('flagForMessage2',false);
        //$this->session->set_userdata('noSignInToSignUp',false);
    }

    /**
     * for show the message that registration was success for the user
     */
    public function messageForRegistrationSuccessfully(){
        $this->load->view('messages/RegistrationSuccessfully');
        $this->session->set_userdata('flagForMessage1',false);
       // $this->session->set_userdata('noSignInToSignUp',false);
    }

    /**
     * for move the customer for the registered customers dashboard after the registration or after the login
     */
    public function moveToCustomerDashboard(){
        $this->load->view('customer/RegisteredCustomerDashboard');
    }

}

?>

