<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Security\UserProvider' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/security-core/User/UserProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/Security/User/EntityUserProvider.php';
include_once $this->targetDirs[3].'/src/Security/UserProvider.php';

return $this->privates['App\Security\UserProvider'] = new \App\Security\UserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()));
