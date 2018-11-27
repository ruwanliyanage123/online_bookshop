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

    public function set_newstudent($path,$post){ 
        
        $data = array(
            'ISBN'          =>$post['ISBN'],
            'author'        =>$post['author'],
            'translator'    =>$post['translator'],
            'image'         =>$path, 
            'publisher'     =>$post['publisher'],
            'price'         =>$post['price'],
            'quantiry'      =>$post['quantiry'],
            'category'      =>$post['category'],
            'description'   =>$post['description'],
        );

        return $this->db->insert('book', $data);
    }

}



?>