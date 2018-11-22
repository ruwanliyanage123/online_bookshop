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
    
    /**
     * for display the about page as a common interface
     */
    public function aboutView(){
        $this->load->view('About');
    }

    /**
     * following functions are use fo the loading the common dashboard book categories
     */
    public function categoryCommonInformationTechnology(){
        $this->load->view('book_categories/CommonInformationTechnology');
    } 
    public function categoryCommonArtsAndMusic(){
        $this->load->view('book_categories/CommonArtsAndMusic');
    }
    public function categoryCommonBusiness(){
        $this->load->view('book_categories/CommonBusiness');
    }
    public function categoryCommonBiographies(){
        $this->load->view('book_categories/CommonBiographies');
    }
    public function categoryCommonKids(){
        $this->load->view('book_categories/CommonKids');
    }
    
}
?>