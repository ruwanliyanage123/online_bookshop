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

    public function create(){
        echo"this is the ";
       
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['title'] = 'Create a new Student';


    $this->form_validation->set_rules('naam', 'Naam', 'required');
    $this->form_validation->set_rules('voornaam', 'Voornaam', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('students/create');
        $this->load->view('templates/footer');
    }
    else{
        // Upload the files then pass data to your model
        
        $config = array(
            'upload_path'    => 'assets/images/uploaded/',
            'allowed_types'  => 'jpg|jpeg|png|bmp',
            'max_size'       =>0,
            'filename'       =>url_title($this->input->post('file')),
            'encrypt_name' =>true                   
        );


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')){
            // If the upload fails
           
            echo $this->upload->display_errors('<p>', '</p>');
        }else{
            // Pass the full path and post data to the set_newstudent model
            echo"ele part";
            $this->load->model('admin/Testing');
            $this->Testing->set_newstudent($this->upload->data('full_path'),$this->input->post());
            //$this->load->view('students/success');
        }
    }
    
}

}



?>