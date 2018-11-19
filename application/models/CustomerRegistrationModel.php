<?php
class CustomerRegistrationModel extends CI_Model{
    public function construct(){
        parent::__construct();
    }

    public function validateCustomers($username,$email, $password){
        echo"ucsc";
        echo $username;
        echo $email;
        echo $password;
    }
}
?>