<?php
class AdminCustomerController extends CI_Controller{
    public function construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    /**
     * this function for the add the data for the seller database
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
                'encrypt_name' =>true                   
        );


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')){
            echo $this->upload->display_errors('<p>', '</p>');
        }
        else{
           
            $this->load->model('admin/AdminCustomerModel');
            $this->AdminCustomerModel->AddCustomerForDatabase($this->upload->data('full_path'),$this->input->post());
            
        }
    }

    function displayimage(){
        $this->load->model('admin/AdminCustomerModel');
        $image = $this->AdminCustomerModel->getImage();
        header("Content-type: image/jpeg");
        print($image);
                
    }
}
?>    