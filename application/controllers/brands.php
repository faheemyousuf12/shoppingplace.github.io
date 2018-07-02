<?php
class Brands extends CI_Controller{

	public function index()
	{

		$data['brands'] = $this->Brand_model->get_brands();
        $data['main_content'] = 'brands';
		$this->load->view('layouts/mainAdmin', $data);
	}	
	
	public function deleteBrand()
	{
		$id=$this->uri->segment(3);
		$this->Brand_model->deleteBrand($id);
		redirect('brands/index','refresh');
	}
     public function addBrand(){
		    $data['main_content'] = 'addBrand';
			$this->load->view('layouts/mainAdmin', $data);
		}
		public function createBrand(){
		 $data = array(
            'name' => $this->input->post('name'),
			'description'  => $this->input->post('description')
        );
		$insert = $this->db->insert('brands', $data);
		
			redirect('brands/index','refresh');
	}
}