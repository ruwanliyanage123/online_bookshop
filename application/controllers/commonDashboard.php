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
        

        $sess_array = array(
            'id'       => "002",
            'username' =>"namal",
             );
        $this->session->set_userdata('logged_in', $sess_array);

        //redirect(base_url() . 'main/enter');  
        
        $this->load->view('About');
    }
    
}
?>