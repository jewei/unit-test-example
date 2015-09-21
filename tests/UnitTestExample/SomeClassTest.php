<?php

// tests/UnitTestExample/SomeClassTest.php

namespace UnitTestExample;

class SomeClassTest extends \PHPUnit_Framework_TestCase
{
    public function testStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder('UnitTestExample\SomeClass')
                     ->getMock();

        // Configure the stub.
        $stub->expects($this->any())
             ->method('doSomething')
             ->will($this->returnValue('foo'));

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());
    }
}
