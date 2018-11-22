<?php
class CustomerRegistrationModel extends CI_Model{
    public function construct(){
        parent::__construct();
    }

    public function validateCustomers($username,$email, $password){
        //check that the customer is already registered or not 
        $this->load->database();
        $this->db->select('customer_email');
        $this->db->from('customer');
        $this->db->where('customer_email',$email);

        $query = $this->db->get();
        $row_number = $query->num_rows();

        if($row_number!=0){

            
            redirect(base_url().'index.php/customer/CustomerRegistrationController/messageForAlreadyExistsAccount');
        }

        else{
            $data = array(
                'customer_name'     => $username,
                'customer_email'    => $email,
                'customer_password' => $password,
            );
    
            $this->db->set($data);
            $this->db->insert($this->db->dbprefix.'customer');


            /**
             * for make the session for user
            */

            $dat = array(
                
                'flagForMessage2' => true,  //controll show already exists account message in backtracking
                'flagForMessage1' => true,//controll show registration successfull message in backtracking
                'flagForSignUp'   => true,//for prevent the insert to sign up in backtracking
                'noSignInToSignUp'=> true,  //for prevent the insert to sign up from sign in page
                'flagForSignIn'   => true,//for prevent the insert to sign in in backtracking
                'login'           => true,
            );
                
            $this->session->set_userdata($dat);
                
            redirect(base_url().'index.php/customer/CustomerRegistrationController/messageForRegistrationSuccessfully');

        }
    }
}
?>