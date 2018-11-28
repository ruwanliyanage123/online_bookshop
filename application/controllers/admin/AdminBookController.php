<?php
class AdminBookController extends CI_Controller{
    public function construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    /*
     * this function used for call the addbookForDatabase function in AdminBookModel 
     */
    

    public function create(){
       
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Create a new Student';

        $config = array(
                'upload_path'    => 'assets/images/uploaded/',
                'allowed_types'  => 'jpg|jpeg|png|bmp',
                'max_size'       =>0,
                'filename'       =>url_title($this->input->post('file')),
                                  
        );


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')){
            
            echo $this->upload->display_errors('<p>', '</p>');
        }else{
            
            $this->load->model('admin/AdminBookModel');
            $this->AdminBookModel->addBookForDatabase($this->upload->data('full_path'),$this->input->post());
            
        }
    }

    public function find(){

        $this->load->database();
        $this->db->select('name');
        $this->db->select('image');
        $this->db->from('book');
        
        $query = $this->db->get();
        $number_of_rows = $query->num_rows();
        
        if($number_of_rows!=0){
           
            $result = $query->result();
            
            $this->load->view('admin/AdminBookAll',$result); 
        }
           
        
    }
}

?>