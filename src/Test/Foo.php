<?php

namespace Vendor\Package\Test;

use Vendor\Package\Import\Bar;

/**
 * Class Foo
 * @package Vendor\Package\Test
 * @author Felix Althaus <felix.althaus@undkonsorten.com>
 */
class Foo
{

    /**
     * @var Bar
     */
    protected $bar;

    public function __construct(Bar $bar)
    {
        $this->bar = $bar;
    }

    public function identifyBar()
    {
        return $this->bar->identify();
    }

}