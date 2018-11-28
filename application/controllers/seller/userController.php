<?php

class userController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

   
	public function userProfile(){
		$this->load->view('sellerViews/user_profile');
	}
}

?>

