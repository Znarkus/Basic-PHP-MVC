<?php

class Products_Controller
{
	public function all()
	{
		// Do things
		// Use models to do all the heavy lifting
		// Return the results for the view to present
		
		require 'models/products.php';
		$products_model = new Products_Model();
		
		return $products_model->all();
	}
}