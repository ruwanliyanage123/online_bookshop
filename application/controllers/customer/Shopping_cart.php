<?php
	
	class Shopping_cart extends CI_Controller{

		function index(){

	        $this->load->model("Shopping_cart_model");
	        $data["book"] = $this->Shopping_cart_model->fetch_all();
	        $this->load->view("Cart", $data);
    
		}

		function add(){
			$this->load->library("cart");
			$data = array(

				"id" => $_POST["ISBN"],
				"name" => $_POST["name"],
				"price" => $_POST["price"],
				"quantity" => $_POST["quantiry"]

			);
			$this->cart->insert($data);
			echo $this->view();
		}

		function view(){

			$this->load->library("cart");
			$output = '';
			$output .= '<h3> Shopping Cart</h3><br/>
						<div class = table-responsive">
							<div align="right">
							<button type="button" id="clear_cart" class="btn btn-warning">
								Clear Cart</button>
							</div>
							<br/>
							<table class="table table-bordered">
								<tr>
									<th width="40%">Name</th>
									<th width="15%">Quantity</th>
									<th width="15%">Price</th>
									<th width="15%">Total</th>
									<th width="15%">Action</th>
								</tr>

						'; 

						$count = 0;
						foreach($this->cart->contents() as $items){

							$count++;
							$output .= '
							<tr>
								<td>'.$items["name"].'</td>
								<td>'.$items["quantity"].'</td>
								<td>'.$items["price"].'</td>
								<td>'.$items["subtotal"].'</td>
								<td><button type="button" name="remove" class="btn btn-danger btn-xs remove_inventory" id="'.$items["rowid"].'">Remove</button></td>
							</tr>';

						}
						$output .= '
							<tr>
								<td colspan="4" align="right">Total</td>
								<td>'.$this->cart->total().'</td>
							</tr>
						</table>
						</div>';

						if($count == 0){
							$output = '<h3 align="center"> Cart is Empty</h3>';
						}
						return $output;
		}
	}