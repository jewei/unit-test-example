<?php

// tests/UnitTestExample/EqualsTest.php

namespace UnitTestExample;

class EqualsTest extends \PHPUnit_Framework_TestCase
{
    public function testEqual()
    {
        $this->assertEquals('foo', 'foo');
    }

    public function testFailure()
    {
        $this->assertNotEquals('bar', 'foo');
    }
}
