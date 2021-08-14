<?php 

class ShoppingCart{
	
	public array $products = [
				[ "name" => "Sledgehammer", "price" => 125.75 ],
				[ "name" => "Axe", "price" => 190.50 ],
				[ "name" => "Bandsaw", "price" => 562.131 ],
				[ "name" => "Chisel", "price" => 12.9 ],
				[ "name" => "Hacksaw", "price" => 18.45 ],
];
	public $items_inCart = []; 
	public $items_quantity = 0;
	public $name;
	public $price;
	public $total = 0;
	
	
	//add product to cart method
	public function add($name, $items_quantity)
	{
		
	}
	
	//View current products in cart
	
	//cart products listed in format; product name, price, quantity, total, remove
	
	//total must be tallied up
	
	//remove product method
	
	//adding existing product will only update product quantity 
	
	//prices displayed to 2d.p.
	
	//error checking for completed code
	
	
}

echo '<pre>', print_r($products), '</pre>';

?>