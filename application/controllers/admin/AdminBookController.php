<?php
class AdminBookController extends CI_Controller{
    public function construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    /*
     * this function used for call the addbookForDatabase function in AdminBookModel 
     */
    public function AddBookForDatabase(){
        $this->load->model('admin/AdminBookModel');
        $image = $_FILES['image']['name'];
         

        $this->AdminBookModel->AddbookForDatabase( );    
    } 

    public function index(){

        $config = array(
            'upload_path'    => 'assets/images/uploaded/',
            'allowed_types'  => 'jpg|jpeg|png|bmp',
            'max_size'       =>0,
            'filename'       =>url_title($this->input->post('file')),
            'encrypt_name' =>true
        );

        $this->load->library('upload',$config);

       
        if($this->upload->do_upload('file')){
            $this->db->insert('tb_image',array(
                'file_name' => $this->upload->file_name,
                
            ));
            $this->session->set_flashdata('msg','sucessfull!');
            redirect(base_url('/index.php/admin/ImageUpload'));
        }
        $this->data = array(
            'get_image'=>$this->db->get('tb_image')
        );
        
            
        

        $this->load->view('admin/AdminBookAdd',$this->data);
    }


    public function create(){
       
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Create a new Student';

/*
        $this->form_validation->set_rules('naam', 'Naam', 'required');
        $this->form_validation->set_rules('voornaam', 'Voornaam', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
*/        

        
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
                $this->load->model('admin/AdminBookModel');
                $this->AdminBookModel->set_newstudent($this->upload->data('full_path'),$this->input->post());
                //$this->load->view('students/success');
            }
        
        
    }
}

?>