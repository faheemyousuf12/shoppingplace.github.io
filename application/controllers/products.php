<?php
class Products extends CI_Controller{
	
	public function index(){		
		$data['products'] = $this->Product_model->get_products();
        $data['main_content'] = 'products';
		$this->load->view('layouts/main', $data);
	}

	public function viewProducts(){
		
		$data['products'] = $this->Product_model->get_products();
        $data['main_content'] = 'viewProducts';
		$this->load->view('layouts/mainAdmin', $data);
	}
	public function deleteProduct()
	{
		$id=$this->uri->segment(3);
		$this->Product_model->deleteProduct($id);
		redirect('Products/viewProducts','refresh');
	}
     
     function get_categ($id){

	$data['categ'] = $this->Product_model->get_categ_prod($id);
	   $data['main_content'] = 'categ_prod';
		$this->load->view('layouts/main', $data);
 }
      function get_brand_prod($id){

	$data['brand'] = $this->Product_model->get_brand_prod($id);
	   $data['main_content'] = 'brand_prod';
		$this->load->view('layouts/main', $data);
 }

	public function categ()
	{
		
		$data['categories'] = $this->Product_model->get_categories();
        $data['main_content'] = 'categories';
		$this->load->view('layouts/main', $data);
	}
	
	public function details($id)
	{
		
		$data['product'] = $this->Product_model->get_product_details($id);
		$data['main_content'] = 'details';
		$this->load->view('layouts/main', $data);
	}
     public function addProduct(){
				$data['main_content'] = 'addProduct';
			$this->load->view('layouts/mainAdmin', $data);
		}

		public function uploadImage()
		{

            $config['upload_path']='./images/products/';
             $config['allowed_types']='jpg|jpeg|png|gif';
             $this->load->library('upload',$config);           
             if(!$this->upload->do_upload('image_file'))
             {
             	echo $this->upload->display_errors();

             }
             else
             {
             	$data=$this->upload->data();
             	echo '<img src="'.base_url().'assets/images/products/'.$data["file_name"].'"/>';
             }
         }

		 function createProduct(){
		 $data = array(
            'title' => $this->input->post('title'),
			'description'  => $this->input->post('description'),
            'price'   => $this->input->post('price'),
            'quantity'   => $this->input->post('quantity'),
             'size'   => $this->input->post('size'),
             'image'=>uploadImage()
        );
		$insert = $this->db->insert('products', $data);
			redirect('products/viewProducts','refresh');
	}
	
}