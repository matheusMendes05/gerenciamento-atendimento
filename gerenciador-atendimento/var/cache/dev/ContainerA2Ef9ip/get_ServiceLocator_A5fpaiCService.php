<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.a5fpaiC' shared service.

return $this->privates['.service_locator.a5fpaiC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'agendamento' => array('privates', '.errored..service_locator.a5fpaiC.Novosga\\Entity\\Agendamento', NULL, 'Cannot autowire service ".service_locator.a5fpaiC": it references class "Novosga\\Entity\\Agendamento" but no such service exists.'),
    'atendimentoService' => array('services', 'Novosga\\Service\\AtendimentoService', 'getAtendimentoServiceService.php', true),
    'translator' => array('services', 'translator', 'getTranslatorService', false),
));