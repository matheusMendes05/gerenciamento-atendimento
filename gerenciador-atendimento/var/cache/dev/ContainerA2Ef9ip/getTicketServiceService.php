<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Service\TicketService' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\novosga\\core\\Service\\StorageAwareService.php';
include_once $this->targetDirs[3].'\\src\\Service\\TicketService.php';

return $this->services['App\Service\TicketService'] = new \App\Service\TicketService(($this->privates['Novosga\Infrastructure\StorageInterface'] ?? $this->load('getStorageInterfaceService.php')), ($this->services['twig'] ?? $this->getTwigService()));
