<?php

class bookController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function newBook(){
        $this->load->view('sellerViews/new_book');
    }
}
?>