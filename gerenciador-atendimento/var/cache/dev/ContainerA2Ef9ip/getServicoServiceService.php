<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Novosga\Service\ServicoService' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\novosga\\core\\Service\\StorageAwareService.php';
include_once $this->targetDirs[3].'\\vendor\\novosga\\core\\Service\\ServicoService.php';

return $this->services['Novosga\Service\ServicoService'] = new \Novosga\Service\ServicoService(($this->privates['Novosga\Infrastructure\StorageInterface'] ?? $this->load('getStorageInterfaceService.php')));
