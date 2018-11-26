<?php
class AdminBookModel extends CI_Model{
    public function construct(){
        parent::__construct();
    }

    /**
 * this function is use for adding books for the database
 */

public function AddbookForDatabase(){
    echo"this is model";
    $this->load->database();

    $add_book = array(
        'ISBN'          =>$this->input->post('isbn'),
        'author'        =>$this->input->post('author'), 
        'translator'    =>$this->input->post('translator'), 
        'image'         =>$this->input->post('image'), 
        'publisher'     =>$this->input->post('publisher'), 
        'price'         =>$this->input->post('price'), 
        'quantiry'      =>$this->input->post('quantity'), 
        'category'      =>$this->input->post('country'), 
        'description'   =>$this->input->post('description')   
    );

    
/*
        $secondary_educational_table_first_row = array(
            'APPLICANT_ID'       =>$idNumber,
            'SCHOOL_NAME'        =>$this->input->post('secondary_educational_school_name1'),
            'FROM'               =>$this->input->post('secondary_educational_from1'),
            'TO'                 =>$this->input->post('secondary_educational_to1'),
            'EXAMINATION_PASSED' =>$this->input->post('secondary_educational_examination1'),
            'YEAR'               =>$this->input->post('secondary_educational_year1')
        );
*/
        $this->db->set($add_book);
        $this->db->insert($this->db->dbprefix.'book');
}

}



?>