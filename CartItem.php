<?php
/*
This class is associated with the specific item in the cart. It contains functions to increase/decrease
the amount of item selected/deselected respectively.
*/

class CartItem
{
    private Product $product;
    private int $quantity;

    public function __construct(\Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getProduct()
    {
        return $this->product;
    }
    public function setProduct($product)
    {
        $this->product = $product;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

}