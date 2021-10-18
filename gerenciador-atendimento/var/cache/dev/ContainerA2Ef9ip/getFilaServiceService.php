<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Novosga\Service\FilaService' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\novosga\\core\\Service\\StorageAwareService.php';
include_once $this->targetDirs[3].'\\vendor\\novosga\\core\\Service\\FilaService.php';
include_once $this->targetDirs[3].'\\vendor\\novosga\\core\\Service\\Configuration.php';

return $this->services['Novosga\Service\FilaService'] = new \Novosga\Service\FilaService(($this->privates['Novosga\Infrastructure\StorageInterface'] ?? $this->load('getStorageInterfaceService.php')), ($this->privates['Novosga\Service\Configuration'] ?? ($this->privates['Novosga\Service\Configuration'] = new \Novosga\Service\Configuration($this->targetDirs[3]))));
