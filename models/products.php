<?php

class Products_Model
{
	public function all()
	{
		// Get products from db
		$products = array(
			array('id' => 1, 'name' => 'Apple'),
			array('id' => 2, 'name' => 'Orange')
		);
		
		return $products;
	}
}