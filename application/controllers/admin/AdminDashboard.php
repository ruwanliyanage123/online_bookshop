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
     * use for access to the AdminSellerRemove.php
     */
    public function moveToAdminSellerRemove(){
        $this->load->view('admin/AdminSellerRemove');
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

    /**
     * use for access to the AdminCustomerRemove.php
     */
    public function moveToAdminCustomerRemove(){
        $this->load->view('admin/AdminCustomerRemove');
    }

    /**
     * use for access to the AdminBookAll.php
     */
    public function moveToAdminBookAll(){
        $this->load->view('admin/AdminBookAll');
    }

    /**
     * use for access to the AdminBookAdd.php
     */
    public function moveToAdminBookAdd(){
        redirect(base_url('/index.php/admin/AdminBookController/AddBookForDatabase'));
    }

    /**
     * use for access to the AdminBookEdit.php
     */
    public function moveToAdminBookEdit(){
        $this->load->view('admin/AdminBookEdit');
    }

    
    /**
     * use for access to the AdminBookRemove.php
     */
    public function moveToAdminBookRemove(){
        $this->load->view('admin/AdminBookRemove');
    }

    /**
     * use for access to the AdminMailInbox.php
     */
    public function moveToAdminMailInbox(){
        $this->load->view('admin/AdminMailInbox');
    }

    /**
     * use for access to the AdminMailView.php
     */
    public function moveToAdminMailView(){
        $this->load->view('admin/AdminMailView');
    }

    /**
     * use for access to the AdminMailCompose.php
     */
    public function moveToAdminMailCompose(){
        $this->load->view('admin/AdminMailCompose');
    }


    

}
?>

