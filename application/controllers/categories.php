<?php
class Categories extends CI_Controller{

	public function index()
	{

		$data['categories'] = $this->Category_model->get_categories();
        $data['main_content'] = 'categories';
		$this->load->view('layouts/mainAdmin', $data);
	}	
	
     public function addCategory(){
		    $data['main_content'] = 'addCategory';
			$this->load->view('layouts/mainAdmin', $data);
		}
		public function createCategory(){
		 $data = array(
            'name' => $this->input->post('name'),
			'description'  => $this->input->post('description')
        );
		$insert = $this->db->insert('categories', $data);
	
			redirect('categories/index','refresh');
	}
	public function deleteCategory()
	{
		$id=$this->uri->segment(3);
		$this->Category_model->deleteCategory($id);
		redirect('Categories/index','refresh');
	}
	
}