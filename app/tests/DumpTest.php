<?php

namespace Test;

use App\Dump;

use PHPUnit\Framework\TestCase;

class DumpTest extends TestCase
{
    public function testFoo()
    {
        $str = new Dump();
        self::assertEquals('foo', $str->foo());
    }
}