<?php

namespace structural\Composite;

interface ActionsComponent
{
    public function addProduct(ProductComponent $product): void;
    public function removeProduct(ProductComponent $product): void;
}