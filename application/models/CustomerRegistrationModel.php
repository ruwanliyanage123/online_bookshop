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

            /**
             * for make the session for user
            */

            $dat = array(
                'email'           => "null",
                'flagForMessage2' => true,
                'flagForMessage1' => "null",
                'flagForSignUp'   => "null",
                'flagForSignIn'   => "null",
                'login'           => "null",
            );
                
            $this->session->set_userdata($dat);
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
             * remake the sesssion variables
             **/

            $this->session->set_userdata('email',$email);
            $this->session->set_userdata('flagForMessage1',true);
            $this->session->set_userdata('flagForSignUp',true);
            $this->session->set_userdata('flagForSignIn',true);
            $this->session->set_userdata('login',true);
                
            redirect(base_url().'index.php/customer/CustomerRegistrationController/messageForRegistrationSuccessfully');

        }
    }
}
?>