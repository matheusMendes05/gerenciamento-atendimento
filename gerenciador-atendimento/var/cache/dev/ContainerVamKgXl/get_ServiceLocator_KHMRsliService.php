<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.KHMRsli' shared service.

return $this->privates['.service_locator.KHMRsli'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'translator' => array('services', 'translator', 'getTranslatorService', false),
    'usuario' => array('privates', '.errored..service_locator.KHMRsli.Novosga\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator.KHMRsli": it references class "Novosga\\Entity\\Usuario" but no such service exists.'),
    'usuarioService' => array('services', 'Novosga\\Service\\UsuarioService', 'getUsuarioServiceService.php', true),
));