<?php
class admin_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function act_additem($item, $price, $weight, $file_name){
        $data = array(
            'image_ID'   => $item,
            'file_name'    => $file_name
        );
        return (bool) $this->db->insert('tb_image', $data); 
   } 
}

?>