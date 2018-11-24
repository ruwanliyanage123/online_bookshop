<?php
class AdminDashboard extends CI_Controller{
    public function construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    /**
     * use for access to the AdminDashboard.php
     */
    public function moveToAdminDashboard(){
        $this->load->view('admin/AdminDashboard');
    }

    /**
     * use for access to the AdminSellerAll.php
     */
    public function moveToAdminSellerAll(){
        $this->load->view('admin/AdminSellerAll');
    }

    /**
     * use for access to the AdminSellerAdd.php
     */
    public function moveToAdminSellerAdd(){
        $this->load->view('admin/AdminSellerAdd');
    }

    /**
     * use for access to the AdminSellerEdit.php
     */
    public function moveToAdminSellerEdit(){
        $this->load->view('admin/AdminSellerEdit');
    }

    /**
     * use for access to the AdminCustomerAll.php
     */
    public function moveToAdminCustomerAll(){
        $this->load->view('admin/AdminCustomerAll');
    }

    /**
     * use for access to the AdminCustomerAdd.php
     */
    public function moveToAdminCustomerAdd(){
        $this->load->view('admin/AdminCustomerAdd');
    }

    /**
     * use for access to the AdminSellerEdit.php
     */
    public function moveToAdminCustomerEdit(){
        $this->load->view('admin/AdminCustomerEdit');
    }

    

}
?>

