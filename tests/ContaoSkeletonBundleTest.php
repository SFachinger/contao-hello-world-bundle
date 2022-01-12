<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace SFachinger\ContaoHelloWorldBundle\Tests;

use SFachinger\ContaoHelloWorldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('SFachinger\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}
