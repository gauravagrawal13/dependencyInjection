<?php

namespace Drupal\service_di_demo;

/**
* @file
* @contains Drupal\service_di_demo\Serivce1.
*/
class Service1
{
    /**
     * @var string $demo_variable
     */
    protected $demo_variable;

    /**
     * When the service is created, initialise the value of demo variable.
     */
    public function __construct()
    {
        $this->demo_variable = 'Demo variable value';
    }

    /**
     * Gets the demo variable value.
     *
     * @return string  The demo variable value.
     */
    public function getDemoVariableValue()
    {
        return $this->demo_variable;
    }
}
