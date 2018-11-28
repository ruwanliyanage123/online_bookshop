<?php
class CustomerRegistrationModel extends CI_Model{
    public function construct(){
        parent::__construct();
    }

    /**
     * this function is used for the check the login details of the user sign up page
     * get data fri datbase relevant with the emaii
     * make a session for the future activities
     */

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

    /**
     * this function is used for the check the login details of the user sign in page
     * get data fri datbase relevant with the emaii
     * use md5 for the decrypt the passwords
     * if the posted data not in the database then there are not a user account 
     * hence move to the registration page
     */
    public function checkCustomers($Email, $Password){

        //check that is this admin or not
        $this->load->database();
        $this->db->select('email');
        $this->db->select('password');
        $this->db->from('admin');
        $this->db->where('email',$Email);
        $query1 = $this->db->get();
        $number_of_rows = $query1->num_rows();
        
        if($number_of_rows!=0){
           
            $result1 = $query1->result();
            foreach($result1 as $row){
                if(md5($row->password)==$Password){
                    redirect(base_url().'index.php/admin/AdminDashboard/moveToAdminDashboard');
                }
            }
        }
        else{

            $this->load->database();
            $this->db->select('customer_email');
            $this->db->select('customer_password');
            $this->db->from('customer');
            $this->db->where('customer_email',$Email);
    
            $query = $this->db->get();
            $row_numbers = $query->num_rows();
    
    
            if($row_numbers>0){
                $result = $query->result();
                foreach($result as $row){
            
                   if($Password==$row->customer_password){
                       
                    $dat = array(
                    
                        'flagForMessage2' => true,  //controll show already exists account message in backtracking
                        'flagForMessage1' => true,//controll show registration successfull message in backtracking
                        'flagForSignUp'   => true,//for prevent the insert to sign up in backtracking
                        'noSignInToSignUp'=> true,  //for prevent the insert to sign up from sign in page
                        'flagForSignIn'   => true,//for prevent the insert to sign in in backtracking
                        'login'           => true,
                    );
                        
                    $this->session->set_userdata($dat);
                    redirect(base_url().'index.php/customer/CustomerRegistrationController/moveToCustomerDashboard');
                   } 
                   else{
                    
                    redirect(base_url().'index.php/customer/CustomerRegistrationController/messageForInvalidPassword');
                   }
                }
            }
            else{
                redirect(base_url().'index.php/customer/CustomerRegistrationController/messageForLoginUnsuccess');
            }
            
        }

    }



    
    public function sellerAdmission($Email, $Password){


        $this->load->database();
        $this->db->select('email');
        $this->db->select('password');
        $this->db->from('check_seller');
        $this->db->where('email',$Email);
        $query1 = $this->db->get();
        $number_of_rows = $query1->num_rows();
        
        if($number_of_rows>0){
           
            $result1 = $query1->result();
            foreach($result1 as $row){
                if(md5($row->password)==$Password){
                    redirect(base_url().'index.php/seller/dashboardController/dashboard');
                }
            }
        }
        
    }
}
?>