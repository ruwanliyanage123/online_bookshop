
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