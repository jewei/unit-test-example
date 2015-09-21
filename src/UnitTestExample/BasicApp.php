<?php

// src/UnitTestExample/BasicApp.php

namespace UnitTestExample;

class BasicApp
{
    public function getDateTime($time)
    {
        return new \DateTime($time);
    }

    public function add($a, $b)
    {
        return $a + $b;
    }
}
