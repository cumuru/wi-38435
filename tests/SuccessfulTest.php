<?php

namespace Vendor\Package\Tests;

use PHPUnit\Framework\TestCase;
use Vendor\Package\Import\Bar;
use Vendor\Package\Test\Foo;

/**
 * Class SuccessfulTest
 * @package Vendor\Package\Tests
 * @author Felix Althaus <felix.althaus@undkonsorten.com>
 */
class SuccessfulTest extends TestCase
{

    /**
     * @test
     */
    public function importedNamespaceWorks()
    {
        $bar = new Bar();
        $foo = new Foo($bar);
        $this->assertEquals($foo->identifyBar(), Bar::class);
    }


}