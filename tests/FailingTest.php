<?php

namespace Vendor\Package\Tests;

use PHPUnit\Framework\TestCase;
use Vendor\Package\Test\Bar;
use Vendor\Package\Test\Foo;

/**
 * Class FailingTest
 * @package Vendor\Package\Tests
 * @author Felix Althaus <felix.althaus@undkonsorten.com>
 */
class FailingTest extends TestCase
{

    /**
     * @test
     */
    public function importedNamespaceFailsIfPreceeded()
    {
        $bar1 = new Bar();
        $bar2 = new \Vendor\Package\Import\Bar();
        $foo = new Foo($bar2);
        $this->assertEquals(Bar::class, $bar1->identify());
        $this->assertEquals(\Vendor\Package\Import\Bar::class, $foo->identifyBar());
    }

}