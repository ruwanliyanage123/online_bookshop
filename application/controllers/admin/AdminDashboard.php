<?php
class AdminDashboard extends CI_Controller{
    public function construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function moveToAdminDashboard(){
        $this->load->view('admin/AdminDashboard');
    }


}
?>