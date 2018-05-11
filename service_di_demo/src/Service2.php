<?php

namespace Drupal\service_di_demo;

use Drupal\service_di_demo\Service1;

/**
* @file
* @contains Drupal\service_di_demo\Serivce2.
*/
class Service2
{
    /**
     * @var string $demo_variable
     */
    protected $demo_variable;

    /**
     * @var Drupal\service_di_demo\Service1.
     */
    protected $service1;

    /**
     * When the service is created, initialise the value of demo variable.
     */
    public function __construct(Service1 $service1)
    {
        $this->demo_variable = 'Demo variable value 2';
        $this->service1 = $service1;
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
