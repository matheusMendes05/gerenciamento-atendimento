<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Novosga\Service\UnidadeService' shared autowired service.

include_once $this->targetDirs[3].'/vendor/novosga/core/Service/StorageAwareService.php';
include_once $this->targetDirs[3].'/vendor/novosga/core/Service/UnidadeService.php';

return $this->services['Novosga\Service\UnidadeService'] = new \Novosga\Service\UnidadeService(($this->privates['Novosga\Infrastructure\StorageInterface'] ?? $this->load('getStorageInterfaceService.php')));