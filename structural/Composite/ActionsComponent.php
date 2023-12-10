<?php

namespace structural\Composite;

interface ActionsComponent
{
    public function addProduct(ProductComponent $product): array;
    public function removeProduct(ProductComponent $product): array;
}