<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.zWs_s26' shared service.

return $this->privates['.service_locator.zWs_s26'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'securityService' => array('privates', 'App\\Service\\SecurityService', 'getSecurityServiceService.php', true),
    'servicoService' => array('services', 'Novosga\\Service\\ServicoService', 'getServicoServiceService.php', true),
    'translator' => array('services', 'translator', 'getTranslatorService', false),
    'usuarioService' => array('services', 'Novosga\\Service\\UsuarioService', 'getUsuarioServiceService.php', true),
));
