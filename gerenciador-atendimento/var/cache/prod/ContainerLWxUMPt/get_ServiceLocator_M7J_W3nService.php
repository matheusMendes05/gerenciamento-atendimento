<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.m7J.w3n' shared service.

return $this->privates['.service_locator.m7J.w3n'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'dispatcher' => array('privates', 'App\\Service\\EventDispatcher', 'getEventDispatcher2Service.php', true),
    'translator' => array('services', 'translator', 'getTranslatorService', false),
    'usuarioService' => array('services', 'Novosga\\Service\\UsuarioService', 'getUsuarioServiceService.php', true),
));
