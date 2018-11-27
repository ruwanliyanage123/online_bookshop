<?php
class ImageUpload extends CI_Controller{

    var $data = array();

    public function __construt(){
        parent::__construct();
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
}

?>