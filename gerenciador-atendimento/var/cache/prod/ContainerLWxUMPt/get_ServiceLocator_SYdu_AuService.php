<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.SYdu.au' shared service.

return $this->privates['.service_locator.SYdu.au'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'perfil' => array('privates', '.errored..service_locator.SYdu.au.Novosga\\Entity\\Perfil', NULL, 'Cannot autowire service ".service_locator.SYdu.au": it references class "Novosga\\Entity\\Perfil" but no such service exists.'),
));