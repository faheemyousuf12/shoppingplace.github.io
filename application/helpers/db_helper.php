<?php
/*
 *	Get Categories
 */
 
 function get_categories_h(){
	$CI = get_instance();
	$categ = $CI->Product_model->get_categories();
	return $categ;
 }

 function get_categ_prod_h($id){
	$CI = get_instance();
	$categories = $CI->Product_model->get_categories($id);
	return $categories;
 }


  function get_brands_h(){
	$CI = get_instance();
	$brands = $CI->Product_model->get_brands();
	return $brands;
 }
 
 /**
 *	Get Sidebar Most Popular
 **/
function get_popular_h(){
	$CI =& get_instance();
	$CI->load->model('Product_model');
	$popular_products = $CI->Product_model->get_popular();
	return $popular_products;
}