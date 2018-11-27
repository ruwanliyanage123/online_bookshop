
<?php
class AdminSellerModel extends CI_Model{
    public function construct(){
        parent::__construct();
    }

/*
 * this function is use for adding books for the database
 */
    public function addSellerForDatabase($path,$post){ 
       
        $data = array(
            'name'          =>$post['name'],
            'nic'           =>$post['nic'],
            'address'       =>$post['address'],
            'email'         =>$post['email'],
            'moble'         =>$post['moble'],
            'facebook'      =>$post['facebook'],
            'bank_account'  =>$post['bank_account'],
            'password'      =>$post['password'],
            'image'         =>$path, 
        );

        return $this->db->insert('seller', $data);
    }

}



?>