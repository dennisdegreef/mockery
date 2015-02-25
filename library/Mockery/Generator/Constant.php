<?php

namespace Mockery\Generator;

/**
 * Class Constant emulates a class constant
 *
 * @package Mockery\Generator
 */
class Constant
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int|string
     */
    private $value;

    /**
     * @param string     $name
     * @param int|string $value
     */
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }
}