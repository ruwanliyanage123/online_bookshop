
<?php
class AdminCustomerModel extends CI_Model{
    public function construct(){
        parent::__construct();
    }

/*
 * this function is use for adding customers for the database
 */

    public function addSellerForDatabase($path,$post){ 
       
        $data = array(
            'customer_id'       =>$post['customer_id'],
            'customer_name'     =>$post['customer_name'],
            'customer_email'    =>$post['customer_email'],
            'customer_password' =>$post['customer_password'],
            'image'             =>$path, 
        );

        return $this->db->insert('customer', $data);
    }

}



?>