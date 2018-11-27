<?php
class AdminSellerController extends CI_Controller{
    public function construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function create(){
       
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Create a new Student';

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