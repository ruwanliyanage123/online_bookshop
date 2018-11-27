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
       /* $data1 = array( 
            'naam' => $post['naam'], 
            'voornaam' => $post['voornaam'], 
            'text' => $post['text'], 
            'picture'=>$path 
        ); */
    
        $data = array(
            'image_ID' =>$post['naam'],
            'file_name'=>$path 
        );

        return $this->db->insert('tb_image', $data);
    }

}
?>