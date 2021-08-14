<?php

/*This Cart class represents the shopping cart, it consists of an array which is to store the selected items.
This class contains functions for adding Product, removing Product, getting total quantity and 
total price.
*/
class Cart
{
    private array $items = [];

    public function getItems()
    {
        return $this->items;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }

    public function addProduct(Product $product, int $quantity)
    {
        $cartItem = $this->findCartItem($product->getId());
        if ($cartItem === null){
            $cartItem = new CartItem($product, 0);
            $this->items[$product->getId()] = $cartItem;
        }
        $cartItem->increaseQuantity($quantity);
        return $cartItem;
    }

    private function findCartItem(int $productId)
    {
        return $this->items[$productId] ?? null;
    }

    public function removeProduct(Product $product)
    {
        unset($this->items[$product->getId()]);
    }

    public function getTotalQuantity()
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getQuantity();
        }
        return $sum;
    }
    public function getTotalSum()
    {
        $totalSum = 0;
        foreach ($this->items as $item) {
            $totalSum += $item->getQuantity() * $item->getProduct()->getPrice();
        }

        return $totalSum;
    }
}