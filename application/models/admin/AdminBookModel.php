<?php
class AdminBookModel extends CI_Model{
    public function construct(){
        parent::__construct();
    }

/*
 * this function is use for adding books for the database
 */
    public function addBookForDatabase($path,$post){ 
        
        $data = array(
            'ISBN'          =>$post['ISBN'],
            'name'          =>$post['name'],
            'author'        =>$post['author'],
            'translator'    =>$post['translator'],
            'image'         =>$path, 
            'nic'           =>$post['nic'],
            'price'         =>$post['price'],
            'quantiry'      =>$post['quantiry'],
            'category'      =>$post['category'],
            'description'   =>$post['description'],
        );

        $this->db->insert('book', $data);
        $this->load->view('admin/AdminBookAdd');
    }

}



?>