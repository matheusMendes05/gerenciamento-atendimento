<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Novosga\Service\UsuarioService' shared autowired service.

include_once $this->targetDirs[3].'/vendor/novosga/core/Service/StorageAwareService.php';
include_once $this->targetDirs[3].'/vendor/novosga/core/Service/UsuarioService.php';

return $this->services['Novosga\Service\UsuarioService'] = new \Novosga\Service\UsuarioService(($this->privates['Novosga\Infrastructure\StorageInterface'] ?? $this->load('getStorageInterfaceService.php')));
