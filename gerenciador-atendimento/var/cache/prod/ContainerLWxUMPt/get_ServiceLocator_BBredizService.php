<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.bBrediz' shared service.

return $this->privates['.service_locator.bBrediz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'filaService' => array('services', 'Novosga\\Service\\FilaService', 'getFilaServiceService.php', true),
    'usuarioService' => array('services', 'Novosga\\Service\\UsuarioService', 'getUsuarioServiceService.php', true),
));