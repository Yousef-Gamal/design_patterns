<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use structural\Composite\BigBox;
use structural\Composite\GiftBox;
use structural\Composite\SimpleBox;

class CompositeTest extends TestCase
{
    public function testCanGetTotalPriceOfPackageTree()
    {
        $item1 = new SimpleBox(100);
        $item2 = new SimpleBox(200);
        $package = new BigBox([$item1,$item2]);

        $this->assertEquals(300,$package->getPrice());
    }

    public function testCanGetTotalPriceOfPackageTreeWithAddAction()
    {
        $item1 = new SimpleBox(100);
        $item2 = new SimpleBox(200);
        $package = new BigBox([$item1,$item2]);
        $gift = new GiftBox(150,100);
        $package->addProduct($gift);

        $this->assertEquals(550,$package->getPrice());
    }
    public function testCanGetTotalPriceOfPackageTreeWithRemoveAction()
    {
        $item1 = new SimpleBox(100);
        $item2 = new SimpleBox(200);
        $gift = new GiftBox(150,100);
        $package = new BigBox([$item1,$item2,$gift]);

        $package->removeProduct($item2);
        $this->assertEquals(350,$package->getPrice());
    }
}