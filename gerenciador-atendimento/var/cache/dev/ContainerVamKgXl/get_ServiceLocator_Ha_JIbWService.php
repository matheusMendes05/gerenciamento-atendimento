<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Ha.jIbW' shared service.

return $this->privates['.service_locator.Ha.jIbW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'atendimento' => array('privates', '.errored..service_locator.Ha.jIbW.Novosga\\Entity\\Atendimento', NULL, 'Cannot autowire service ".service_locator.Ha.jIbW": it references class "Novosga\\Entity\\Atendimento" but no such service exists.'),
    'service' => array('services', 'App\\Service\\TicketService', 'getTicketServiceService.php', true),
    'translator' => array('services', 'translator', 'getTranslatorService', false),
));
