<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.5kAHkxz' shared service.

return $this->privates['.service_locator.5kAHkxz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'servico' => array('privates', '.errored..service_locator.5kAHkxz.Novosga\\Entity\\Servico', NULL, 'Cannot autowire service ".service_locator.5kAHkxz": it references class "Novosga\\Entity\\Servico" but no such service exists.'),
    'translator' => array('services', 'translator', 'getTranslatorService', false),
));