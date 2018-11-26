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
        $this->AdminBookModel->AddbookForDatabase();    
    } 
}

?>