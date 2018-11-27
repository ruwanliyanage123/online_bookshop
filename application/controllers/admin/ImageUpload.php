<?php
class ImageUpload extends CI_Controller{

    var $data = array();

    public function __construt(){
        parent::__construct();
    }
    
    public function klklkl(){
        $this->load->view('admin/AdminBookAdd');

        $config = array(
            'upload_path'    => 'assets/images/uploaded/',
            'allowed_types'  => 'jpg|jpeg|png|bmp',
            'max_size'       =>0,
            'filename'       =>url_title($this->input->post('file')),
            'encrypt_name' =>true
        );

        $this->load->library('upload',$config);

       
        if($this->upload->do_upload('file')){
            $ima  = $this->upload->file_name;
            echo $this->input->post('name');
            $add_book = array(
                'image_ID' => $ima
            );

            $this->db->set($add_book);
            $this->db->insert($this->db->dbprefix.'tb_image'); 

            $this->session->set_flashdata('msg','sucessfulllllll!');
            redirect(base_url('/index.php/admin/ImageUpload'));
        }
        
    }


    public function indexk(){
        
        $this->load->view('admin/AdminBookAdd');
        
        $config = array(
            'upload_path'    => 'assets/images/uploaded/',
            'allowed_types'  => 'jpg|jpeg|png|bmp',
            'max_size'       =>0,
            'filename'       =>url_title($this->input->post('file')),
            'encrypt_name' =>true
        );

        $this->load->library('upload', $config);
        //$this->upload->initialize($config);
        echo"suscees";
        if($this->upload->do_upload('file')){
            
            $file_data  =   $this->upload->data('file');

            $new_staff = array(
                'image_ID' => $this->input->post('name'),
                'file_name' => $file_data['file_name']
            );

            $this->db->set($new_staff);
            $this->db->insert($this->db->dbprefix.'tb_image'); 

            $this->session->set_flashdata('msg','greate!');
            redirect(base_url('/index.php/admin/ImageUpload'));
        }
    }

    public function aaa(){
        $this->load->view('admin/AdminBookAdd');
    }



    public function do_upload()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width']  = '500';
        $config['max_height']  = '500';

        $this->load->library('upload', $config);
        
         
        $data = array();

        $upload_data = $this->upload->do_upload('image'); 
        $file_name =   $upload_data['file_name']; 

        if( ! isset($data['error'])) {
            echo"! isset(data['error']\n";
            $data = array('upload_data' => $this->upload->do_upload('image'));
            $item = $this->input->post('item');
            $price = $this->input->post('price');
            $weight = $this->input->post('weight');

            $this->load->model('admin/admin_model');
            
            if( ! $this->admin_model->act_additem($item, $price, $weight, $data["upload_data"]["file_name"])) {
                // Either add error or fully replace the return $data
                // It can be a good idea to delete the uploaded file if its information is not stored at DB
                $data['error'] = "Unable to save it inside our DB!";
            }
            else
            {
                // Some param just to know that everything went well..
                $data['success'] = "You upload was successful!";
            }
        }


        return $this->load->view('admin', $data);
    } 

    

    //************************************* */
    
    public function addRecordToTable(){

        $array = array(
            'image_ID'      => $this->input->post('name'),
            'file_name'     => "ruwan"
        );
        $this->load->model('admin/Testing');
        $record_id = $this->Testing->addData('tb_image', $array);
        $this->uploadFiles($record_id);
        
    }

public function uploadFiles($record_id)
{

    
    $config = array(
        'upload_path'    => 'assets/images/uploaded/',
        'allowed_types'  => 'jpg|jpeg|png|bmp',
        'max_size'       =>0,
        'filename'       =>url_title($this->input->post('file')),
        'encrypt_name' =>true                   
    );

    $this->load->library('upload', $config);

    $files = $_FILES['uploads'];

    foreach ($files['name'] as $key => $filename) {
        //$_FILES['uploads[]']['name']     = $files['name'][$key];
        //$_FILES['uploads[]']['type']     = $files['type'][$key];
        $_FILES['uploads[]']['tmp_name'] = $files['tmp_name'][$key];
        //$_FILES['uploads[]']['error']    = $files['error'][$key];
        //$_FILES['uploads[]']['size']     = $files['size'][$key];

        $config['file_name'] = $filename;

        $this->upload->initialize($config);

        if (isset($_FILES['uploads[]']['name']) && !empty($_FILES['uploads[]']['name'])) {
            if ( ! $this->upload->do_upload('uploads[]')) {
                $error = array('error' => $this->upload->display_errors());

            } else {
                $uploads[] = $this->upload->data();
                $array = array(
                    'record_id' => $record_id,
                    'filename'  => $_FILES['uploads[]']['name'],
                    'size'      => $_FILES['uploads[]']['size']
                );
                $this->some_model->addData('uploads', $array);
            }
        }
    }
    redirect(base_url() . 'someController/someFunction/' . $record_id);
}


    public function create(){
       
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