<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.O9PQj_0' shared service.

return $this->privates['.service_locator.O9PQj_0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'local' => array('privates', '.errored..service_locator.O9PQj_0.Novosga\\Entity\\Local', NULL, 'Cannot autowire service ".service_locator.O9PQj_0": it references class "Novosga\\Entity\\Local" but no such service exists.'),
    'translator' => array('services', 'translator', 'getTranslatorService', false),
));