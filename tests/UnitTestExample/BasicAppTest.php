<?php

// tests/UnitTestExample/BasicAppTest.php

namespace UnitTestExample;

class BasicAppTest extends \UnitTestExample\TestBase
{
    protected $user_name;

    public function setUp()
    {
        // Just like __construct(), we can use this method to setup mock objects
        // or mock connections.
        $this->user_name = 'Adam';
    }

    public function tearDown()
    {
        // This is like __destruct(). We can clean up test data here.
    }

    public function testUsername()
    {
        $this->assertEquals('Adam', $this->user_name);
    }

    public function testGetDateTime()
    {
        $app = new BasicApp();

        $this->assertTrue($app->getDateTime('2015-09-10 18:33:44') instanceof \DateTime);

        $this->assertEquals(
            '2015-09-10 18:33:44',
            $app->getDateTime('2015-09-10 18:33:44')->format('Y-m-d H:i:s')
        );
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $result)
    {
        $app = new BasicApp();

        $this->assertEquals($result, $app->add($a, $b));
    }

    public function additionProvider()
    {
        return array(
            array(1, 1, 2),
            array(2, 2, 4),
            array(4, 4, 8),
            array(8, 8, 16),
        );
    }
}
