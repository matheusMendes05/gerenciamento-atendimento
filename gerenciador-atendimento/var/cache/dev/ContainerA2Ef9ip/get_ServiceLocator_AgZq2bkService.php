<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.agZq2bk' shared service.

return $this->privates['.service_locator.agZq2bk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'translator' => array('services', 'translator', 'getTranslatorService', false),
));
