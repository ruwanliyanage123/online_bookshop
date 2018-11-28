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
                             
        );

        $this->load->library('upload', $config);

        if($this->upload->do_upload('file')){
            $this->db->insert('tb_image', array(
                'file_name' => $this->upload->file_name
            ));
            $this->session->set_flashdata('msg','sucessfull!!');
            redirect(base_url().'index.php/admin/ImageUpload/index');
        }


        $this->data = array(
            'get_image' => $this->db->get('tb_image')
        );


        $this->load->view('admin/Testing',$this->data);
    }



    //*********************************************************************************** */

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

    

    /**************************************************************************************/
    
}

?>