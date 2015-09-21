<?php

// tests/UnitTestExample/MockTest.php

namespace UnitTestExample;

class MockTest extends \PHPUnit_Framework_TestCase
{
    public function testReturnArgumentStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder('UnitTestExample\Mock')->getMock();

        // // Configure the stub.
        $stub->expects($this->exactly(1))
             ->method('sayHello')
             ->will($this->returnValue('Hello World'))
        ;

        $stub->sayHello();
    }
}
