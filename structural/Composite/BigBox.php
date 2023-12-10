<?php

namespace structural\Composite;

use structural\Composite\GiftComponent;
use structural\Composite\ProductComponent;

class BigBox implements ProductComponent, ActionsComponent
{
    public function __construct(private array $products)
    {
    }

    public function getPrice(): float
    {
        $totalPrice = 0;
        foreach($this->products as $product){
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }
    public function addProduct(ProductComponent $product): array
    {
        $this->products[] = $product;
        return $this->products;
    }
    public function removeProduct(ProductComponent $product): array
    {
        $this->products = array_filter($this->products,function($productItem) use($product){
            return $this->products[$productItem] !== $product;
        });
        return $this->products;
    }
}