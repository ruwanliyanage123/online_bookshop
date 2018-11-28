<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class newBookController extends CI_Controller {

	public function index()
	{
		$this->load->view('sellerViews/new_book');
	}

	public function send(){
/*
		$subject="New Book Detais ";
		$BookCategory= $this->input->post("category");
		$file_data = $this->upload_file();

		*/
			$message="
				<h3 align='center'>New Book Details</h3>
				<table border='1' width='100%' cellpadding='5'>
					<tr>
						<td width='30%'> ISBN Code </td>
						<td width='70%'>$this->input->post('ISBN')</td>
					</tr>
					<tr>
						<td width='30%'> Book Title </td>
						<td width='70%'>".$this->input->post('book_title')."</td>
					</tr>
					<tr>
						<td width='30%'> Author Id</td>
						<td width='70%'>".$this->input->post('author_id')."</td>
					</tr>
					<tr>
						<td width='30%'> Translater </td>
						<td width='70%'>".$this->input->post('translater')."</td>
					</tr>
					<tr>
						<td width='30%'> Publisher </td>
						<td width='70%'>".$this->input->post('publisher')."</td>
					</tr>
					<tr>
						<td width='30%'> Price </td>
						<td width='70%'>".$this->input->post('price')."</td>
					</tr>
					<tr>
						<td width='30%'>Quantity</td>
						<td width='70%'>".$this->input->post('quantity')."</td>
					</tr>
					<tr>
						<td width='30%'> Book Category</td>
						<td width='70%'>".$this->input->post('category')."</td>
					</tr>
					<tr>
						<td width='30%'>About the book</td>
						<td width='70%'>".$this->input->post('about')."</td>
					</tr>
					
				</table>
			" ; 
			

			$config=array(

				'protocol'  	=>'smtp',
				'smtp_host'		=> 'ssl://smtp.googlemail.com',
				'smtp_port'		=> 465,
				'smtp_user'		=> 'gayansampathmanamendra@gmail.com',
				'smtp_pass'		=> 'Gayan#123',
				'mailtype'		=> 'html',
				'charset'		=> 'iso-8859-1',
				'wordwrap'		=> TRUE,
			    'charset'		=> 'iso-8859-1'
			);

			$this->load->library('email',$config);
			$this->email->from('gayansampathmanamendra@gmail.com','Online Bookshop');
			$this->email->to('gayanhash123@gmail.com');
			$this->email->subject("Request Email ");
			$this->email->message("testing mail");
			//$this->email->attach('C:\Users\USER PC\Pictures\admin.png');
		//	$this->email->set_newline("\r\n");

			$result=$this->email->send();
			$this->email->print_debugger();

			redirect("http://localhost/online_bookshop/bookRegister/request","refresh");

/*
			$this->load->library('email',$config);
			$this->email->set_newline("\r\n");
			$this->email->from($this->input->post("email"));
			$this->email->to('gayanhash123@gmail.com');
			$this->email->subject($subject);
			$this->email->message("$message");
			$this->email->attach($file_data['full_path']);

			if($this->email->send()){
				if(delete_files($file_data['file_path'])){
					$this->session->set_flashdata('message','Request is sended !');
					redirect('sendemail');
				}
			}
		
		else{
			$this->session->set_flashdata('message','Sorry, There is an error in attach file !');
		}*/
		
	    }
	


	public function file_upload(){
		$config['upload_path']='/uploads';
		$config['allowed_types']='jpg|png|gif';
		$config['max_width']='1024';
		$config['max_heigth']='786';

		$this->load->library('upload',$config);

		$this->upload->file_upload('pic');
	}

/*
	public function upload_file(){

		$config['upload_path']='uploads/';
		$config['allowed_types']='doc|docx|pdf';
		$this->load->library('upload',$config);

		if($this->upload->do_upload('resume')){
			return $this->upload->data();
		}
		else{
			return $this->upload->display_errors();
		}

	}*/
}