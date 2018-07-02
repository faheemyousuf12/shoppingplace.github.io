<?php
class Orders extends CI_Controller{
	
	public function index(){
		
		$data['orders'] = $this->Order_model->get_orders();
        $data['main_content'] = 'orders';
		$this->load->view('layouts/mainAdmin', $data);
	}

	
	public function details($id){
		
		$data['orders'] = $this->Order_model->get_order_details($id);
		$data['main_content'] = 'details';
		$this->load->view('layouts/main', $data);
	}
	public function deleteOrder()
	{
		$id=$this->uri->segment(3);
		$this->Order_model->deleteOrder($id);
		redirect('orders/index','refresh');
	}
    
}