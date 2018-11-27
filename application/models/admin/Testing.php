<?php
class Testing extends CI_Model{
    public function construct(){
        parent::__construct();
    }

    public function addData($table, $array){
        $this->db->insert($table, $array);
        return $this->db->insert_id();
    }

    public function set_newstudent($path,$post){ 
        
        $data = array(
            'ISBN' =>$post['ISBN'],
            'author' =>$post['author'],
            'translator' =>$post['translator'],
            'image'=>$path, 
            'publisher' =>$post['publisher'],
            'price' =>$post['price'],
            'quantiry' =>$post['quantiry'],
            'category' =>$post['category'],
            'description' =>$post['description'],
        );

        return $this->db->insert('book', $data);
    }

}
?>