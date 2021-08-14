<?php
/*
This class is associated with the details of the product and also contains a function that handles
adding and removing of items to cart.
*/

class Product
{
    private int $id;
    private string $name;
    private float $price;
    private int $availableQuantity;

    public function __construct($id, $name, $price, $availableQuantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getTitle()
    {
        return $this->name;
    }
    public function setTitle($name)
    {
        $this->name = $name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }
    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
    }
	
    public function addToCart(Cart $cart, int $quantity)
    {
        return $cart->addProduct($this, $quantity);
    }

    public function removeFromCart(Cart $cart)
    {
        return $cart->removeProduct($this);
    }
}