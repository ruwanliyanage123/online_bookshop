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
        $this->db->from('seller');
        
        $query1 = $this->db->get();
        $number_of_rows = $query1->num_rows();
        
        if($number_of_rows!=0){
           
            $result1 = $query1->result();
            foreach($result1 as $row){
               

?>
                <a><img class="main-log" src="<?php echo base_url(); ?>/assets/images/uploaded/<?php echo substr("$row->image",55);?>"  style="width:100px; height:100px;"/></a>
                <?php
            }
        }
        
    }

    public function moveToView(){
        $this->load->view('admin/AdminBookAll');
    }
}

?>