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
       // $file_name = $_FILES['image']['name'];
        //$file_name = $_FILES['image']['name'];
        $image = $_FILES['image']['name'];
         

        $this->AdminBookModel->AddbookForDatabase( );    
    } 
}

?>