<?php

namespace Drupal\service_di_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\service_di_demo\Service1;
use Drupal\service_di_demo\Service2;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
* @file
* @contains Drupal\service_di_demo\Controller\ServiceDemoController.
*/
class ServiceDemoController extends ControllerBase
{

    /** 
   * @var \Drupal\service_di_demo\Service1
   */
    protected $service1;

    /** 
   * @var \Drupal\service_di_demo\Service2 
   */
    protected $service2;
    
    /**
   * @param  \Drupal\service_di_demo\Service1 $service1 The service 1
   * @param  \Drupal\service_di_demo\Service2 $service2 The service 2
   */
    public function __construct(Service1 $service1, Service2 $service2)
    {
        $this->service1 = $service1;
        $this->service2 = $service2;
    }

    /**
   * {@inheritdoc}
   */
    public static function create(ContainerInterface $container) 
    {
        return new static(
        $container->get('service_di_demo.service1'),
        $container->get('service_di_demo.service2')
        );
    }

    /**
   * @return  array  Simple markup
   */
    public function service1_example() 
    {
        return [
        '#markup' => $this->service1->getDemoVariableValue()
        ];
    }

    /**
   * @return  array  Simple markup
   */
    public function service2_example() 
    {
        return [
        '#markup' => $this->service2->getDemoVariableValue()
        ];
    }
}
