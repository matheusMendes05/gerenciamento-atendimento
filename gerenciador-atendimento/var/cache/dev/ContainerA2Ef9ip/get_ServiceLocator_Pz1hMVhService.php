<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Pz1hMVh' shared service.

return $this->privates['.service_locator.Pz1hMVh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'translator' => array('services', 'translator', 'getTranslatorService', false),
    'unidade' => array('privates', '.errored..service_locator.Pz1hMVh.Novosga\\Entity\\Unidade', NULL, 'Cannot autowire service ".service_locator.Pz1hMVh": it references class "Novosga\\Entity\\Unidade" but no such service exists.'),
));
