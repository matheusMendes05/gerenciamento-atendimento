<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.7p4cT.l' shared service.

return $this->privates['.service_locator.7p4cT.l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'filaService' => array('services', 'Novosga\\Service\\FilaService', 'getFilaServiceService.php', true),
    'unidade' => array('privates', '.errored..service_locator.7p4cT.l.Novosga\\Entity\\Unidade', NULL, 'Cannot autowire service ".service_locator.7p4cT.l": it references class "Novosga\\Entity\\Unidade" but no such service exists.'),
    'usuarioService' => array('services', 'Novosga\\Service\\UsuarioService', 'getUsuarioServiceService.php', true),
));
