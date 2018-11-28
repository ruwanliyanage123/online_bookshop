<?php

class dashboardController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function dashboard(){

        $this->load->model('bookModel');

        $data['bookDeatils']=$this->bookModel->getBookInfo();

        $this->load->view('sellerViews/seller_dashboard',$data);

    }
}
?>