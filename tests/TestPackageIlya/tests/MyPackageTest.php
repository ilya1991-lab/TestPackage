<?php

declare(strict_types=1);

namespace TestPackageIlya\tests;

use TestPackageIlya\OtusTestPackage\MyPackage;
use PHPUnit\Framework\TestCase;

class MyPackageTest extends TestCase
{
    public function testSayHello()
    {
        $package = new MyPackage();
        $this->assertEquals("Hello from MyPackage!", $package->sayHello());
    }
}
