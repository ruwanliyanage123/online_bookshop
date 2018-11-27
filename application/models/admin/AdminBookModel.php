<?php
class AdminBookModel extends CI_Model{
    public function construct(){
        parent::__construct();
    }

    /**
 * this function is use for adding books for the database
 */

public function AddbookForDatabase( ){
    echo"this is model";
    $this->load->database();


    

    $add_book = array(
        'ISBN'          =>$this->input->post('isbn'),
        'author'        =>$this->input->post('author'), 
        'translator'    =>$this->input->post('translator'), 
        'image'         =>'',
        'publisher'     =>$this->input->post('publisher'), 
        'price'         =>$this->input->post('price'), 
        'quantiry'      =>$this->input->post('quantity'), 
        'category'      =>$this->input->post('country'), 
        'description'   =>$this->input->post('description')   
    );

    

        //$this->db->set($add_book);
       // $this->db->insert($this->db->dbprefix.'book');
}

}



?>