
<?php
class AdminCustomerModel extends CI_Model{
    public function construct(){
        parent::__construct();
    }

/*
 * this function is use for adding customers for the database
 */

    public function AddCustomerForDatabase($path,$post){ 
       
        $data = array(
            
            'customer_name'     =>$post['customer_name'],
            'customer_email'    =>$post['customer_email'],
            'customer_password' =>$post['customer_password'],
            'image'             =>$path, 
        );

        return $this->db->insert('customer', $data);
    }
    	
    

    function getImage(){	
        
        $data = '';
        $Q = $this->db->query("SELECT photo FROM customer WHERE 'customer_id' = '37' ");
        if ($Q->num_rows()){
            $data = $Q->row_array();
            $data = $data['image'];
            $Q->free_result();  
        }
        return $data;

        src="<?php echo site_url("controller_name/display_image/$image_id"); ?>" 
    
    } 
}



?>