<?php 

/*this is the main controller of this project this page can acces any type pf users */

class commonDashboard extends CI_Controller{

	public function construct(){
		parent::__construct();
		$this->load->helper('url');
    }
    
    /*access for the common dashboard*/
	public function index(){
        $this->load->view('CommonDashboard');
        //$this->load->view('customer/RegisteredCustomerDashboard');
        
    }
    
    
    public function aboutView(){
        $this->load->view('About');
    }
    
}
?>