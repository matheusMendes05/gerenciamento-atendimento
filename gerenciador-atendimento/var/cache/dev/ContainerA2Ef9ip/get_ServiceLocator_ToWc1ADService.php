<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.toWc1AD' shared service.

return $this->privates['.service_locator.toWc1AD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'service' => array('privates', 'App\\Service\\ModuleService', 'getModuleServiceService.php', true),
    'translator' => array('services', 'translator', 'getTranslatorService', false),
));
