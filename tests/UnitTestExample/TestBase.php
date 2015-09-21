<?php

// tests/UnitTestExample/TestBase.php

namespace UnitTestExample;

/**
 * We can extends PHPUnit_Framework_TestCase to add more common test methods to
 * be share with other test files.
 */
class TestBase extends \PHPUnit_Framework_TestCase
{
    protected $variables = array();

    protected function getMeSomeVariables()
    {
        return $this->$variables;
    }
}
