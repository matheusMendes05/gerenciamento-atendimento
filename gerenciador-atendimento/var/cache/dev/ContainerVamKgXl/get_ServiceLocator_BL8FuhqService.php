<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.bL8Fuhq' shared service.

return $this->privates['.service_locator.bL8Fuhq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'prioridade' => array('privates', '.errored..service_locator.bL8Fuhq.Novosga\\Entity\\Prioridade', NULL, 'Cannot autowire service ".service_locator.bL8Fuhq": it references class "Novosga\\Entity\\Prioridade" but no such service exists.'),
    'translator' => array('services', 'translator', 'getTranslatorService', false),
));
