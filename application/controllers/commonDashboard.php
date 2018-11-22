<?php 

/*this is the main controller of this project this page can acces any type pf users */

class commonDashboard extends CI_Controller{

	public function construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    
    /*access for the common dashboard*/
	public function index(){
        $this->load->view('CommonDashboard');
        //$this->load->view('customer/RegisteredCustomerDashboard');
        
    }
    
    public function aboutView(){
        

        

        //redirect(base_url() . 'main/enter');  
        
        $this->load->view('About');
    }
    
}
?>